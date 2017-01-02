<?php

namespace MobileCart\FedexBundle\Api\RateV10\ComplexType;

use MobileCart\FedexBundle\Api\RateV10\SimpleType;

/**
 *
 *
 */
class Money extends ComplexTypeAbstract
{
    const CLASS_NAME = 'Money';

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $Currency
     */
    protected $Currency;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var float|null $Amount
     */
    protected $Amount;


    /**
     * @param string|null $currency
     * @return Money
     */
    public function setCurrency($currency)
    {
        $this->Currency = $currency;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getCurrency()
    {
        return $this->Currency;
    }

    /**
     * @param float|null $amount
     * @return Money
     */
    public function setAmount($amount)
    {
        $this->Amount = $amount;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getAmount()
    {
        return $this->Amount;
    }


}

