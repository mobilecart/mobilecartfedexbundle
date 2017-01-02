<?php

namespace MobileCart\FedexBundle\Api\RateV10\ComplexType;

use MobileCart\FedexBundle\Api\RateV10\SimpleType;

/**
 * Identifies each tax applied to the shipment. 
 *
 *
 */
class Tax extends ComplexTypeAbstract
{
    const CLASS_NAME = 'Tax';

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\TaxType|null $TaxType
     */
    protected $TaxType;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $Description
     */
    protected $Description;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var Money|null $Amount
     */
    protected $Amount;


    /**
     * @param SimpleType\TaxType|null $taxType
     * @return Tax
     */
    public function setTaxType(SimpleType\TaxType $taxType = null)
    {
        $this->TaxType = $taxType;

        return $this;
    }

    /**
     * @return SimpleType\TaxType|null
     */
    public function getTaxType()
    {
        return $this->TaxType;
    }

    /**
     * @param string|null $description
     * @return Tax
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
     * @return Tax
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

