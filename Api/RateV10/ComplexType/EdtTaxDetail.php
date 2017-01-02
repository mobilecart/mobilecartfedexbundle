<?php

namespace MobileCart\FedexBundle\Api\RateV10\ComplexType;

use MobileCart\FedexBundle\Api\RateV10\SimpleType;

/**
 *
 *
 */
class EdtTaxDetail extends ComplexTypeAbstract
{
    const CLASS_NAME = 'EdtTaxDetail';

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\EdtTaxType|null $TaxType
     */
    protected $TaxType;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $EffectiveDate
     */
    protected $EffectiveDate;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $Name
     */
    protected $Name;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var Money|null $TaxableValue
     */
    protected $TaxableValue;

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
     * @var string|null $Formula
     */
    protected $Formula;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var Money|null $Amount
     */
    protected $Amount;


    /**
     * @param SimpleType\EdtTaxType|null $taxType
     * @return EdtTaxDetail
     */
    public function setTaxType(SimpleType\EdtTaxType $taxType = null)
    {
        $this->TaxType = $taxType;

        return $this;
    }

    /**
     * @return SimpleType\EdtTaxType|null
     */
    public function getTaxType()
    {
        return $this->TaxType;
    }

    /**
     * @param string|null $effectiveDate
     * @return EdtTaxDetail
     */
    public function setEffectiveDate($effectiveDate)
    {
        $this->EffectiveDate = $effectiveDate;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getEffectiveDate()
    {
        return $this->EffectiveDate;
    }

    /**
     * @param string|null $name
     * @return EdtTaxDetail
     */
    public function setName($name)
    {
        $this->Name = $name;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * @param Money|null $taxableValue
     * @return EdtTaxDetail
     */
    public function setTaxableValue(Money $taxableValue = null)
    {
        $this->TaxableValue = $taxableValue;

        return $this;
    }

    /**
     * @return Money|null
     */
    public function getTaxableValue()
    {
        return $this->TaxableValue;
    }

    /**
     * @param string|null $description
     * @return EdtTaxDetail
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
     * @param string|null $formula
     * @return EdtTaxDetail
     */
    public function setFormula($formula)
    {
        $this->Formula = $formula;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getFormula()
    {
        return $this->Formula;
    }

    /**
     * @param Money|null $amount
     * @return EdtTaxDetail
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

