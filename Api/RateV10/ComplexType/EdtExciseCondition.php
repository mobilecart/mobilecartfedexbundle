<?php

namespace MobileCart\FedexBundle\Api\RateV10\ComplexType;

use MobileCart\FedexBundle\Api\RateV10\SimpleType;

/**
 *
 *
 */
class EdtExciseCondition extends ComplexTypeAbstract
{
    const CLASS_NAME = 'EdtExciseCondition';

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $Category
     */
    protected $Category;

    /**
     * Customer-declared value, with data type and legal values depending on excise condition, 
     * used in defining the taxable value of the item. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $Value
     */
    protected $Value;


    /**
     * @param string|null $category
     * @return EdtExciseCondition
     */
    public function setCategory($category)
    {
        $this->Category = $category;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getCategory()
    {
        return $this->Category;
    }

    /**
     * @param string|null $value
     * @return EdtExciseCondition
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

