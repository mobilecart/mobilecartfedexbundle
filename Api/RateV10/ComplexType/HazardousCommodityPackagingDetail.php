<?php

namespace MobileCart\FedexBundle\Api\RateV10\ComplexType;

use MobileCart\FedexBundle\Api\RateV10\SimpleType;

/**
 * Identifies number and type of packaging units for hazardous commodities. 
 *
 *
 */
class HazardousCommodityPackagingDetail extends ComplexTypeAbstract
{
    const CLASS_NAME = 'HazardousCommodityPackagingDetail';

    /**
     * Number of units of the type below. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var integer|null $Count
     */
    protected $Count;

    /**
     * Units in which the hazardous commodity is packaged. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $Units
     */
    protected $Units;


    /**
     * @param integer|null $count
     * @return HazardousCommodityPackagingDetail
     */
    public function setCount($count)
    {
        $this->Count = $count;

        return $this;
    }

    /**
     * @return integer|null
     */
    public function getCount()
    {
        return $this->Count;
    }

    /**
     * @param string|null $units
     * @return HazardousCommodityPackagingDetail
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

