<?php

namespace MobileCart\FedexBundle\Api\RateV10\ComplexType;

use MobileCart\FedexBundle\Api\RateV10\SimpleType;

/**
 * Identifies a discount applied to the shipment. 
 *
 *
 */
class Rebate extends ComplexTypeAbstract
{
    const CLASS_NAME = 'Rebate';

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\RebateType|null $RebateType
     */
    protected $RebateType;

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
     * @param SimpleType\RebateType|null $rebateType
     * @return Rebate
     */
    public function setRebateType(SimpleType\RebateType $rebateType = null)
    {
        $this->RebateType = $rebateType;

        return $this;
    }

    /**
     * @return SimpleType\RebateType|null
     */
    public function getRebateType()
    {
        return $this->RebateType;
    }

    /**
     * @param string|null $description
     * @return Rebate
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
     * @return Rebate
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
     * @return Rebate
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

