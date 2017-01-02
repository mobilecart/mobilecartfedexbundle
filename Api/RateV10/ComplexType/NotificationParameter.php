<?php

namespace MobileCart\FedexBundle\Api\RateV10\ComplexType;

use MobileCart\FedexBundle\Api\RateV10\SimpleType;

/**
 *
 *
 */
class NotificationParameter extends ComplexTypeAbstract
{
    const CLASS_NAME = 'NotificationParameter';

    /**
     * Identifies the type of data contained in Value (e.g. SERVICE_TYPE, PACKAGE_SEQUENCE, 
     * etc..). 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $Id
     */
    protected $Id;

    /**
     * The value of the parameter (e.g. PRIORITY_OVERNIGHT, 2, etc..). 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $Value
     */
    protected $Value;


    /**
     * @param string|null $id
     * @return NotificationParameter
     */
    public function setId($id)
    {
        $this->Id = $id;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * @param string|null $value
     * @return NotificationParameter
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

