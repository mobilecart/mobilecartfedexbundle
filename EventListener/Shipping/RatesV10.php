<?php

namespace MobileCart\FedexBundle\EventListener\Shipping;

use MobileCart\CoreBundle\CartComponent\ArrayWrapper;
use MobileCart\CoreBundle\Shipping\Rate;
use Symfony\Component\EventDispatcher\Event;

/**
 * Class RatesV10
 *  This is a basic Shipping Rate collector
 *
 */
class RatesV10 extends Rate
{
    public function __construct()
    {
        parent::__construct();
    }

    protected $entityService;

    protected $shippingService;

    protected $event;

    /**
     * @var \Psr\Log\LoggerInterface
     */
    protected $logger;

    protected function setEvent($event)
    {
        $this->event = $event;
        return $this;
    }

    protected function getEvent()
    {
        return $this->event;
    }

    protected function getReturnData()
    {
        return $this->getEvent()->getReturnData()
            ? $this->getEvent()->getReturnData()
            : [];
    }

    /**
     * @param $entityService
     * @return $this
     */
    public function setEntityService($entityService)
    {
        $this->entityService = $entityService;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getEntityService()
    {
        return $this->entityService;
    }

    public function setShippingService($shippingService)
    {
        $this->shippingService = $shippingService;
        return $this;
    }

    public function getShippingService()
    {
        return $this->shippingService;
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

    /**
     * Get shipping rates while filtering on criteria
     *
     * @param Event $event
     */
    public function onShippingRateCollect(Event $event)
    {
        $this->setEvent($event);
        $returnData = $this->getReturnData();

        $rateRequest = $event->getRateRequest();

        if (!$rateRequest->getPostcode()) {
            return;
        }

        $svc = $this->getShippingService()->setCartItems($rateRequest->getCartItems());

        $destination = new ArrayWrapper([
            'street' => '',
            'city' => '',
            'province' => $rateRequest->getRegion(),
            'postcode' => $rateRequest->getPostcode(),
            'country' => $rateRequest->getCountryId(),
        ]);

        $svc->setDestAddress($destination);

        $source = new ArrayWrapper([
            'street' => '',
            'city' => '',
            'province' => $rateRequest->getSrcRegion(),
            'postcode' => $rateRequest->getSrcPostcode(),
            'country' => $rateRequest->getSrcCountryId(),
        ]);

        $svc->setSrcAddress($source);

        $this->getLogger()->info("FedEx Source : " . print_r($source, 1));
        $this->getLogger()->info("FedEx Destination : " . print_r($destination, 1));

        $methods = $svc->getRates();

        $this->getLogger()->info("FedEx Rates Count: " . count($methods));

        $rates = [];
        if ($methods) {
            foreach($methods as $method) {
                $rate = new Rate();
                $rate->addData($method->getData());
                $rates[$rate->getPrice()] = $rate;
            }
            ksort($rates);
            foreach($rates as $rate) {
                $event->addRate($rate);
            }
        } else {
            $skus = [];
            if ($rateRequest->getCartItems()) {
                foreach($rateRequest->getCartItems() as $item) {
                    $skus[] = $item->getSku();
                }
            }
            $this->getLogger()->alert("FedEx Error : No Shipping methods for SKUs: " . implode(',', $skus));
        }

        $event->setReturnData($returnData);
    }
}
