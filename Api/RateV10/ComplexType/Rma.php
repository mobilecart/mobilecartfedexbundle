<?php

namespace MobileCart\FedexBundle\Api\RateV10\ComplexType;

use MobileCart\FedexBundle\Api\RateV10\SimpleType;

/**
 * Return Merchant Authorization 
 *
 *
 */
class Rma extends ComplexTypeAbstract
{
    const CLASS_NAME = 'Rma';

    /**
     * Return Merchant Authorization Number 
     * minOccurs = 1
     * maxOccurs = 1
     *
     * @var string $Number
     */
    protected $Number;

    /**
     * The reason for the return. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $Reason
     */
    protected $Reason;


    /**
     * @param string $number
     * @return Rma
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
     * @param string|null $reason
     * @return Rma
     */
    public function setReason($reason)
    {
        $this->Reason = $reason;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getReason()
    {
        return $this->Reason;
    }


}

