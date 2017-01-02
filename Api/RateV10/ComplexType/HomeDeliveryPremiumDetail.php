<?php

namespace MobileCart\FedexBundle\Api\RateV10\ComplexType;

use MobileCart\FedexBundle\Api\RateV10\SimpleType;

/**
 * The descriptive data required by FedEx for home delivery services. 
 *
 *
 */
class HomeDeliveryPremiumDetail extends ComplexTypeAbstract
{
    const CLASS_NAME = 'HomeDeliveryPremiumDetail';

    /**

     * minOccurs = 1
     * maxOccurs = 1
     *
     * @var SimpleType\HomeDeliveryPremiumType $HomeDeliveryPremiumType
     */
    protected $HomeDeliveryPremiumType;

    /**
     * Required for Date Certain Home Delivery. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $Date
     */
    protected $Date;

    /**
     * Required for Date Certain and Appointment Home Delivery. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $PhoneNumber
     */
    protected $PhoneNumber;


    /**
     * @param SimpleType\HomeDeliveryPremiumType $homeDeliveryPremiumType
     * @return HomeDeliveryPremiumDetail
     */
    public function setHomeDeliveryPremiumType(SimpleType\HomeDeliveryPremiumType $homeDeliveryPremiumType)
    {
        $this->HomeDeliveryPremiumType = $homeDeliveryPremiumType;

        return $this;
    }

    /**
     * @return SimpleType\HomeDeliveryPremiumType
     */
    public function getHomeDeliveryPremiumType()
    {
        return $this->HomeDeliveryPremiumType;
    }

    /**
     * @param string|null $date
     * @return HomeDeliveryPremiumDetail
     */
    public function setDate($date)
    {
        $this->Date = $date;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getDate()
    {
        return $this->Date;
    }

    /**
     * @param string|null $phoneNumber
     * @return HomeDeliveryPremiumDetail
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


}

