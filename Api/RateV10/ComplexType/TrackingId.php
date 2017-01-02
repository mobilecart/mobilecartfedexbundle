<?php

namespace MobileCart\FedexBundle\Api\RateV10\ComplexType;

use MobileCart\FedexBundle\Api\RateV10\SimpleType;

/**
 *
 *
 */
class TrackingId extends ComplexTypeAbstract
{
    const CLASS_NAME = 'TrackingId';

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\TrackingIdType|null $TrackingIdType
     */
    protected $TrackingIdType;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $FormId
     */
    protected $FormId;

    /**

     * minOccurs = 1
     * maxOccurs = 1
     *
     * @var string $TrackingNumber
     */
    protected $TrackingNumber;


    /**
     * @param SimpleType\TrackingIdType|null $trackingIdType
     * @return TrackingId
     */
    public function setTrackingIdType(SimpleType\TrackingIdType $trackingIdType = null)
    {
        $this->TrackingIdType = $trackingIdType;

        return $this;
    }

    /**
     * @return SimpleType\TrackingIdType|null
     */
    public function getTrackingIdType()
    {
        return $this->TrackingIdType;
    }

    /**
     * @param string|null $formId
     * @return TrackingId
     */
    public function setFormId($formId)
    {
        $this->FormId = $formId;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getFormId()
    {
        return $this->FormId;
    }

    /**
     * @param string $trackingNumber
     * @return TrackingId
     */
    public function setTrackingNumber($trackingNumber)
    {
        $this->TrackingNumber = $trackingNumber;

        return $this;
    }

    /**
     * @return string
     */
    public function getTrackingNumber()
    {
        return $this->TrackingNumber;
    }


}

