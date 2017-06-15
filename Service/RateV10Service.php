<?php

namespace MobileCart\FedexBundle\Service;

use MobileCart\CoreBundle\CartComponent\ArrayWrapper;
use MobileCart\FedexBundle\Api\RateV10\ComplexType\Address;
use MobileCart\FedexBundle\Api\RateV10\ComplexType\Contact;
use MobileCart\FedexBundle\Api\RateV10\ComplexType\ContactAndAddress;
use MobileCart\FedexBundle\Api\RateV10\ComplexType\Dimensions;
use MobileCart\FedexBundle\Api\RateV10\ComplexType\Party;
use MobileCart\FedexBundle\Api\RateV10\ComplexType\RequestedPackageLineItem;
use MobileCart\FedexBundle\Api\RateV10\ComplexType\Weight;
use MobileCart\FedexBundle\Api\RateV10\SimpleType\DropoffType;
use MobileCart\FedexBundle\Api\RateV10\SimpleType\LinearUnits;
use MobileCart\FedexBundle\Api\RateV10\SimpleType\PackagingType;
use MobileCart\FedexBundle\Api\RateV10\SimpleType\RateRequestType;
use MobileCart\FedexBundle\Api\RateV10\SimpleType\ServiceType;
use MobileCart\FedexBundle\Api\RateV10\SimpleType\WeightUnits;
use MobileCart\FedexBundle\Api\RateV10\SoapService;
use MobileCart\FedexBundle\Api\RateV10\ComplexType\RateRequest;
use MobileCart\FedexBundle\Api\RateV10\ComplexType\WebAuthenticationCredential;
use MobileCart\FedexBundle\Api\RateV10\ComplexType\WebAuthenticationDetail;
use MobileCart\FedexBundle\Api\RateV10\ComplexType\ClientDetail;
use MobileCart\FedexBundle\Api\RateV10\ComplexType\VersionId;
use MobileCart\FedexBundle\Api\RateV10\ComplexType\RequestedShipment;

class RateV10Service
{

    protected $api_key;

    protected $api_password;

    protected $account_nbr;

    protected $meter_nbr;

    protected $src_address; // ArrayWrapper

    protected $dest_address; // ArrayWrapper

    protected $package_type = 'YOUR_PACKAGING';

    protected $package_count = 1;

    protected $weight = 0;

    protected $weight_unit = 'LB';

    protected $measure_unit = 'IN'; // IN or CM

    protected $dropoff_type = 'REGULAR_PICKUP';

    //protected $service_type = 'FEDEX_GROUND';

    protected $company = 'Fedex';

    protected $request;

    protected $response;

    protected $rates = [];

    protected $methods = [];

    protected $cartItems = [];

    /**
     * @var \Psr\Log\LoggerInterface
     */
    protected $logger;

    public function setApiKey($apiKey)
    {
        $this->api_key = $apiKey;
        return $this;
    }

    public function getApiKey()
    {
        return $this->api_key;
    }

    public function setApiPassword($apiPassword)
    {
        $this->api_password = $apiPassword;
        return $this;
    }

    public function getApiPassword()
    {
        return $this->api_password;
    }

    public function setAccountNbr($accountNbr)
    {
        $this->account_nbr = $accountNbr;
        return $this;
    }

    public function getAccountNbr()
    {
        return $this->account_nbr;
    }

    public function setMeterNbr($meterNbr)
    {
        $this->meter_nbr = $meterNbr;
        return $this;
    }

    public function getMeterNbr()
    {
        return $this->meter_nbr;
    }

    public function setSrcAddress($srcAddress)
    {
        $this->src_address = $srcAddress; // object
        return $this;
    }

    public function getSrcAddress()
    {
        return $this->src_address;
    }

    public function setDestAddress($destAddress)
    {
        $this->dest_address = $destAddress;
        return $this;
    }

    public function getDestAddress()
    {
        return $this->dest_address;
    }

