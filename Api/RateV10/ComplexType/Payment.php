<?php

namespace MobileCart\FedexBundle\Api\RateV10\ComplexType;

use MobileCart\FedexBundle\Api\RateV10\SimpleType;

/**
 * The descriptive data for the monetary compensation given to FedEx for services rendered 
 * to the customer. 
 *
 *
 */
class Payment extends ComplexTypeAbstract
{
    const CLASS_NAME = 'Payment';

    /**
     * Identifies the method of payment for a service. See PaymentType for list of valid enumerated 
     * values. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\PaymentType|null $PaymentType
     */
    protected $PaymentType;

    /**
     * Descriptive data identifying the party responsible for payment for a service. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var Payor|null $Payor
     */
    protected $Payor;


    /**
     * @param SimpleType\PaymentType|null $paymentType
     * @return Payment
     */
    public function setPaymentType(SimpleType\PaymentType $paymentType = null)
    {
        $this->PaymentType = $paymentType;

        return $this;
    }

    /**
     * @return SimpleType\PaymentType|null
     */
    public function getPaymentType()
    {
        return $this->PaymentType;
    }

    /**
     * @param Payor|null $payor
     * @return Payment
     */
    public function setPayor(Payor $payor = null)
    {
        $this->Payor = $payor;

        return $this;
    }

    /**
     * @return Payor|null
     */
    public function getPayor()
    {
        return $this->Payor;
    }


}

