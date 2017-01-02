<?php

namespace MobileCart\FedexBundle\Api\RateV10\ComplexType;

use MobileCart\FedexBundle\Api\RateV10\SimpleType;

/**
 * The descriptive data for taxpayer identification information. 
 *
 *
 */
class TaxpayerIdentification extends ComplexTypeAbstract
{
    const CLASS_NAME = 'TaxpayerIdentification';

    /**
     * Identifies the category of the taxpayer identification number. See TinType for the list 
     * of values. 
     * minOccurs = 1
     * maxOccurs = 1
     *
     * @var SimpleType\TinType $TinType
     */
    protected $TinType;

    /**
     * Identifies the taxpayer identification number. 
     * minOccurs = 1
     * maxOccurs = 1
     *
     * @var string $Number
     */
    protected $Number;

    /**
     * Identifies the usage of Tax Identification Number in Shipment processing 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $Usage
     */
    protected $Usage;


    /**
     * @param SimpleType\TinType $tinType
     * @return TaxpayerIdentification
     */
    public function setTinType(SimpleType\TinType $tinType)
    {
        $this->TinType = $tinType;

        return $this;
    }

    /**
     * @return SimpleType\TinType
     */
    public function getTinType()
    {
        return $this->TinType;
    }

    /**
     * @param string $number
     * @return TaxpayerIdentification
     */
    public function setNumber($number)
    {
        $this->Number = $number;

        return $this;
    }

    /**
     * @return string
     */
    public function getNumber()
    {
        return $this->Number;
    }

    /**
     * @param string|null $usage
     * @return TaxpayerIdentification
     */
    public function setUsage($usage)
    {
        $this->Usage = $usage;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getUsage()
    {
        return $this->Usage;
    }


}

