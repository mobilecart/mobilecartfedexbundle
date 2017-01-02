<?php

namespace MobileCart\FedexBundle\Api\RateV10\ComplexType;

use MobileCart\FedexBundle\Api\RateV10\SimpleType;

/**
 * Data for a package's rates, as calculated per a specific rate type. 
 *
 *
 */
class PackageRateDetail extends ComplexTypeAbstract
{
    const CLASS_NAME = 'PackageRateDetail';

    /**
     * Type used for this specific set of rate data. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\ReturnedRateType|null $RateType
     */
    protected $RateType;

    /**
     * Indicates which weight was used. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\RatedWeightMethod|null $RatedWeightMethod
     */
    protected $RatedWeightMethod;

    /**
     * INTERNAL FEDEX USE ONLY. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\MinimumChargeType|null $MinimumChargeType
     */
    protected $MinimumChargeType;

    /**
     * The weight that was used to calculate the rate. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var Weight|null $BillingWeight
     */
    protected $BillingWeight;

    /**
     * The dimensional weight of this package (if greater than actual). 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var Weight|null $DimWeight
     */
    protected $DimWeight;

    /**
     * The oversize weight of this package (if the package is oversize). 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var Weight|null $OversizeWeight
     */
    protected $OversizeWeight;

    /**
     * The transportation charge only (prior to any discounts applied) for this package. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var Money|null $BaseCharge
     */
    protected $BaseCharge;

    /**
     * The sum of all discounts on this package. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var Money|null $TotalFreightDiscounts
     */
    protected $TotalFreightDiscounts;

    /**
     * This package's baseCharge - totalFreightDiscounts. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var Money|null $NetFreight
     */
    protected $NetFreight;

    /**
     * The sum of all surcharges on this package. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var Money|null $TotalSurcharges
     */
    protected $TotalSurcharges;

    /**
     * This package's netFreight + totalSurcharges (not including totalTaxes). 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var Money|null $NetFedExCharge
     */
    protected $NetFedExCharge;

    /**
     * The sum of all taxes on this package. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var Money|null $TotalTaxes
     */
    protected $TotalTaxes;

    /**
     * This package's netFreight + totalSurcharges + totalTaxes. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var Money|null $NetCharge
     */
    protected $NetCharge;

    /**
     * The total sum of all rebates applied to this package. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var Money|null $TotalRebates
     */
    protected $TotalRebates;

    /**
     * All rate discounts that apply to this package. 
     * minOccurs = 0
     * maxOccurs = unbounded
     *
     * @var RateDiscount[] $FreightDiscounts
     */
    protected $FreightDiscounts = array();

    /**
     * All rebates that apply to this package. 
     * minOccurs = 0
     * maxOccurs = unbounded
     *
     * @var Rebate[] $Rebates
     */
    protected $Rebates = array();

    /**
     * All surcharges that apply to this package (either because of characteristics of the 
     * package itself, or because it is carrying per-shipment surcharges for the shipment of 
     * which it is a part). 
     * minOccurs = 0
     * maxOccurs = unbounded
     *
     * @var Surcharge[] $Surcharges
     */
    protected $Surcharges = array();

    /**
     * All taxes applicable (or distributed to) this package. 
     * minOccurs = 0
     * maxOccurs = unbounded
     *
     * @var Tax[] $Taxes
     */
    protected $Taxes = array();

    /**
     * The variable handling charges calculated based on the type variable handling charges 
     * requested. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var VariableHandlingCharges|null $VariableHandlingCharges
     */
    protected $VariableHandlingCharges;


    /**
     * @param SimpleType\ReturnedRateType|null $rateType
     * @return PackageRateDetail
     */
    public function setRateType(SimpleType\ReturnedRateType $rateType = null)
    {
        $this->RateType = $rateType;

        return $this;
    }

    /**
     * @return SimpleType\ReturnedRateType|null
     */
    public function getRateType()
    {
        return $this->RateType;
    }

    /**
     * @param SimpleType\RatedWeightMethod|null $ratedWeightMethod
     * @return PackageRateDetail
     */
    public function setRatedWeightMethod(SimpleType\RatedWeightMethod $ratedWeightMethod = null)
    {
        $this->RatedWeightMethod = $ratedWeightMethod;

        return $this;
    }

    /**
     * @return SimpleType\RatedWeightMethod|null
     */
    public function getRatedWeightMethod()
    {
        return $this->RatedWeightMethod;
    }

    /**
     * @param SimpleType\MinimumChargeType|null $minimumChargeType
     * @return PackageRateDetail
     */
    public function setMinimumChargeType(SimpleType\MinimumChargeType $minimumChargeType = null)
    {
        $this->MinimumChargeType = $minimumChargeType;

        return $this;
    }

    /**
     * @return SimpleType\MinimumChargeType|null
     */
    public function getMinimumChargeType()
    {
        return $this->MinimumChargeType;
    }

    /**
     * @param Weight|null $billingWeight
     * @return PackageRateDetail
     */
    public function setBillingWeight(Weight $billingWeight = null)
    {
        $this->BillingWeight = $billingWeight;

        return $this;
    }

    /**
     * @return Weight|null
     */
    public function getBillingWeight()
    {
        return $this->BillingWeight;
    }

