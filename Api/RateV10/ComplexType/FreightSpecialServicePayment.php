<?php

namespace MobileCart\FedexBundle\Api\RateV10\ComplexType;

use MobileCart\FedexBundle\Api\RateV10\SimpleType;

/**
 * Specifies which party will be responsible for payment of any surcharges for Freight special 
 * services for which split billing is allowed. 
 *
 *
 */
class FreightSpecialServicePayment extends ComplexTypeAbstract
{
    const CLASS_NAME = 'FreightSpecialServicePayment';

    /**
     * Identifies the special service. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\ShipmentSpecialServiceType|null $SpecialService
     */
    protected $SpecialService;

    /**
     * Indicates who will pay for the special service. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\FreightAccountPaymentType|null $PaymentType
     */
    protected $PaymentType;


    /**
     * @param SimpleType\ShipmentSpecialServiceType|null $specialService
     * @return FreightSpecialServicePayment
     */
    public function setSpecialService(SimpleType\ShipmentSpecialServiceType $specialService = null)
    {
        $this->SpecialService = $specialService;

        return $this;
    }

    /**
     * @return SimpleType\ShipmentSpecialServiceType|null
     */
    public function getSpecialService()
    {
        return $this->SpecialService;
    }

    /**
     * @param SimpleType\FreightAccountPaymentType|null $paymentType
     * @return FreightSpecialServicePayment
     */
    public function setPaymentType(SimpleType\FreightAccountPaymentType $paymentType = null)
    {
        $this->PaymentType = $paymentType;

        return $this;
    }

    /**
     * @return SimpleType\FreightAccountPaymentType|null
     */
    public function getPaymentType()
    {
        return $this->PaymentType;
    }


}

