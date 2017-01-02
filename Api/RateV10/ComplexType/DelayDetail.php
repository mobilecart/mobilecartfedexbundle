<?php

namespace MobileCart\FedexBundle\Api\RateV10\ComplexType;

use MobileCart\FedexBundle\Api\RateV10\SimpleType;

/**
 * Information about why a shipment delivery is delayed and at what level( country/service 
 * etc.). 
 *
 *
 */
class DelayDetail extends ComplexTypeAbstract
{
    const CLASS_NAME = 'DelayDetail';

    /**
     * The date of the delay 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $Date
     */
    protected $Date;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\DayOfWeekType|null $DayOfWeek
     */
    protected $DayOfWeek;

    /**
     * The attribute of the shipment that caused the delay(e.g. Country, City, LocationId, 
     * Zip, service area, special handling ) 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\DelayLevelType|null $Level
     */
    protected $Level;

    /**
     * The point where the delay is occurring (e.g. Origin, Destination, Broker location) 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\DelayPointType|null $Point
     */
    protected $Point;

    /**
     * The reason for the delay (e.g. holiday, weekend, etc.). 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\CommitmentDelayType|null $Type
     */
    protected $Type;

    /**
     * The name of the holiday in that country that is causing the delay. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $Description
     */
    protected $Description;


    /**
     * @param string|null $date
     * @return DelayDetail
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
     * @param SimpleType\DayOfWeekType|null $dayOfWeek
     * @return DelayDetail
     */
    public function setDayOfWeek(SimpleType\DayOfWeekType $dayOfWeek = null)
    {
        $this->DayOfWeek = $dayOfWeek;

        return $this;
    }

    /**
     * @return SimpleType\DayOfWeekType|null
     */
    public function getDayOfWeek()
    {
        return $this->DayOfWeek;
    }

    /**
     * @param SimpleType\DelayLevelType|null $level
     * @return DelayDetail
     */
    public function setLevel(SimpleType\DelayLevelType $level = null)
    {
        $this->Level = $level;

        return $this;
    }

    /**
     * @return SimpleType\DelayLevelType|null
     */
    public function getLevel()
    {
        return $this->Level;
    }

    /**
     * @param SimpleType\DelayPointType|null $point
     * @return DelayDetail
     */
    public function setPoint(SimpleType\DelayPointType $point = null)
    {
        $this->Point = $point;

        return $this;
    }

    /**
     * @return SimpleType\DelayPointType|null
     */
    public function getPoint()
    {
        return $this->Point;
    }

    /**
     * @param SimpleType\CommitmentDelayType|null $type
     * @return DelayDetail
     */
    public function setType(SimpleType\CommitmentDelayType $type = null)
    {
        $this->Type = $type;

        return $this;
    }

    /**
     * @return SimpleType\CommitmentDelayType|null
     */
    public function getType()
    {
        return $this->Type;
    }

    /**
     * @param string|null $description
     * @return DelayDetail
     */
    public function setDescription($description)
    {
        $this->Description = $description;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getDescription()
    {
        return $this->Description;
    }


}

