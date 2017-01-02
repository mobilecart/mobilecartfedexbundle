<?php

namespace MobileCart\FedexBundle\Api\RateV10\ComplexType;

use MobileCart\FedexBundle\Api\RateV10\SimpleType;

/**
 * Data for a single leg of a shipment's total/summary rates, as calculated per a specific 
 * rate type. 
 *
 *
 */
class ShipmentLegRateDetail extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ShipmentLegRateDetail';

    /**
     * Human-readable text describing the shipment leg. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $LegDescription
     */
    protected $LegDescription;

    /**
     * Origin for this leg. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var Address|null $LegOrigin
     */
    protected $LegOrigin;

    /**
     * Destination for this leg. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var Address|null $LegDestination
     */
    protected $LegDestination;

    /**
     * Type used for this specific set of rate data. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\ReturnedRateType|null $RateType
     */
    protected $RateType;

    /**
     * Indicates the rate scale used. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $RateScale
     */
    protected $RateScale;

    /**
     * Indicates the rate zone used (based on origin and destination). 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $RateZone
     */
    protected $RateZone;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\PricingCodeType|null $PricingCode
     */
    protected $PricingCode;

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
     * Specifies the currency exchange performed on financial amounts for this rate. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var CurrencyExchangeRate|null $CurrencyExchangeRate
     */
    protected $CurrencyExchangeRate;

    /**
     * Indicates which special rating cases applied to this shipment. 
     * minOccurs = 0
     * maxOccurs = unbounded
     *
     * @var SimpleType\SpecialRatingAppliedType[] $SpecialRatingApplied
     */
    protected $SpecialRatingApplied = array();

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var integer|null $DimDivisor
     */
    protected $DimDivisor;

    /**
     * Identifies the type of dim divisor that was applied. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\RateDimensionalDivisorType|null $DimDivisorType
     */
    protected $DimDivisorType;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var float|null $FuelSurchargePercent
     */
    protected $FuelSurchargePercent;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var Weight|null $TotalBillingWeight
     */
    protected $TotalBillingWeight;

    /**
     * Sum of dimensional weights for all packages. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var Weight|null $TotalDimWeight
     */
    protected $TotalDimWeight;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var Money|null $TotalBaseCharge
     */
    protected $TotalBaseCharge;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var Money|null $TotalFreightDiscounts
     */
    protected $TotalFreightDiscounts;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var Money|null $TotalNetFreight
     */
    protected $TotalNetFreight;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var Money|null $TotalSurcharges
     */
    protected $TotalSurcharges;

    /**
     * This shipment's totalNetFreight + totalSurcharges (not including totalTaxes). 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var Money|null $TotalNetFedExCharge
     */
    protected $TotalNetFedExCharge;

    /**
     * Total of the transportation-based taxes. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var Money|null $TotalTaxes
     */
    protected $TotalTaxes;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var Money|null $TotalNetCharge
     */
    protected $TotalNetCharge;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var Money|null $TotalRebates
     */
    protected $TotalRebates;

    /**
     * Total of all values under this shipment's dutiesAndTaxes; only provided if estimated 
     * duties and taxes were calculated for this shipment. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var Money|null $TotalDutiesAndTaxes
     */
    protected $TotalDutiesAndTaxes;

    /**
     * This shipment's totalNetCharge + totalDutiesAndTaxes; only provided if estimated duties 
     * and taxes were calculated for this shipment AND duties, taxes and transportation charges 
     * are all paid by the same sender's account. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var Money|null $TotalNetChargeWithDutiesAndTaxes
     */
    protected $TotalNetChargeWithDutiesAndTaxes;

    /**
     * Rate data specific to FedEx Freight and FedEx National Freight services. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var FreightRateDetail|null $FreightRateDetail
     */
    protected $FreightRateDetail;

    /**
     * All rate discounts that apply to this shipment. 
     * minOccurs = 0
     * maxOccurs = unbounded
     *
     * @var RateDiscount[] $FreightDiscounts
     */
    protected $FreightDiscounts = array();

    /**
     * All rebates that apply to this shipment. 
     * minOccurs = 0
     * maxOccurs = unbounded
     *
     * @var Rebate[] $Rebates
     */
    protected $Rebates = array();

    /**
     * All surcharges that apply to this shipment. 
     * minOccurs = 0
     * maxOccurs = unbounded
     *
     * @var Surcharge[] $Surcharges
     */
    protected $Surcharges = array();

    /**
     * All transportation-based taxes applicable to this shipment. 
     * minOccurs = 0
     * maxOccurs = unbounded
     *
     * @var Tax[] $Taxes
     */
    protected $Taxes = array();

    /**
     * All commodity-based duties and taxes applicable to this shipment. 
     * minOccurs = 0
     * maxOccurs = unbounded
     *
     * @var EdtCommodityTax[] $DutiesAndTaxes
     */
    protected $DutiesAndTaxes = array();

    /**
     * The "order level" variable handling charges. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var VariableHandlingCharges|null $VariableHandlingCharges
     */
    protected $VariableHandlingCharges;

    /**
     * The total of all variable handling charges at both shipment (order) and package level. 
     * 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var VariableHandlingCharges|null $TotalVariableHandlingCharges
     */
    protected $TotalVariableHandlingCharges;


    /**
     * @param string|null $legDescription
     * @return ShipmentLegRateDetail
     */
    public function setLegDescription($legDescription)
    {
        $this->LegDescription = $legDescription;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getLegDescription()
    {
        return $this->LegDescription;
    }

    /**
     * @param Address|null $legOrigin
     * @return ShipmentLegRateDetail
     */
    public function setLegOrigin(Address $legOrigin = null)
    {
        $this->LegOrigin = $legOrigin;

        return $this;
    }

    /**
     * @return Address|null
     */
    public function getLegOrigin()
    {
        return $this->LegOrigin;
    }

    /**
     * @param Address|null $legDestination
     * @return ShipmentLegRateDetail
     */
    public function setLegDestination(Address $legDestination = null)
    {
        $this->LegDestination = $legDestination;

        return $this;
    }

    /**
     * @return Address|null
     */
    public function getLegDestination()
    {
        return $this->LegDestination;
    }

    /**
     * @param SimpleType\ReturnedRateType|null $rateType
     * @return ShipmentLegRateDetail
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
     * @param string|null $rateScale
     * @return ShipmentLegRateDetail
     */
    public function setRateScale($rateScale)
    {
        $this->RateScale = $rateScale;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getRateScale()
    {
        return $this->RateScale;
    }

    /**
     * @param string|null $rateZone
     * @return ShipmentLegRateDetail
     */
    public function setRateZone($rateZone)
    {
        $this->RateZone = $rateZone;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getRateZone()
    {
        return $this->RateZone;
    }

    /**
     * @param SimpleType\PricingCodeType|null $pricingCode
     * @return ShipmentLegRateDetail
     */
    public function setPricingCode(SimpleType\PricingCodeType $pricingCode = null)
    {
        $this->PricingCode = $pricingCode;

        return $this;
    }

    /**
     * @return SimpleType\PricingCodeType|null
     */
    public function getPricingCode()
    {
        return $this->PricingCode;
    }

    /**
     * @param SimpleType\RatedWeightMethod|null $ratedWeightMethod
     * @return ShipmentLegRateDetail
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
     * @return ShipmentLegRateDetail
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
     * @param CurrencyExchangeRate|null $currencyExchangeRate
     * @return ShipmentLegRateDetail
     */
    public function setCurrencyExchangeRate(CurrencyExchangeRate $currencyExchangeRate = null)
    {
        $this->CurrencyExchangeRate = $currencyExchangeRate;

        return $this;
    }

    /**
     * @return CurrencyExchangeRate|null
     */
    public function getCurrencyExchangeRate()
    {
        return $this->CurrencyExchangeRate;
    }

    /**
     * @param SimpleType\SpecialRatingAppliedType[] $specialRatingApplied
     * @return ShipmentLegRateDetail
     */
    public function setSpecialRatingApplied(array $specialRatingApplied = array())
    {
        $this->SpecialRatingApplied = $specialRatingApplied;

        return $this;
    }

    /**
     * @return SimpleType\SpecialRatingAppliedType[]
     */
    public function getSpecialRatingApplied()
    {
        return $this->SpecialRatingApplied;
    }

    /**
     * @param integer|null $dimDivisor
     * @return ShipmentLegRateDetail
     */
    public function setDimDivisor($dimDivisor)
    {
        $this->DimDivisor = $dimDivisor;

        return $this;
    }

    /**
     * @return integer|null
     */
    public function getDimDivisor()
    {
        return $this->DimDivisor;
    }

    /**
     * @param SimpleType\RateDimensionalDivisorType|null $dimDivisorType
     * @return ShipmentLegRateDetail
     */
    public function setDimDivisorType(SimpleType\RateDimensionalDivisorType $dimDivisorType = null)
    {
        $this->DimDivisorType = $dimDivisorType;

        return $this;
    }

    /**
     * @return SimpleType\RateDimensionalDivisorType|null
     */
    public function getDimDivisorType()
    {
        return $this->DimDivisorType;
    }

    /**
     * @param float|null $fuelSurchargePercent
     * @return ShipmentLegRateDetail
     */
    public function setFuelSurchargePercent($fuelSurchargePercent)
    {
        $this->FuelSurchargePercent = $fuelSurchargePercent;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getFuelSurchargePercent()
    {
        return $this->FuelSurchargePercent;
    }

    /**
     * @param Weight|null $totalBillingWeight
     * @return ShipmentLegRateDetail
     */
    public function setTotalBillingWeight(Weight $totalBillingWeight = null)
    {
        $this->TotalBillingWeight = $totalBillingWeight;

        return $this;
    }

    /**
     * @return Weight|null
     */
    public function getTotalBillingWeight()
    {
        return $this->TotalBillingWeight;
    }

    /**
     * @param Weight|null $totalDimWeight
     * @return ShipmentLegRateDetail
     */
    public function setTotalDimWeight(Weight $totalDimWeight = null)
    {
        $this->TotalDimWeight = $totalDimWeight;

        return $this;
    }

    /**
     * @return Weight|null
     */
    public function getTotalDimWeight()
    {
        return $this->TotalDimWeight;
    }

    /**
     * @param Money|null $totalBaseCharge
     * @return ShipmentLegRateDetail
     */
    public function setTotalBaseCharge(Money $totalBaseCharge = null)
    {
        $this->TotalBaseCharge = $totalBaseCharge;

        return $this;
    }

    /**
     * @return Money|null
     */
    public function getTotalBaseCharge()
    {
        return $this->TotalBaseCharge;
    }

    /**
     * @param Money|null $totalFreightDiscounts
     * @return ShipmentLegRateDetail
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
     * @param Money|null $totalNetFreight
     * @return ShipmentLegRateDetail
     */
    public function setTotalNetFreight(Money $totalNetFreight = null)
    {
        $this->TotalNetFreight = $totalNetFreight;

        return $this;
    }

    /**
     * @return Money|null
     */
    public function getTotalNetFreight()
    {
        return $this->TotalNetFreight;
    }

    /**
     * @param Money|null $totalSurcharges
     * @return ShipmentLegRateDetail
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
     * @param Money|null $totalNetFedExCharge
     * @return ShipmentLegRateDetail
     */
    public function setTotalNetFedExCharge(Money $totalNetFedExCharge = null)
    {
        $this->TotalNetFedExCharge = $totalNetFedExCharge;

        return $this;
    }

    /**
     * @return Money|null
     */
    public function getTotalNetFedExCharge()
    {
        return $this->TotalNetFedExCharge;
    }

    /**
     * @param Money|null $totalTaxes
     * @return ShipmentLegRateDetail
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
     * @param Money|null $totalNetCharge
     * @return ShipmentLegRateDetail
     */
    public function setTotalNetCharge(Money $totalNetCharge = null)
    {
        $this->TotalNetCharge = $totalNetCharge;

        return $this;
    }

    /**
     * @return Money|null
     */
    public function getTotalNetCharge()
    {
        return $this->TotalNetCharge;
    }

    /**
     * @param Money|null $totalRebates
     * @return ShipmentLegRateDetail
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
     * @param Money|null $totalDutiesAndTaxes
     * @return ShipmentLegRateDetail
     */
    public function setTotalDutiesAndTaxes(Money $totalDutiesAndTaxes = null)
    {
        $this->TotalDutiesAndTaxes = $totalDutiesAndTaxes;

        return $this;
    }

    /**
     * @return Money|null
     */
    public function getTotalDutiesAndTaxes()
    {
        return $this->TotalDutiesAndTaxes;
    }

    /**
     * @param Money|null $totalNetChargeWithDutiesAndTaxes
     * @return ShipmentLegRateDetail
     */
    public function setTotalNetChargeWithDutiesAndTaxes(Money $totalNetChargeWithDutiesAndTaxes = null)
    {
        $this->TotalNetChargeWithDutiesAndTaxes = $totalNetChargeWithDutiesAndTaxes;

        return $this;
    }

    /**
     * @return Money|null
     */
    public function getTotalNetChargeWithDutiesAndTaxes()
    {
        return $this->TotalNetChargeWithDutiesAndTaxes;
    }

    /**
     * @param FreightRateDetail|null $freightRateDetail
     * @return ShipmentLegRateDetail
     */
    public function setFreightRateDetail(FreightRateDetail $freightRateDetail = null)
    {
        $this->FreightRateDetail = $freightRateDetail;

        return $this;
    }

    /**
     * @return FreightRateDetail|null
     */
    public function getFreightRateDetail()
    {
        return $this->FreightRateDetail;
    }

    /**
     * @param RateDiscount[] $freightDiscounts
     * @return ShipmentLegRateDetail
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
     * @return ShipmentLegRateDetail
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
     * @return ShipmentLegRateDetail
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
     * @return ShipmentLegRateDetail
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
     * @param EdtCommodityTax[] $dutiesAndTaxes
     * @return ShipmentLegRateDetail
     */
    public function setDutiesAndTaxes(array $dutiesAndTaxes = array())
    {
        $this->DutiesAndTaxes = $dutiesAndTaxes;

        return $this;
    }

    /**
     * @return EdtCommodityTax[]
     */
    public function getDutiesAndTaxes()
    {
        return $this->DutiesAndTaxes;
    }

    /**
     * @param VariableHandlingCharges|null $variableHandlingCharges
     * @return ShipmentLegRateDetail
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

    /**
     * @param VariableHandlingCharges|null $totalVariableHandlingCharges
     * @return ShipmentLegRateDetail
     */
    public function setTotalVariableHandlingCharges(VariableHandlingCharges $totalVariableHandlingCharges = null)
    {
        $this->TotalVariableHandlingCharges = $totalVariableHandlingCharges;

        return $this;
    }

    /**
     * @return VariableHandlingCharges|null
     */
    public function getTotalVariableHandlingCharges()
    {
        return $this->TotalVariableHandlingCharges;
    }


}

