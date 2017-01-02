<?php

namespace MobileCart\FedexBundle\Api\RateV10\ComplexType;

use MobileCart\FedexBundle\Api\RateV10\SimpleType;

/**
 * The descriptive data for the heaviness of an object. 
 *
 *
 */
class Weight extends ComplexTypeAbstract
{
    const CLASS_NAME = 'Weight';

    /**
     * Identifies the unit of measure associated with a weight value. 
     * minOccurs = 1
     * maxOccurs = 1
     *
     * @var SimpleType\WeightUnits $Units
     */
    protected $Units;

    /**
     * Identifies the weight value of a package/shipment. 
     * minOccurs = 1
     * maxOccurs = 1
     *
     * @var float $Value
     */
    protected $Value;


    /**
     * @param SimpleType\WeightUnits $units
     * @return Weight
     */
    public function setUnits(SimpleType\WeightUnits $units)
    {
        $this->Units = $units;

        return $this;
    }

    /**
     * @return SimpleType\WeightUnits
     */
    public function getUnits()
    {
        return $this->Units;
    }

    /**
     * @param float $value
     * @return Weight
     */
    public function setValue($value)
    {
        $this->Value = $value;

        return $this;
    }

    /**
     * @return float
     */
    public function getValue()
    {
        return $this->Value;
    }


}

