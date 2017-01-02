<?php

namespace MobileCart\FedexBundle\Api\RateV10\ComplexType;

use MobileCart\FedexBundle\Api\RateV10\SimpleType;

/**
 * Driving or other transportation distances, distinct from dimension measurements. 
 *
 *
 */
class Distance extends ComplexTypeAbstract
{
    const CLASS_NAME = 'Distance';

    /**
     * Identifies the distance quantity. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var float|null $Value
     */
    protected $Value;

    /**
     * Identifies the unit of measure for the distance value. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\DistanceUnits|null $Units
     */
    protected $Units;


    /**
     * @param float|null $value
     * @return Distance
     */
    public function setValue($value)
    {
        $this->Value = $value;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getValue()
    {
        return $this->Value;
    }

    /**
     * @param SimpleType\DistanceUnits|null $units
     * @return Distance
     */
    public function setUnits(SimpleType\DistanceUnits $units = null)
    {
        $this->Units = $units;

        return $this;
    }

    /**
     * @return SimpleType\DistanceUnits|null
     */
    public function getUnits()
    {
        return $this->Units;
    }


}

