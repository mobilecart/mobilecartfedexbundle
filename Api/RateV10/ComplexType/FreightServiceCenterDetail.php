<?php

namespace MobileCart\FedexBundle\Api\RateV10\ComplexType;

use MobileCart\FedexBundle\Api\RateV10\SimpleType;

/**
 * This class describes the relationship between a customer-specified address and the FedEx 
 * Freight / FedEx National Freight Service Center that supports that address. 
 *
 *
 */
class FreightServiceCenterDetail extends ComplexTypeAbstract
{
    const CLASS_NAME = 'FreightServiceCenterDetail';

    /**
     * Freight Industry standard non-FedEx carrier identification 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $InterlineCarrierCode
     */
    protected $InterlineCarrierCode;

    /**
     * The name of the Interline carrier. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $InterlineCarrierName
     */
    protected $InterlineCarrierName;

    /**
     * Additional time it might take at the origin or destination to pickup or deliver the 
     * freight. This is usually due to the remoteness of the location. This time is included 
     * in the total transit time. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var integer|null $AdditionalDays
     */
    protected $AdditionalDays;

    /**
     * Service branding which may be used for local pickup or delivery, distinct from service 
     * used for line-haul of customer's shipment. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\ServiceType|null $LocalService
     */
    protected $LocalService;

    /**
     * Distance between customer address (pickup or delivery) and the supporting Freight / 
     * National Freight service center. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var Distance|null $LocalDistance
     */
    protected $LocalDistance;

    /**
     * Time to travel between customer address (pickup or delivery) and the supporting Freight 
     * / National Freight service center. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $LocalDuration
     */
    protected $LocalDuration;

    /**
     * Specifies when/how the customer can arrange for pickup or delivery. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\FreightServiceSchedulingType|null $LocalServiceScheduling
     */
    protected $LocalServiceScheduling;

    /**
     * Specifies days of operation if localServiceScheduling is LIMITED. 
     * minOccurs = 0
     * maxOccurs = unbounded
     *
     * @var SimpleType\DayOfWeekType[] $LimitedServiceDays
     */
    protected $LimitedServiceDays = array();

    /**
     * Freight service center that is a gateway on the border of Canada or Mexico. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $GatewayLocationId
     */
    protected $GatewayLocationId;

    /**
     * Alphabetical code identifying a Freight Service Center 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $Location
     */
    protected $Location;

    /**
     * Freight service center Contact and Address 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var ContactAndAddress|null $ContactAndAddress
     */
    protected $ContactAndAddress;


    /**
     * @param string|null $interlineCarrierCode
     * @return FreightServiceCenterDetail
     */
    public function setInterlineCarrierCode($interlineCarrierCode)
    {
        $this->InterlineCarrierCode = $interlineCarrierCode;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getInterlineCarrierCode()
    {
        return $this->InterlineCarrierCode;
    }

    /**
     * @param string|null $interlineCarrierName
     * @return FreightServiceCenterDetail
     */
    public function setInterlineCarrierName($interlineCarrierName)
    {
        $this->InterlineCarrierName = $interlineCarrierName;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getInterlineCarrierName()
    {
        return $this->InterlineCarrierName;
    }

    /**
     * @param integer|null $additionalDays
     * @return FreightServiceCenterDetail
     */
    public function setAdditionalDays($additionalDays)
    {
        $this->AdditionalDays = $additionalDays;

        return $this;
    }

    /**
     * @return integer|null
     */
    public function getAdditionalDays()
    {
        return $this->AdditionalDays;
    }

    /**
     * @param SimpleType\ServiceType|null $localService
     * @return FreightServiceCenterDetail
     */
    public function setLocalService(SimpleType\ServiceType $localService = null)
    {
        $this->LocalService = $localService;

        return $this;
    }

    /**
     * @return SimpleType\ServiceType|null
     */
    public function getLocalService()
    {
        return $this->LocalService;
    }

    /**
     * @param Distance|null $localDistance
     * @return FreightServiceCenterDetail
     */
    public function setLocalDistance(Distance $localDistance = null)
    {
        $this->LocalDistance = $localDistance;

        return $this;
    }

    /**
     * @return Distance|null
     */
    public function getLocalDistance()
    {
        return $this->LocalDistance;
    }

    /**
     * @param string|null $localDuration
     * @return FreightServiceCenterDetail
     */
    public function setLocalDuration($localDuration)
    {
        $this->LocalDuration = $localDuration;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getLocalDuration()
    {
        return $this->LocalDuration;
    }

    /**
     * @param SimpleType\FreightServiceSchedulingType|null $localServiceScheduling
     * @return FreightServiceCenterDetail
     */
    public function setLocalServiceScheduling(SimpleType\FreightServiceSchedulingType $localServiceScheduling = null)
    {
        $this->LocalServiceScheduling = $localServiceScheduling;

        return $this;
    }

    /**
     * @return SimpleType\FreightServiceSchedulingType|null
     */
    public function getLocalServiceScheduling()
    {
        return $this->LocalServiceScheduling;
    }

    /**
     * @param SimpleType\DayOfWeekType[] $limitedServiceDays
     * @return FreightServiceCenterDetail
     */
    public function setLimitedServiceDays(array $limitedServiceDays = array())
    {
        $this->LimitedServiceDays = $limitedServiceDays;

        return $this;
    }

    /**
     * @return SimpleType\DayOfWeekType[]
     */
    public function getLimitedServiceDays()
    {
        return $this->LimitedServiceDays;
    }

    /**
     * @param string|null $gatewayLocationId
     * @return FreightServiceCenterDetail
     */
    public function setGatewayLocationId($gatewayLocationId)
    {
        $this->GatewayLocationId = $gatewayLocationId;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getGatewayLocationId()
    {
        return $this->GatewayLocationId;
    }

    /**
     * @param string|null $location
     * @return FreightServiceCenterDetail
     */
    public function setLocation($location)
    {
        $this->Location = $location;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getLocation()
    {
        return $this->Location;
    }

    /**
     * @param ContactAndAddress|null $contactAndAddress
     * @return FreightServiceCenterDetail
     */
    public function setContactAndAddress(ContactAndAddress $contactAndAddress = null)
    {
        $this->ContactAndAddress = $contactAndAddress;

        return $this;
    }

    /**
     * @return ContactAndAddress|null
     */
    public function getContactAndAddress()
    {
        return $this->ContactAndAddress;
    }


}

