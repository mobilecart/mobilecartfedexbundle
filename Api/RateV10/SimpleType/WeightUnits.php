<?php

namespace MobileCart\FedexBundle\Api\RateV10\SimpleType;

/**
 * Identifies the unit of measure associated with a weight value. See WeightUnits for the list 
 * of valid enumerated values. 
 *
 *
 */
class WeightUnits extends SimpleTypeAbstract
{
    const KG = 'KG';

    const LB = 'LB';

    static function getUnits()
    {
        return [
            self::LB,
            self::KG,
        ];
    }
}

