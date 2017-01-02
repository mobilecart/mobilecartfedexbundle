<?php

namespace MobileCart\FedexBundle\Api\RateV10\ComplexType;

use MobileCart\FedexBundle\Api\RateV10\SimpleType;

/**
 * Additional non-monetary data returned with Freight rates. 
 *
 *
 */
class FreightRateNotation extends ComplexTypeAbstract
{
    const CLASS_NAME = 'FreightRateNotation';

    /**
     * Unique identifier for notation. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $Code
     */
    protected $Code;

    /**
     * Human-readable explanation of notation. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $Description
     */
    protected $Description;


    /**
     * @param string|null $code
     * @return FreightRateNotation
     */
    public function setCode($code)
    {
        $this->Code = $code;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getCode()
    {
        return $this->Code;
    }

    /**
     * @param string|null $description
     * @return FreightRateNotation
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


}

