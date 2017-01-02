<?php

namespace MobileCart\FedexBundle\Api\RateV10\SimpleType;

/**
 * Identifies the packaging used by the requestor for the package. See PackagingType for list 
 * of valid enumerated values. 
 *
 *
 */
class PackagingType extends SimpleTypeAbstract
{
    const FEDEX_10KG_BOX = 'FEDEX_10KG_BOX';

    const FEDEX_25KG_BOX = 'FEDEX_25KG_BOX';

    const FEDEX_BOX = 'FEDEX_BOX';

    const FEDEX_ENVELOPE = 'FEDEX_ENVELOPE';

    const FEDEX_PAK = 'FEDEX_PAK';

    const FEDEX_TUBE = 'FEDEX_TUBE';

    const YOUR_PACKAGING = 'YOUR_PACKAGING';

    static function getTypes()
    {
        return [
            self::FEDEX_10KG_BOX,
            self::FEDEX_25KG_BOX,
            self::FEDEX_BOX,
            self::FEDEX_ENVELOPE,
            self::FEDEX_PAK,
            self::FEDEX_TUBE,
            self::YOUR_PACKAGING,
        ];
    }
}

