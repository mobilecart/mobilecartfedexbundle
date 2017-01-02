<?php

namespace MobileCart\FedexBundle\Api\RateV10\ComplexType;

use MobileCart\FedexBundle\Api\RateV10\SimpleType;

/**
 * Specifies the currency exchange performed on financial amounts for this rate. 
 *
 *
 */
class CurrencyExchangeRate extends ComplexTypeAbstract
{
    const CLASS_NAME = 'CurrencyExchangeRate';

    /**
     * The currency code for the original (converted FROM) currency. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $FromCurrency
     */
    protected $FromCurrency;

    /**
     * The currency code for the final (converted INTO) currency. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $IntoCurrency
     */
    protected $IntoCurrency;

    /**
     * Multiplier used to convert fromCurrency units to intoCurrency units. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var float|null $Rate
     */
    protected $Rate;


    /**
     * @param string|null $fromCurrency
     * @return CurrencyExchangeRate
     */
    public function setFromCurrency($fromCurrency)
    {
        $this->FromCurrency = $fromCurrency;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getFromCurrency()
    {
        return $this->FromCurrency;
    }

    /**
     * @param string|null $intoCurrency
     * @return CurrencyExchangeRate
     */
    public function setIntoCurrency($intoCurrency)
    {
        $this->IntoCurrency = $intoCurrency;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getIntoCurrency()
    {
        return $this->IntoCurrency;
    }

    /**
     * @param float|null $rate
     * @return CurrencyExchangeRate
     */
    public function setRate($rate)
    {
        $this->Rate = $rate;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getRate()
    {
        return $this->Rate;
    }


}

