<?php

namespace MobileCart\FedexBundle\Api\RateV10\ComplexType;

use MobileCart\FedexBundle\Api\RateV10\SimpleType;

/**
 * Three-dimensional volume/cubic measurement. 
 *
 *
 */
class Volume extends ComplexTypeAbstract
{
    const CLASS_NAME = 'Volume';

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\VolumeUnits|null $Units
     */
    protected $Units;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var float|null $Value
     */
    protected $Value;


    /**
     * @param SimpleType\VolumeUnits|null $units
     * @return Volume
     */
    public function setUnits(SimpleType\VolumeUnits $units = null)
    {
        $this->Units = $units;

        return $this;
    }

    /**
     * @return SimpleType\VolumeUnits|null
     */
    public function getUnits()
    {
        return $this->Units;
    }

    /**
     * @param float|null $value
     * @return Volume
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


}

