<?php

namespace MobileCart\FedexBundle\Api\RateV10\SimpleType;

/**
 * Abstract class for all simple data types 
 *
 *
 */
abstract class SimpleTypeAbstract
{
    /**
     * @var string
     */
    protected $value;

    /**
     * @param string $value
     */
    public function __construct($value)
    {
        $this->value = $value;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->value;
    }
}

