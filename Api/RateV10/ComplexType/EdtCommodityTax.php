<?php

namespace MobileCart\FedexBundle\Api\RateV10\ComplexType;

use MobileCart\FedexBundle\Api\RateV10\SimpleType;

/**
 *
 *
 */
class EdtCommodityTax extends ComplexTypeAbstract
{
    const CLASS_NAME = 'EdtCommodityTax';

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $HarmonizedCode
     */
    protected $HarmonizedCode;

    /**

     * minOccurs = 0
     * maxOccurs = unbounded
     *
     * @var EdtTaxDetail[] $Taxes
     */
    protected $Taxes = array();


    /**
     * @param string|null $harmonizedCode
     * @return EdtCommodityTax
     */
    public function setHarmonizedCode($harmonizedCode)
    {
        $this->HarmonizedCode = $harmonizedCode;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getHarmonizedCode()
    {
        return $this->HarmonizedCode;
    }

    /**
     * @param EdtTaxDetail[] $taxes
     * @return EdtCommodityTax
     */
    public function setTaxes(array $taxes = array())
    {
        $this->Taxes = $taxes;

        return $this;
    }

    /**
     * @return EdtTaxDetail[]
     */
    public function getTaxes()
    {
        return $this->Taxes;
    }


}

