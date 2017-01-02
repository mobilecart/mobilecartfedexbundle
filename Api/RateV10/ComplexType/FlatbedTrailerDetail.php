<?php

namespace MobileCart\FedexBundle\Api\RateV10\ComplexType;

use MobileCart\FedexBundle\Api\RateV10\SimpleType;

/**
 * Specifies the optional features/characteristics requested for a Freight shipment utilizing 
 * a flatbed trailer. 
 *
 *
 */
class FlatbedTrailerDetail extends ComplexTypeAbstract
{
    const CLASS_NAME = 'FlatbedTrailerDetail';

    /**

     * minOccurs = 0
     * maxOccurs = unbounded
     *
     * @var SimpleType\FlatbedTrailerOption[] $Options
     */
    protected $Options = array();


    /**
     * @param SimpleType\FlatbedTrailerOption[] $options
     * @return FlatbedTrailerDetail
     */
    public function setOptions(array $options = array())
    {
        $this->Options = $options;

        return $this;
    }

    /**
     * @return SimpleType\FlatbedTrailerOption[]
     */
    public function getOptions()
    {
        return $this->Options;
    }


}

