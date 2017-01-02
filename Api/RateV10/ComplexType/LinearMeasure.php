<?php

namespace MobileCart\FedexBundle\Api\RateV10\ComplexType;

use MobileCart\FedexBundle\Api\RateV10\SimpleType;

/**
 * Represents a one-dimensional measurement in small units (e.g. suitable for measuring a package 
 * or document), contrasted with Distance, which represents a large one-dimensional measurement 
 * (e.g. distance between cities). 
 *
 *
 */
class LinearMeasure extends ComplexTypeAbstract
{
    const CLASS_NAME = 'LinearMeasure';

    /**
     * The numerical quantity of this measurement. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var float|null $Value
     */
    protected $Value;

    /**
     * The units for this measurement. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\LinearUnits|null $Units
     */
    protected $Units;


    /**
     * @param float|null $value
     * @return LinearMeasure
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
     * @param SimpleType\LinearUnits|null $units
     * @return LinearMeasure
     */
    public function setUnits(SimpleType\LinearUnits $units = null)
    {
        $this->Units = $units;

        return $this;
    }

    /**
     * @return SimpleType\LinearUnits|null
     */
    public function getUnits()
    {
        return $this->Units;
    }


}