    public function setPackageType($packageType)
    {
        if (!in_array($packageType, PackagingType::getTypes())) {
            throw new \InvalidArgumentException("Fedex: Invalid package type");
        }
        $this->package_type = $packageType;
        return $this;
    }

    public function getPackageType()
    {
        return $this->package_type;
    }

    public function setPackageCount($count)
    {
        $this->package_count = $count;
        return $this;
    }

    public function getPackageCount()
    {
        return $this->package_count;
    }

    public function setWeight($weight)
    {
        $this->weight = $weight;
        return $this;
    }

    public function getWeight()
    {
        return $this->weight;
    }

    public function setWeightUnit($weightUnit)
    {
        if (!in_array($weightUnit, WeightUnits::getUnits())) {
            throw new \InvalidArgumentException("Invalid Weight Unit Specified");
        }
        $this->weight_unit = $weightUnit;
        return $this;
    }

    public function getWeightUnit()
    {
        return $this->weight_unit;
    }

    public function setMeasureUnit($measureUnit)
    {
        if (!in_array($measureUnit, ['IN','CM'])) {
            throw new \InvalidArgumentException("Measure Unit must be IN or CM");
        }

        $this->measure_unit = $measureUnit;
        return $this;
    }

    public function getMeasureUnit()
    {
        return $this->measure_unit;
    }

    public function setDropoffType($dropoffType)
    {
        $this->dropoff_type = $dropoffType;
        return $this;
    }

    public function getDropoffType()
    {
        return $this->dropoff_type;
    }

    public function setRequest($request)
    {
        $this->request = $request;
        return $this;
    }

    public function getRequest()
    {
        return $this->request;
    }

    public function setResponse($response)
    {
        $this->response = $response;
        return $this;
    }

    public function getResponse()
    {
        return $this->response;
    }

    public function setMethodsCsv($csv = ' ')
    {
        $enabled = [];
        $csv = trim($csv);
        if ($csv) {
            $methods = explode(',', $csv);
            if ($methods) {
                foreach($methods as $method) {
                    $method = trim($method);
                    if ($method) {
                        $enabled[] = $method;
                    }
                }
                if ($enabled) {
                    $this->setMethods($enabled);
                }
            }
        }
        return $this;
    }

    public function setMethods(array $methods)
    {
        $this->methods = $methods;
        return $this;
    }

    public function getMethods()
    {
        return $this->methods;
    }

    public function setCartItems(array $cartItems)
    {
        $this->cartItems = $cartItems;
        return $this;
    }

    public function getCartItems()
    {
        return $this->cartItems;
    }

    /**
     * @param $logger
     * @return $this
     */
    public function setLogger($logger)
    {
        $this->logger = $logger;
        return $this;
    }

    /**
     * @return \Psr\Log\LoggerInterface
     */
    public function getLogger()
    {
        return $this->logger;
    }

