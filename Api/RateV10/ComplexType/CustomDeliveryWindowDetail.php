<?php

namespace MobileCart\FedexBundle\Api\RateV10\ComplexType;

use MobileCart\FedexBundle\Api\RateV10\SimpleType;

/**
 *
 *
 */
class CustomDeliveryWindowDetail extends ComplexTypeAbstract
{
    const CLASS_NAME = 'CustomDeliveryWindowDetail';

    /**
     * Indicates the type of custom delivery being requested. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\CustomDeliveryWindowType|null $Type
     */
    protected $Type;

    /**
     * Time by which delivery is requested. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $RequestTime
     */
    protected $RequestTime;

    /**
     * Range of dates for custom delivery request; only used if type is BETWEEN. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var DateRange|null $RequestRange
     */
    protected $RequestRange;

    /**
     * Date for custom delivery request; only used for types of ON, BETWEEN, or AFTER. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $RequestDate
     */
    protected $RequestDate;


    /**
     * @param SimpleType\CustomDeliveryWindowType|null $type
     * @return CustomDeliveryWindowDetail
     */
    public function setType(SimpleType\CustomDeliveryWindowType $type = null)
    {
        $this->Type = $type;

        return $this;
    }

    /**
     * @return SimpleType\CustomDeliveryWindowType|null
     */
    public function getType()
    {
        return $this->Type;
    }

    /**
     * @param string|null $requestTime
     * @return CustomDeliveryWindowDetail
     */
    public function setRequestTime($requestTime)
    {
        $this->RequestTime = $requestTime;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getRequestTime()
    {
        return $this->RequestTime;
    }

    /**
     * @param DateRange|null $requestRange
     * @return CustomDeliveryWindowDetail
     */
    public function setRequestRange(DateRange $requestRange = null)
    {
        $this->RequestRange = $requestRange;

        return $this;
    }

    /**
     * @return DateRange|null
     */
    public function getRequestRange()
    {
        return $this->RequestRange;
    }

    /**
     * @param string|null $requestDate
     * @return CustomDeliveryWindowDetail
     */
    public function setRequestDate($requestDate)
    {
        $this->RequestDate = $requestDate;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getRequestDate()
    {
        return $this->RequestDate;
    }


}

