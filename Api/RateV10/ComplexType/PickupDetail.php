<?php

namespace MobileCart\FedexBundle\Api\RateV10\ComplexType;

use MobileCart\FedexBundle\Api\RateV10\SimpleType;

/**
 * This class describes the pickup characteristics of a shipment (e.g. for use in a tag request). 
 * 
 *
 *
 */
class PickupDetail extends ComplexTypeAbstract
{
    const CLASS_NAME = 'PickupDetail';

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $ReadyDateTime
     */
    protected $ReadyDateTime;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $LatestPickupDateTime
     */
    protected $LatestPickupDateTime;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $CourierInstructions
     */
    protected $CourierInstructions;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\PickupRequestType|null $RequestType
     */
    protected $RequestType;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\PickupRequestSourceType|null $RequestSource
     */
    protected $RequestSource;


    /**
     * @param string|null $readyDateTime
     * @return PickupDetail
     */
    public function setReadyDateTime($readyDateTime)
    {
        $this->ReadyDateTime = $readyDateTime;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getReadyDateTime()
    {
        return $this->ReadyDateTime;
    }

    /**
     * @param string|null $latestPickupDateTime
     * @return PickupDetail
     */
    public function setLatestPickupDateTime($latestPickupDateTime)
    {
        $this->LatestPickupDateTime = $latestPickupDateTime;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getLatestPickupDateTime()
    {
        return $this->LatestPickupDateTime;
    }

    /**
     * @param string|null $courierInstructions
     * @return PickupDetail
     */
    public function setCourierInstructions($courierInstructions)
    {
        $this->CourierInstructions = $courierInstructions;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getCourierInstructions()
    {
        return $this->CourierInstructions;
    }

    /**
     * @param SimpleType\PickupRequestType|null $requestType
     * @return PickupDetail
     */
    public function setRequestType(SimpleType\PickupRequestType $requestType = null)
    {
        $this->RequestType = $requestType;

        return $this;
    }

    /**
     * @return SimpleType\PickupRequestType|null
     */
    public function getRequestType()
    {
        return $this->RequestType;
    }

    /**
     * @param SimpleType\PickupRequestSourceType|null $requestSource
     * @return PickupDetail
     */
    public function setRequestSource(SimpleType\PickupRequestSourceType $requestSource = null)
    {
        $this->RequestSource = $requestSource;

        return $this;
    }

    /**
     * @return SimpleType\PickupRequestSourceType|null
     */
    public function getRequestSource()
    {
        return $this->RequestSource;
    }


}

