<?php

namespace MobileCart\FedexBundle\Api\RateV10\ComplexType;

use MobileCart\FedexBundle\Api\RateV10\SimpleType;

/**
 *
 *
 */
class CustomLabelPosition extends ComplexTypeAbstract
{
    const CLASS_NAME = 'CustomLabelPosition';

    /**
     * Horizontal position, relative to left edge of custom area. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var integer|null $X
     */
    protected $X;

    /**
     * Vertical position, relative to top edge of custom area. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var integer|null $Y
     */
    protected $Y;


    /**
     * @param integer|null $x
     * @return CustomLabelPosition
     */
    public function setX($x)
    {
        $this->X = $x;

        return $this;
    }

    /**
     * @return integer|null
     */
    public function getX()
    {
        return $this->X;
    }

    /**
     * @param integer|null $y
     * @return CustomLabelPosition
     */
    public function setY($y)
    {
        $this->Y = $y;

        return $this;
    }

    /**
     * @return integer|null
     */
    public function getY()
    {
        return $this->Y;
    }


}

