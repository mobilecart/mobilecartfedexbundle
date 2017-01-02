<?php

namespace MobileCart\FedexBundle\Api\RateV10\ComplexType;

use MobileCart\FedexBundle\Api\RateV10\SimpleType;

/**
 * If requesting rates using the PackageDetails element (one package at a time) in the request, 
 * the rates for each package will be returned in this element. Currently total piece total 
 * weight rates are also retuned in this element. 
 *
 *
 */
class RatedPackageDetail extends ComplexTypeAbstract
{
    const CLASS_NAME = 'RatedPackageDetail';

    /**
     * Echoed from the corresponding package in the rate request (if provided). 
     * minOccurs = 0
     * maxOccurs = unbounded
     *
     * @var TrackingId[] $TrackingIds
     */
    protected $TrackingIds = array();

    /**
     * Used with request containing PACKAGE_GROUPS, to identify which group of identical packages 
     * was used to produce a reply item. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var integer|null $GroupNumber
     */
    protected $GroupNumber;

    /**
     * The difference between "list" and "account" net charge. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var Money|null $EffectiveNetDiscount
     */
    protected $EffectiveNetDiscount;

    /**
     * Ground COD is shipment level. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var Money|null $AdjustedCodCollectionAmount
     */
    protected $AdjustedCodCollectionAmount;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\OversizeClassType|null $OversizeClass
     */
    protected $OversizeClass;

    /**
     * Rate data that are tied to a specific package and rate type combination. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var PackageRateDetail|null $PackageRateDetail
     */
    protected $PackageRateDetail;


    /**
     * @param TrackingId[] $trackingIds
     * @return RatedPackageDetail
     */
    public function setTrackingIds(array $trackingIds = array())
    {
        $this->TrackingIds = $trackingIds;

        return $this;
    }

    /**
     * @return TrackingId[]
     */
    public function getTrackingIds()
    {
        return $this->TrackingIds;
    }

    /**
     * @param integer|null $groupNumber
     * @return RatedPackageDetail
     */
    public function setGroupNumber($groupNumber)
    {
        $this->GroupNumber = $groupNumber;

        return $this;
    }

    /**
     * @return integer|null
     */
    public function getGroupNumber()
    {
        return $this->GroupNumber;
    }

    /**
     * @param Money|null $effectiveNetDiscount
     * @return RatedPackageDetail
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
     * @return RatedPackageDetail
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
     * @param SimpleType\OversizeClassType|null $oversizeClass
     * @return RatedPackageDetail
     */
    public function setOversizeClass(SimpleType\OversizeClassType $oversizeClass = null)
    {
        $this->OversizeClass = $oversizeClass;

        return $this;
    }

    /**
     * @return SimpleType\OversizeClassType|null
     */
    public function getOversizeClass()
    {
        return $this->OversizeClass;
    }

    /**
     * @param PackageRateDetail|null $packageRateDetail
     * @return RatedPackageDetail
     */
    public function setPackageRateDetail(PackageRateDetail $packageRateDetail = null)
    {
        $this->PackageRateDetail = $packageRateDetail;

        return $this;
    }

    /**
     * @return PackageRateDetail|null
     */
    public function getPackageRateDetail()
    {
        return $this->PackageRateDetail;
    }


}

