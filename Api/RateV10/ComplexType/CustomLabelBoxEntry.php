<?php

namespace MobileCart\FedexBundle\Api\RateV10\ComplexType;

use MobileCart\FedexBundle\Api\RateV10\SimpleType;

/**
 * Solid (filled) rectangular area on label. 
 *
 *
 */
class CustomLabelBoxEntry extends ComplexTypeAbstract
{
    const CLASS_NAME = 'CustomLabelBoxEntry';

    /**

     * minOccurs = 1
     * maxOccurs = 1
     *
     * @var CustomLabelPosition $TopLeftCorner
     */
    protected $TopLeftCorner;

    /**

     * minOccurs = 1
     * maxOccurs = 1
     *
     * @var CustomLabelPosition $BottomRightCorner
     */
    protected $BottomRightCorner;


    /**
     * @param CustomLabelPosition $topLeftCorner
     * @return CustomLabelBoxEntry
     */
    public function setTopLeftCorner(CustomLabelPosition $topLeftCorner)
    {
        $this->TopLeftCorner = $topLeftCorner;

        return $this;
    }

    /**
     * @return CustomLabelPosition
     */
    public function getTopLeftCorner()
    {
        return $this->TopLeftCorner;
    }

    /**
     * @param CustomLabelPosition $bottomRightCorner
     * @return CustomLabelBoxEntry
     */
    public function setBottomRightCorner(CustomLabelPosition $bottomRightCorner)
    {
        $this->BottomRightCorner = $bottomRightCorner;

        return $this;
    }

    /**
     * @return CustomLabelPosition
     */
    public function getBottomRightCorner()
    {
        return $this->BottomRightCorner;
    }


}