    public function buildRateRequest()
    {
        $request = new RateRequest();

        // Authentication
        $cred = new WebAuthenticationCredential();
        $cred->setKey($this->getApiKey())
            ->setPassword($this->getApiPassword());

        $auth = new WebAuthenticationDetail();
        $auth->setUserCredential($cred);

        $request->setWebAuthenticationDetail($auth);

        // Client Detail
        $account = new ClientDetail();
        $account->setAccountNumber($this->getAccountNbr())
            ->setMeterNumber($this->getMeterNbr());

        $request->setClientDetail($account);

        // Version
        $version = new VersionId();
        // already has defaults set
        $request->setVersion($version);

        // Origin Address
        $origin = new ContactAndAddress();
        $originAddress = new Address();
        $originAddress
            ->setStreetLines(explode('|', $this->getSrcAddress()->getStreet()))
            ->setCity($this->getSrcAddress()->getCity())
            ->setPostalCode($this->getSrcAddress()->getPostcode())
            ->setCountryCode($this->getSrcAddress()->getCountry())
            ->setStateOrProvinceCode($this->getSrcAddress()->getProvince())
        ;

        $origin->setAddress($originAddress);

        // Specify Shipment
        $shipment = new RequestedShipment();
        $shipment->setOrigin($origin);

        // Destination Address
        $dest = new Party();

        $destAddress = new Address();
        $destination = $this->getDestAddress();
        $destAddress
            ->setStreetLines(explode('|', $destination->getStreet()))
            ->setCity($destination->getCity())
            ->setPostalCode($destination->getPostcode())
            ->setCountryCode($destination->getCountry())
            ->setStateOrProvinceCode($destination->getProvince())
            ;

        $dest->setAddress($destAddress);
        $shipment->setRecipient($dest);

        // Drop-off
        $dropoff = new DropoffType($this->getDropoffType());
        $shipment->setDropoffType($dropoff);

        $packageCount = count($this->getCartItems());

        // Package
        $packageType = new PackagingType($this->getPackageType());
        $shipment->setPackagingType($packageType);
        $shipment->setPackageCount($packageCount);

        // Package Line items
        $packages = [];

        if ($this->getCartItems()) {

            $totalWeight = 0;

            foreach($this->getCartItems() as $cartItem) {

                $weightVal = (float) $cartItem->getWeight();
                if ($weightVal < 0.01) {
                    $weightVal = 0.2;
                }

                $weightQty = $cartItem->getQty() * $weightVal;
                $weightQty = (float) number_format($weightQty, 1, '.', '');

                $totalWeight += $weightQty;

                $height = (float) $cartItem->getHeight();
                if ($height < 0.1) {
                    $height = (float) 4.0;
                }
                $height = (float) number_format($height, 1, '.', '');

                $width = (float) $cartItem->getWidth();
                if ($width < 0.1) {
                    $width = (float) 4.0;
                }
                $width = (float) number_format($width, 1, '.', '');

                $length = (float) $cartItem->getLength();
                if ($length < 0.1) {
                    $length = (float) 4.0;
                }
                $length = (float) number_format($length, 1, '.', '');

                // Weight
                $weightObj = new Weight();
                $weightUnits = new WeightUnits($this->getWeightUnit());
                $weightObj->setUnits($weightUnits);
                $weightObj->setValue($weightQty);

                $package = new RequestedPackageLineItem();
                $dimensions = new Dimensions();
                $dimensions->setUnits(new LinearUnits($this->getMeasureUnit()))
                    ->setHeight($height)
                    ->setWidth($width)
                    ->setLength($length);

                $package->setWeight($weightObj)
                    ->setDimensions($dimensions)
                    ->setGroupPackageCount(1);

                $packages[] = $package;
            }

            $this->setWeight($totalWeight);
        }

        if (!$packages) {

            // Weight
            $weightObj = new Weight();
            $weightUnits = new WeightUnits($this->getWeightUnit());
            $weightObj->setUnits($weightUnits);
            $weightObj->setValue(0.5);

            $package = new RequestedPackageLineItem();
            $dimensions = new Dimensions();
            $dimensions->setUnits(new LinearUnits($this->getMeasureUnit()))
                ->setHeight(6.0)
                ->setWidth(6.0)
                ->setLength(6.0);

            $package->setWeight($weightObj)
                ->setDimensions($dimensions)
                ->setGroupPackageCount(1);

            $packages[] = $package;
        }

        $shipment->setRequestedPackageLineItems($packages);

        // Weight
        $totalWeightObj = new Weight();
        $totalWeightObj->setUnits(new WeightUnits($this->getWeightUnit()));
        $totalWeightObj->setValue($this->getWeight());

        $shipment->setTotalWeight($totalWeightObj);

        $request->setRequestedShipment($shipment);
        $this->setRequest($request);
        return $this;
    }

    public function sendRateRequest()
    {
        $clientClass = 'MobileCart\FedexBundle\Api\RateV10\SoapClient';
        $options = [
            'exceptions' => 1,
            'keep_alive' => false,
            'connection_timeout' => 500000,
        ];

        $wsdl = realpath(__DIR__ . '/../Api/RateV10/fedex_v10.wsdl');
        $svc = new SoapService($clientClass, $wsdl, $options);

        $success = false;
        for ($x = 1; $x <= 3; $x++) {
            try {
                $this->setResponse($svc->getRates($this->getRequest()));
                $success = true;
            } catch(\Exception $e) {
                $this->getLogger()->error("FedEx Error : try ({$x}) : " . $e->getMessage());
            }

            if ($success) {
                break;
            }
        }

        return $this;
    }

