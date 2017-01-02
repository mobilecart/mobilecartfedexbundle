<?php

namespace MobileCart\FedexBundle\Api\RateV10\ComplexType;

use MobileCart\FedexBundle\Api\RateV10\SimpleType;

/**
 * Descriptive data identifying the party responsible for payment for a service. 
 *
 *
 */
class Payor extends ComplexTypeAbstract
{
    const CLASS_NAME = 'Payor';

    /**
     * Identifies the FedEx account number assigned to the payor. 
     * minOccurs = 1
     * maxOccurs = 1
     *
     * @var string $AccountNumber
     */
    protected $AccountNumber;

    /**
     * Identifies the country of the payor. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $CountryCode
     */
    protected $CountryCode;


    /**
     * @param string $accountNumber
     * @return Payor
     */
    public function setAccountNumber($accountNumber)
    {
        $this->AccountNumber = $accountNumber;

        return $this;
    }

    /**
     * @return string
     */
    public function getAccountNumber()
    {
        return $this->AccountNumber;
    }

    /**
     * @param string|null $countryCode
     * @return Payor
     */
    public function setCountryCode($countryCode)
    {
        $this->CountryCode = $countryCode;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getCountryCode()
    {
        return $this->CountryCode;
    }


}

