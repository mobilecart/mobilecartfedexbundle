<?php

namespace MobileCart\FedexBundle\Api\RateV10\SimpleType;

/**
 * Identifies the method by which the package is to be tendered to FedEx. This element does 
 * not dispatch a courier for package pickup. 
 *
 *
 */
class DropoffType extends SimpleTypeAbstract
{
    const BUSINESS_SERVICE_CENTER = 'BUSINESS_SERVICE_CENTER';

    const DROP_BOX = 'DROP_BOX';

    const REGULAR_PICKUP = 'REGULAR_PICKUP';

    const REQUEST_COURIER = 'REQUEST_COURIER';

    const STATION = 'STATION';

    static function getTypes()
    {
        return [
            self::BUSINESS_SERVICE_CENTER,
            self::DROP_BOX,
            self::REGULAR_PICKUP,
            self::REQUEST_COURIER,
            self::STATION,
        ];
    }

}