    public function resetRates()
    {
        $this->rates = [];
        return $this;
    }

    public function getRates()
    {
        if ($this->rates) {
            return $this->rates;
        }

        $this->buildRateRequest()
            ->sendRateRequest();

        // order matters here
        $rateTypes = [
            'RATED_ACCOUNT_PACKAGE',
            'PAYOR_ACCOUNT_PACKAGE',
            'RATED_ACCOUNT_SHIPMENT',
            'PAYOR_ACCOUNT_SHIPMENT',
            'RATED_LIST_PACKAGE',
            'PAYOR_LIST_PACKAGE',
            'RATED_LIST_SHIPMENT',
            'PAYOR_LIST_SHIPMENT',
        ];

        /** @var \MobileCart\FedexBundle\Api\RateV10\ComplexType\RateReply $response */
        $response = $this->getResponse();
        if (is_object($response)
            && in_array($response->getHighestSeverity(), ['SUCCESS', 'NOTE', 'WARNING'])
            && $response->getRateReplyDetails()
        ) {

            $this->getLogger()->info("FedEx Response Success Level : {$response->getHighestSeverity()}");
            if ($response->getHighestSeverity() == 'WARNING') {
                $this->getLogger()->alert("FedEx Warning in Response : " . print_r($response, 1));
            }

            // parse out rates into ArrayWrapper objects
            foreach($response->getRateReplyDetails() as $rate) {

                $serviceType = $rate->getServiceType();

                // check for enabled options
                if ($this->getMethods()
                    && !in_array($serviceType, $this->getMethods())
                ) {
                    $this->getLogger()->info("FedEx Response Handler : Skipping method: {$serviceType}");
                    continue;
                }

                $nameParts = explode('_', $serviceType);
                if ($nameParts[0] == 'FEDEX') {
                    unset($nameParts[0]); // remove 'FEDEX'
                }

                foreach($nameParts as $k => $v) {
                    $nameParts[$k] = ucfirst(strtolower($v));
                }
                $method = implode(' ', $nameParts);

                $amount = null;
                $rateTypeAmounts = [];

                foreach ($rate->getRatedShipmentDetails() as $ratedShipmentDetail) {
                    $tmpAmount = (string) $ratedShipmentDetail->getShipmentRateDetail()->getTotalNetCharge()->getAmount();
                    $rateType = (string) $ratedShipmentDetail->getShipmentRateDetail()->getRateType();
                    $rateTypeAmounts[$rateType] = $tmpAmount;
                }

                foreach ($rateTypes as $rateType) {
                    if (isset($rateTypeAmounts[$rateType])) {
                        $amount = $rateTypeAmounts[$rateType];
                        break;
                    }
                }

                if (is_null($amount)) {

                    $shipmentDetail = is_array($rate->getRatedShipmentDetails())
                        ? $rate->getRatedShipmentDetails()[0]
                        : $rate->getRatedShipmentDetails();

                    $amount = (string) $shipmentDetail->getShipmentRateDetail()->getTotalNetCharge()->getAmount();
                }

                $this->rates[] = new ArrayWrapper([
                    'id' => $serviceType,
                    'price' => $amount,
                    'company' => 'FedEx',
                    'method' => $method,
                    'code' => "FedEx {$method}",
                ]);
            }
        } else {

            $skus = [];
            if ($this->getCartItems()) {
                foreach($this->getCartItems() as $item) {
                    $skus[] = $item->getSku();
                }
            }

            $this->getLogger()->alert("FedEx Error . No rates for SKUs : " . implode(',', $skus) . " , Response: " . print_r($response, 1));
        }

        return $this->rates;
    }

}
