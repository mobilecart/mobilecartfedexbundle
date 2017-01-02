<?php

namespace MobileCart\FedexBundle\Api\RateV10\ComplexType;

use MobileCart\FedexBundle\Api\RateV10\SimpleType;

/**
 * Shipment-level totals of dry ice data across all packages. 
 *
 *
 */
class ShipmentDryIceDetail extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ShipmentDryIceDetail';

    /**
     * Total number of packages in the shipment that contain dry ice. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var integer|null $PackageCount
     */
    protected $PackageCount;

    /**
     * Total shipment dry ice weight for all packages. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var Weight|null $TotalWeight
     */
    protected $TotalWeight;


    /**
     * @param integer|null $packageCount
     * @return ShipmentDryIceDetail
     */
    public function setPackageCount($packageCount)
    {
        $this->PackageCount = $packageCount;

        return $this;
    }

    /**
     * @return integer|null
     */
    public function getPackageCount()
    {
        return $this->PackageCount;
    }

    /**
     * @param Weight|null $totalWeight
     * @return ShipmentDryIceDetail
     */
    public function setTotalWeight(Weight $totalWeight = null)
    {
        $this->TotalWeight = $totalWeight;

        return $this;
    }

    /**
     * @return Weight|null
     */
    public function getTotalWeight()
    {
        return $this->TotalWeight;
    }


}

