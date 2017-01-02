<?php

namespace MobileCart\FedexBundle\Api\RateV10\ComplexType;

use MobileCart\FedexBundle\Api\RateV10\SimpleType;

/**
 * Rate data specific to FedEx Freight or FedEx National Freight services. 
 *
 *
 */
class FreightRateDetail extends ComplexTypeAbstract
{
    const CLASS_NAME = 'FreightRateDetail';

    /**
     * A unique identifier for a specific rate quotation. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $QuoteNumber
     */
    protected $QuoteNumber;

    /**
     * Specifies how total base charge is determined. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\FreightBaseChargeCalculationType|null $BaseChargeCalculation
     */
    protected $BaseChargeCalculation;

    /**
     * Freight charges which accumulate to the total base charge for the shipment. 
     * minOccurs = 0
     * maxOccurs = unbounded
     *
     * @var FreightBaseCharge[] $BaseCharges
     */
    protected $BaseCharges = array();

    /**
     * Human-readable descriptions of additional information on this shipment rating. 
     * minOccurs = 0
     * maxOccurs = unbounded
     *
     * @var FreightRateNotation[] $Notations
     */
    protected $Notations = array();


    /**
     * @param string|null $quoteNumber
     * @return FreightRateDetail
     */
    public function setQuoteNumber($quoteNumber)
    {
        $this->QuoteNumber = $quoteNumber;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getQuoteNumber()
    {
        return $this->QuoteNumber;
    }

    /**
     * @param SimpleType\FreightBaseChargeCalculationType|null $baseChargeCalculation
     * @return FreightRateDetail
     */
    public function setBaseChargeCalculation(SimpleType\FreightBaseChargeCalculationType $baseChargeCalculation = null)
    {
        $this->BaseChargeCalculation = $baseChargeCalculation;

        return $this;
    }

    /**
     * @return SimpleType\FreightBaseChargeCalculationType|null
     */
    public function getBaseChargeCalculation()
    {
        return $this->BaseChargeCalculation;
    }

    /**
     * @param FreightBaseCharge[] $baseCharges
     * @return FreightRateDetail
     */
    public function setBaseCharges(array $baseCharges = array())
    {
        $this->BaseCharges = $baseCharges;

        return $this;
    }

    /**
     * @return FreightBaseCharge[]
     */
    public function getBaseCharges()
    {
        return $this->BaseCharges;
    }

    /**
     * @param FreightRateNotation[] $notations
     * @return FreightRateDetail
     */
    public function setNotations(array $notations = array())
    {
        $this->Notations = $notations;

        return $this;
    }

    /**
     * @return FreightRateNotation[]
     */
    public function getNotations()
    {
        return $this->Notations;
    }


}

