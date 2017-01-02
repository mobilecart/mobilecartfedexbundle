<?php

namespace MobileCart\FedexBundle\Api\RateV10\SimpleType;

/**
 * Identifies the FedEx service to use in shipping the package. See ServiceType for list of 
 * valid enumerated values. 
 *
 *
 */
class ServiceType extends SimpleTypeAbstract
{
    const EUROPE_FIRST_INTERNATIONAL_PRIORITY = 'EUROPE_FIRST_INTERNATIONAL_PRIORITY';

    const FEDEX_1_DAY_FREIGHT = 'FEDEX_1_DAY_FREIGHT';

    const FEDEX_2_DAY = 'FEDEX_2_DAY';

    const FEDEX_2_DAY_AM = 'FEDEX_2_DAY_AM';

    const FEDEX_2_DAY_FREIGHT = 'FEDEX_2_DAY_FREIGHT';

    const FEDEX_3_DAY_FREIGHT = 'FEDEX_3_DAY_FREIGHT';

    const FEDEX_EXPRESS_SAVER = 'FEDEX_EXPRESS_SAVER';

    const FEDEX_FIRST_FREIGHT = 'FEDEX_FIRST_FREIGHT';

    const FEDEX_FREIGHT_ECONOMY = 'FEDEX_FREIGHT_ECONOMY';

    const FEDEX_FREIGHT_PRIORITY = 'FEDEX_FREIGHT_PRIORITY';

    const FEDEX_GROUND = 'FEDEX_GROUND';

    const FIRST_OVERNIGHT = 'FIRST_OVERNIGHT';

    const GROUND_HOME_DELIVERY = 'GROUND_HOME_DELIVERY';

    const INTERNATIONAL_ECONOMY = 'INTERNATIONAL_ECONOMY';

    const INTERNATIONAL_ECONOMY_FREIGHT = 'INTERNATIONAL_ECONOMY_FREIGHT';

    const INTERNATIONAL_FIRST = 'INTERNATIONAL_FIRST';

    const INTERNATIONAL_PRIORITY = 'INTERNATIONAL_PRIORITY';

    const INTERNATIONAL_PRIORITY_FREIGHT = 'INTERNATIONAL_PRIORITY_FREIGHT';

    const PRIORITY_OVERNIGHT = 'PRIORITY_OVERNIGHT';

    const SMART_POST = 'SMART_POST';

    const STANDARD_OVERNIGHT = 'STANDARD_OVERNIGHT';

    static function getTypes()
    {
        return [
            self::EUROPE_FIRST_INTERNATIONAL_PRIORITY,
            self::FEDEX_1_DAY_FREIGHT,
            self::FEDEX_2_DAY,
            self::FEDEX_2_DAY_AM,
            self::FEDEX_2_DAY_FREIGHT,
            self::FEDEX_3_DAY_FREIGHT,
            self::FEDEX_EXPRESS_SAVER,
            self::FEDEX_FIRST_FREIGHT,
            self::FEDEX_FREIGHT_ECONOMY,
            self::FEDEX_FREIGHT_PRIORITY,
            self::FEDEX_GROUND,
            self::FIRST_OVERNIGHT,
            self::GROUND_HOME_DELIVERY,
            self::INTERNATIONAL_ECONOMY,
            self::INTERNATIONAL_ECONOMY_FREIGHT,
            self::INTERNATIONAL_FIRST,
            self::INTERNATIONAL_PRIORITY,
            self::INTERNATIONAL_PRIORITY_FREIGHT,
            self::PRIORITY_OVERNIGHT,
            self::SMART_POST,
            self::STANDARD_OVERNIGHT,
        ];
    }
}

