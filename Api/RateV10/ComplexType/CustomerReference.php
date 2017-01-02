<?php

namespace MobileCart\FedexBundle\Api\RateV10\ComplexType;

use MobileCart\FedexBundle\Api\RateV10\SimpleType;

/**
 * Reference information to be associated with this package. 
 *
 *
 */
class CustomerReference extends ComplexTypeAbstract
{
    const CLASS_NAME = 'CustomerReference';

    /**

     * minOccurs = 1
     * maxOccurs = 1
     *
     * @var SimpleType\CustomerReferenceType $CustomerReferenceType
     */
    protected $CustomerReferenceType;

    /**

     * minOccurs = 1
     * maxOccurs = 1
     *
     * @var string $Value
     */
    protected $Value;


    /**
     * @param SimpleType\CustomerReferenceType $customerReferenceType
     * @return CustomerReference
     */
    public function setCustomerReferenceType(SimpleType\CustomerReferenceType $customerReferenceType)
    {
        $this->CustomerReferenceType = $customerReferenceType;

        return $this;
    }

    /**
     * @return SimpleType\CustomerReferenceType
     */
    public function getCustomerReferenceType()
    {
        return $this->CustomerReferenceType;
    }

    /**
     * @param string $value
     * @return CustomerReference
     */
    public function setValue($value)
    {
        $this->Value = $value;

        return $this;
    }

    /**
     * @return string
     */
    public function getValue()
    {
        return $this->Value;
    }


}

