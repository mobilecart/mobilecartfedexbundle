<?php

namespace MobileCart\FedexBundle\Api\RateV10\ComplexType;

use MobileCart\FedexBundle\Api\RateV10\SimpleType;

/**
 * Descriptive data required for a FedEx shipment that is to be held at the destination FedEx 
 * location for pickup by the recipient. 
 *
 *
 */
class HoldAtLocationDetail extends ComplexTypeAbstract
{
    const CLASS_NAME = 'HoldAtLocationDetail';

    /**
     * Contact phone number for recipient of shipment. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $PhoneNumber
     */
    protected $PhoneNumber;

    /**
     * Contact and address of FedEx facility at which shipment is to be held. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var ContactAndAddress|null $LocationContactAndAddress
     */
    protected $LocationContactAndAddress;

    /**
     * Type of facility at which package/shipment is to be held. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\FedExLocationType|null $LocationType
     */
    protected $LocationType;

    /**
     * Location identification (for facilities identified by an alphanumeric location code). 
     * 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $LocationId
     */
    protected $LocationId;

    /**
     * Location identification (for facilities identified by an numeric location code). 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var integer|null $LocationNumber
     */
    protected $LocationNumber;


    /**
     * @param string|null $phoneNumber
     * @return HoldAtLocationDetail
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->PhoneNumber = $phoneNumber;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getPhoneNumber()
    {
        return $this->PhoneNumber;
    }

    /**
     * @param ContactAndAddress|null $locationContactAndAddress
     * @return HoldAtLocationDetail
     */
    public function setLocationContactAndAddress(ContactAndAddress $locationContactAndAddress = null)
    {
        $this->LocationContactAndAddress = $locationContactAndAddress;

        return $this;
    }

    /**
     * @return ContactAndAddress|null
     */
    public function getLocationContactAndAddress()
    {
        return $this->LocationContactAndAddress;
    }

    /**
     * @param SimpleType\FedExLocationType|null $locationType
     * @return HoldAtLocationDetail
     */
    public function setLocationType(SimpleType\FedExLocationType $locationType = null)
    {
        $this->LocationType = $locationType;

        return $this;
    }

    /**
     * @return SimpleType\FedExLocationType|null
     */
    public function getLocationType()
    {
        return $this->LocationType;
    }

    /**
     * @param string|null $locationId
     * @return HoldAtLocationDetail
     */
    public function setLocationId($locationId)
    {
        $this->LocationId = $locationId;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getLocationId()
    {
        return $this->LocationId;
    }

    /**
     * @param integer|null $locationNumber
     * @return HoldAtLocationDetail
     */
    public function setLocationNumber($locationNumber)
    {
        $this->LocationNumber = $locationNumber;

        return $this;
    }

    /**
     * @return integer|null
     */
    public function getLocationNumber()
    {
        return $this->LocationNumber;
    }


}

