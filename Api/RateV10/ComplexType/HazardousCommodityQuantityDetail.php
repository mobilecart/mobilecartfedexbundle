<?php

namespace MobileCart\FedexBundle\Api\RateV10\ComplexType;

use MobileCart\FedexBundle\Api\RateV10\SimpleType;

/**
 * Identifies amount and units for quantity of hazardous commodities. 
 *
 *
 */
class HazardousCommodityQuantityDetail extends ComplexTypeAbstract
{
    const CLASS_NAME = 'HazardousCommodityQuantityDetail';

    /**
     * Number of units of the type below. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var float|null $Amount
     */
    protected $Amount;

    /**
     * Units by which the hazardous commodity is measured. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $Units
     */
    protected $Units;


    /**
     * @param float|null $amount
     * @return HazardousCommodityQuantityDetail
     */
    public function setAmount($amount)
    {
        $this->Amount = $amount;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getAmount()
    {
        return $this->Amount;
    }

    /**
     * @param string|null $units
     * @return HazardousCommodityQuantityDetail
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

