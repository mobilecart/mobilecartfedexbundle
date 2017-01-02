<?php

namespace MobileCart\FedexBundle\Api\RateV10\ComplexType;

use MobileCart\FedexBundle\Api\RateV10\SimpleType;

/**
 * This class groups the shipment and package rating data for a specific rate type for use 
 * in a rating reply, which groups result data by rate type. 
 *
 *
 */
class RatedShipmentDetail extends ComplexTypeAbstract
{
    const CLASS_NAME = 'RatedShipmentDetail';

    /**
     * The difference between "list" and "account" total net charge. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var Money|null $EffectiveNetDiscount
     */
    protected $EffectiveNetDiscount;

    /**
     * Express COD is shipment level. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var Money|null $AdjustedCodCollectionAmount
     */
    protected $AdjustedCodCollectionAmount;

    /**
     * The shipment-level totals for this rate type. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var ShipmentRateDetail|null $ShipmentRateDetail
     */
    protected $ShipmentRateDetail;

    /**
     * The package-level data for this rate type. 
     * minOccurs = 0
     * maxOccurs = unbounded
     *
     * @var RatedPackageDetail[] $RatedPackages
     */
    protected $RatedPackages = array();


    /**
     * @param Money|null $effectiveNetDiscount
     * @return RatedShipmentDetail
     */
    public function setEffectiveNetDiscount(Money $effectiveNetDiscount = null)
    {
        $this->EffectiveNetDiscount = $effectiveNetDiscount;

        return $this;
    }

    /**
     * @return Money|null
     */
    public function getEffectiveNetDiscount()
    {
        return $this->EffectiveNetDiscount;
    }

    /**
     * @param Money|null $adjustedCodCollectionAmount
     * @return RatedShipmentDetail
     */
    public function setAdjustedCodCollectionAmount(Money $adjustedCodCollectionAmount = null)
    {
        $this->AdjustedCodCollectionAmount = $adjustedCodCollectionAmount;

        return $this;
    }

    /**
     * @return Money|null
     */
    public function getAdjustedCodCollectionAmount()
    {
        return $this->AdjustedCodCollectionAmount;
    }

    /**
     * @param ShipmentRateDetail|null $shipmentRateDetail
     * @return RatedShipmentDetail
     */
    public function setShipmentRateDetail(ShipmentRateDetail $shipmentRateDetail = null)
    {
        $this->ShipmentRateDetail = $shipmentRateDetail;

        return $this;
    }

    /**
     * @return ShipmentRateDetail|null
     */
    public function getShipmentRateDetail()
    {
        return $this->ShipmentRateDetail;
    }

    /**
     * @param RatedPackageDetail[] $ratedPackages
     * @return RatedShipmentDetail
     */
    public function setRatedPackages(array $ratedPackages = array())
    {
        $this->RatedPackages = $ratedPackages;

        return $this;
    }

    /**
     * @return RatedPackageDetail[]
     */
    public function getRatedPackages()
    {
        return $this->RatedPackages;
    }


}

