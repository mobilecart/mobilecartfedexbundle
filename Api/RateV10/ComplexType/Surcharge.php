<?php

namespace MobileCart\FedexBundle\Api\RateV10\ComplexType;

use MobileCart\FedexBundle\Api\RateV10\SimpleType;

/**
 * Identifies each surcharge applied to the shipment. 
 *
 *
 */
class Surcharge extends ComplexTypeAbstract
{
    const CLASS_NAME = 'Surcharge';

    /**
     * The type of surcharge applied to the shipment. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\SurchargeType|null $SurchargeType
     */
    protected $SurchargeType;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\SurchargeLevelType|null $Level
     */
    protected $Level;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $Description
     */
    protected $Description;

    /**
     * The amount of the surcharge applied to the shipment. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var Money|null $Amount
     */
    protected $Amount;


    /**
     * @param SimpleType\SurchargeType|null $surchargeType
     * @return Surcharge
     */
    public function setSurchargeType(SimpleType\SurchargeType $surchargeType = null)
    {
        $this->SurchargeType = $surchargeType;

        return $this;
    }

    /**
     * @return SimpleType\SurchargeType|null
     */
    public function getSurchargeType()
    {
        return $this->SurchargeType;
    }

    /**
     * @param SimpleType\SurchargeLevelType|null $level
     * @return Surcharge
     */
    public function setLevel(SimpleType\SurchargeLevelType $level = null)
    {
        $this->Level = $level;

        return $this;
    }

    /**
     * @return SimpleType\SurchargeLevelType|null
     */
    public function getLevel()
    {
        return $this->Level;
    }

    /**
     * @param string|null $description
     * @return Surcharge
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
     * @param Money|null $amount
     * @return Surcharge
     */
    public function setAmount(Money $amount = null)
    {
        $this->Amount = $amount;

        return $this;
    }

    /**
     * @return Money|null
     */
    public function getAmount()
    {
        return $this->Amount;
    }


}

