<?php

namespace MobileCart\FedexBundle\Api\RateV10\SimpleType;

/**
 * CM = centimeters, IN = inches 
 *
 *
 */
class LinearUnits extends SimpleTypeAbstract
{
    const CM = 'CM';

    const IN = 'IN';

    static function getUnits()
    {
        return [
            self::CM,
            self::IN,
        ];
    }
}

