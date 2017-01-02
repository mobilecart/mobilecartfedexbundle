<?php

namespace MobileCart\FedexBundle\Api\RateV10\ComplexType;

use MobileCart\FedexBundle\Api\RateV10\SimpleType;

/**
 *
 *
 */
class Measure extends ComplexTypeAbstract
{
    const CLASS_NAME = 'Measure';

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var float|null $Quantity
     */
    protected $Quantity;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $Units
     */
    protected $Units;


    /**
     * @param float|null $quantity
     * @return Measure
     */
    public function setQuantity($quantity)
    {
        $this->Quantity = $quantity;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getQuantity()
    {
        return $this->Quantity;
    }

    /**
     * @param string|null $units
     * @return Measure
     */
    public function setUnits($units)
    {
        $this->Units = $units;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getUnits()
    {
        return $this->Units;
    }


}

