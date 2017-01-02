<?php

namespace MobileCart\FedexBundle\Api\RateV10\ComplexType;

use MobileCart\FedexBundle\Api\RateV10\SimpleType;

/**
 * The dimensions of this package and the unit type used for the measurements. 
 *
 *
 */
class Dimensions extends ComplexTypeAbstract
{
    const CLASS_NAME = 'Dimensions';

    /**

     * minOccurs = 1
     * maxOccurs = 1
     *
     * @var integer $Length
     */
    protected $Length;

    /**

     * minOccurs = 1
     * maxOccurs = 1
     *
     * @var integer $Width
     */
    protected $Width;

    /**

     * minOccurs = 1
     * maxOccurs = 1
     *
     * @var integer $Height
     */
    protected $Height;

    /**

     * minOccurs = 1
     * maxOccurs = 1
     *
     * @var SimpleType\LinearUnits $Units
     */
    protected $Units;


    /**
     * @param integer $length
     * @return Dimensions
     */
    public function setLength($length)
    {
        $this->Length = $length;

        return $this;
    }

    /**
     * @return integer
     */
    public function getLength()
    {
        return $this->Length;
    }

    /**
     * @param integer $width
     * @return Dimensions
     */
    public function setWidth($width)
    {
        $this->Width = $width;

        return $this;
    }

    /**
     * @return integer
     */
    public function getWidth()
    {
        return $this->Width;
    }

    /**
     * @param integer $height
     * @return Dimensions
     */
    public function setHeight($height)
    {
        $this->Height = $height;

        return $this;
    }

    /**
     * @return integer
     */
    public function getHeight()
    {
        return $this->Height;
    }

    /**
     * @param SimpleType\LinearUnits $units
     * @return Dimensions
     */
    public function setUnits(SimpleType\LinearUnits $units)
    {
        $this->Units = $units;

        return $this;
    }

    /**
     * @return SimpleType\LinearUnits
     */
    public function getUnits()
    {
        return $this->Units;
    }


}

