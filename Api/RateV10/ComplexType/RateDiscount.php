<?php

namespace MobileCart\FedexBundle\Api\RateV10\ComplexType;

use MobileCart\FedexBundle\Api\RateV10\SimpleType;

/**
 * Identifies a discount applied to the shipment. 
 *
 *
 */
class RateDiscount extends ComplexTypeAbstract
{
    const CLASS_NAME = 'RateDiscount';

    /**
     * Identifies the type of discount applied to the shipment. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\RateDiscountType|null $RateDiscountType
     */
    protected $RateDiscountType;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $Description
     */
    protected $Description;

    /**
     * The amount of the discount applied to the shipment. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var Money|null $Amount
     */
    protected $Amount;

    /**
     * The percentage of the discount applied to the shipment. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var float|null $Percent
     */
    protected $Percent;


    /**
     * @param SimpleType\RateDiscountType|null $rateDiscountType
     * @return RateDiscount
     */
    public function setRateDiscountType(SimpleType\RateDiscountType $rateDiscountType = null)
    {
        $this->RateDiscountType = $rateDiscountType;

        return $this;
    }

    /**
     * @return SimpleType\RateDiscountType|null
     */
    public function getRateDiscountType()
    {
        return $this->RateDiscountType;
    }

    /**
     * @param string|null $description
     * @return RateDiscount
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
     * @return RateDiscount
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

    /**
     * @param float|null $percent
     * @return RateDiscount
     */
    public function setPercent($percent)
    {
        $this->Percent = $percent;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getPercent()
    {
        return $this->Percent;
    }


}

