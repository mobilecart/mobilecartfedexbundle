<?php

namespace MobileCart\FedexBundle\Api\RateV10\ComplexType;

use MobileCart\FedexBundle\Api\RateV10\SimpleType;

/**
 * Individual charge which contributes to the total base charge for the shipment. 
 *
 *
 */
class FreightBaseCharge extends ComplexTypeAbstract
{
    const CLASS_NAME = 'FreightBaseCharge';

    /**
     * Freight class for this line item. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\FreightClassType|null $FreightClass
     */
    protected $FreightClass;

    /**
     * Effective freight class used for rating this line item. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\FreightClassType|null $RatedAsClass
     */
    protected $RatedAsClass;

    /**
     * NMFC Code for commodity. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $NmfcCode
     */
    protected $NmfcCode;

    /**
     * Customer-provided description for this commodity or class line. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $Description
     */
    protected $Description;

    /**
     * Weight for this commodity or class line. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var Weight|null $Weight
     */
    protected $Weight;

    /**
     * Rate or factor applied to this line item. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var Money|null $ChargeRate
     */
    protected $ChargeRate;

    /**
     * Identifies the manner in which the chargeRate for this line item was applied. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\FreightChargeBasisType|null $ChargeBasis
     */
    protected $ChargeBasis;

    /**
     * The net or extended charge for this line item. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var Money|null $ExtendedAmount
     */
    protected $ExtendedAmount;


    /**
     * @param SimpleType\FreightClassType|null $freightClass
     * @return FreightBaseCharge
     */
    public function setFreightClass(SimpleType\FreightClassType $freightClass = null)
    {
        $this->FreightClass = $freightClass;

        return $this;
    }

    /**
     * @return SimpleType\FreightClassType|null
     */
    public function getFreightClass()
    {
        return $this->FreightClass;
    }

    /**
     * @param SimpleType\FreightClassType|null $ratedAsClass
     * @return FreightBaseCharge
     */
    public function setRatedAsClass(SimpleType\FreightClassType $ratedAsClass = null)
    {
        $this->RatedAsClass = $ratedAsClass;

        return $this;
    }

    /**
     * @return SimpleType\FreightClassType|null
     */
    public function getRatedAsClass()
    {
        return $this->RatedAsClass;
    }

    /**
     * @param string|null $nmfcCode
     * @return FreightBaseCharge
     */
    public function setNmfcCode($nmfcCode)
    {
        $this->NmfcCode = $nmfcCode;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getNmfcCode()
    {
        return $this->NmfcCode;
    }

    /**
     * @param string|null $description
     * @return FreightBaseCharge
     */
    public function setDescription($description)
    {
        $this->Description = $description;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getDescription()
    {
        return $this->Description;
    }

    /**
     * @param Weight|null $weight
     * @return FreightBaseCharge
     */
    public function setWeight(Weight $weight = null)
    {
        $this->Weight = $weight;

        return $this;
    }

    /**
     * @return Weight|null
     */
    public function getWeight()
    {
        return $this->Weight;
    }

    /**
     * @param Money|null $chargeRate
     * @return FreightBaseCharge
     */
    public function setChargeRate(Money $chargeRate = null)
    {
        $this->ChargeRate = $chargeRate;

        return $this;
    }

    /**
     * @return Money|null
     */
    public function getChargeRate()
    {
        return $this->ChargeRate;
    }

    /**
     * @param SimpleType\FreightChargeBasisType|null $chargeBasis
     * @return FreightBaseCharge
     */
    public function setChargeBasis(SimpleType\FreightChargeBasisType $chargeBasis = null)
    {
        $this->ChargeBasis = $chargeBasis;

        return $this;
    }

    /**
     * @return SimpleType\FreightChargeBasisType|null
     */
    public function getChargeBasis()
    {
        return $this->ChargeBasis;
    }

    /**
     * @param Money|null $extendedAmount
     * @return FreightBaseCharge
     */
    public function setExtendedAmount(Money $extendedAmount = null)
    {
        $this->ExtendedAmount = $extendedAmount;

        return $this;
    }

    /**
     * @return Money|null
     */
    public function getExtendedAmount()
    {
        return $this->ExtendedAmount;
    }


}

