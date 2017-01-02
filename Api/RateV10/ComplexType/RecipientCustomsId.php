<?php

namespace MobileCart\FedexBundle\Api\RateV10\ComplexType;

use MobileCart\FedexBundle\Api\RateV10\SimpleType;

/**
 * Specifies how the recipient is identified for customs purposes; the requirements on this 
 * information vary with destination country. 
 *
 *
 */
class RecipientCustomsId extends ComplexTypeAbstract
{
    const CLASS_NAME = 'RecipientCustomsId';

    /**
     * Specifies the kind of identification being used. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\RecipientCustomsIdType|null $Type
     */
    protected $Type;

    /**
     * Contains the actual ID value, of the type specified above. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $Value
     */
    protected $Value;


    /**
     * @param SimpleType\RecipientCustomsIdType|null $type
     * @return RecipientCustomsId
     */
    public function setType(SimpleType\RecipientCustomsIdType $type = null)
    {
        $this->Type = $type;

        return $this;
    }

    /**
     * @return SimpleType\RecipientCustomsIdType|null
     */
    public function getType()
    {
        return $this->Type;
    }

    /**
     * @param string|null $value
     * @return RecipientCustomsId
     */
    public function setValue($value)
    {
        $this->Value = $value;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getValue()
    {
        return $this->Value;
    }


}