    /**
     * @param Weight|null $dimWeight
     * @return PackageRateDetail
     */
    public function setDimWeight(Weight $dimWeight = null)
    {
        $this->DimWeight = $dimWeight;

        return $this;
    }

    /**
     * @return Weight|null
     */
    public function getDimWeight()
    {
        return $this->DimWeight;
    }

    /**
     * @param Weight|null $oversizeWeight
     * @return PackageRateDetail
     */
    public function setOversizeWeight(Weight $oversizeWeight = null)
    {
        $this->OversizeWeight = $oversizeWeight;

        return $this;
    }

    /**
     * @return Weight|null
     */
    public function getOversizeWeight()
    {
        return $this->OversizeWeight;
    }

    /**
     * @param Money|null $baseCharge
     * @return PackageRateDetail
     */
    public function setBaseCharge(Money $baseCharge = null)
    {
        $this->BaseCharge = $baseCharge;

        return $this;
    }

    /**
     * @return Money|null
     */
    public function getBaseCharge()
    {
        return $this->BaseCharge;
    }

    /**
     * @param Money|null $totalFreightDiscounts
     * @return PackageRateDetail
     */
    public function setTotalFreightDiscounts(Money $totalFreightDiscounts = null)
    {
        $this->TotalFreightDiscounts = $totalFreightDiscounts;

        return $this;
    }

    /**
     * @return Money|null
     */
    public function getTotalFreightDiscounts()
    {
        return $this->TotalFreightDiscounts;
    }

    /**
     * @param Money|null $netFreight
     * @return PackageRateDetail
     */
    public function setNetFreight(Money $netFreight = null)
    {
        $this->NetFreight = $netFreight;

        return $this;
    }

    /**
     * @return Money|null
     */
    public function getNetFreight()
    {
        return $this->NetFreight;
    }

    /**
     * @param Money|null $totalSurcharges
     * @return PackageRateDetail
     */
    public function setTotalSurcharges(Money $totalSurcharges = null)
    {
        $this->TotalSurcharges = $totalSurcharges;

        return $this;
    }

    /**
     * @return Money|null
     */
    public function getTotalSurcharges()
    {
        return $this->TotalSurcharges;
    }

    /**
     * @param Money|null $netFedExCharge
     * @return PackageRateDetail
     */
    public function setNetFedExCharge(Money $netFedExCharge = null)
    {
        $this->NetFedExCharge = $netFedExCharge;

        return $this;
    }

    /**
     * @return Money|null
     */
    public function getNetFedExCharge()
    {
        return $this->NetFedExCharge;
    }

    /**
     * @param Money|null $totalTaxes
     * @return PackageRateDetail
     */
    public function setTotalTaxes(Money $totalTaxes = null)
    {
        $this->TotalTaxes = $totalTaxes;

        return $this;
    }

    /**
     * @return Money|null
     */
    public function getTotalTaxes()
    {
        return $this->TotalTaxes;
    }

    /**
     * @param Money|null $netCharge
     * @return PackageRateDetail
     */
    public function setNetCharge(Money $netCharge = null)
    {
        $this->NetCharge = $netCharge;

        return $this;
    }

    /**
     * @return Money|null
     */
    public function getNetCharge()
    {
        return $this->NetCharge;
    }

    /**
     * @param Money|null $totalRebates
     * @return PackageRateDetail
     */
    public function setTotalRebates(Money $totalRebates = null)
    {
        $this->TotalRebates = $totalRebates;

        return $this;
    }

    /**
     * @return Money|null
     */
    public function getTotalRebates()
    {
        return $this->TotalRebates;
    }

    /**
     * @param RateDiscount[] $freightDiscounts
     * @return PackageRateDetail
     */
    public function setFreightDiscounts(array $freightDiscounts = array())
    {
        $this->FreightDiscounts = $freightDiscounts;

        return $this;
    }

    /**
     * @return RateDiscount[]
     */
    public function getFreightDiscounts()
    {
        return $this->FreightDiscounts;
    }

    /**
     * @param Rebate[] $rebates
     * @return PackageRateDetail
     */
    public function setRebates(array $rebates = array())
    {
        $this->Rebates = $rebates;

        return $this;
    }

    /**
     * @return Rebate[]
     */
    public function getRebates()
    {
        return $this->Rebates;
    }

    /**
     * @param Surcharge[] $surcharges
     * @return PackageRateDetail
     */
    public function setSurcharges(array $surcharges = array())
    {
        $this->Surcharges = $surcharges;

        return $this;
    }

    /**
     * @return Surcharge[]
     */
    public function getSurcharges()
    {
        return $this->Surcharges;
    }

    /**
     * @param Tax[] $taxes
     * @return PackageRateDetail
     */
    public function setTaxes(array $taxes = array())
    {
        $this->Taxes = $taxes;

        return $this;
    }

    /**
     * @return Tax[]
     */
    public function getTaxes()
    {
        return $this->Taxes;
    }

    /**
     * @param VariableHandlingCharges|null $variableHandlingCharges
     * @return PackageRateDetail
     */
    public function setVariableHandlingCharges(VariableHandlingCharges $variableHandlingCharges = null)
    {
        $this->VariableHandlingCharges = $variableHandlingCharges;

        return $this;
    }

    /**
     * @return VariableHandlingCharges|null
     */
    public function getVariableHandlingCharges()
    {
        return $this->VariableHandlingCharges;
    }


}

