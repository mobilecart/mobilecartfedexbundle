<?php

namespace MobileCart\FedexBundle\Api\RateV10\SimpleType;

/**
 * The attribute of the shipment that caused the delay(e.g. Country, City, LocationId, Zip, 
 * service area, special handling ) 
 *
 *
 */
class DelayLevelType extends SimpleTypeAbstract
{
    const CITY = 'CITY';

    const COUNTRY = 'COUNTRY';

    const LOCATION = 'LOCATION';

    const POSTAL_CODE = 'POSTAL_CODE';

    const SERVICE_AREA = 'SERVICE_AREA';

    const SERVICE_AREA_SPECIAL_SERVICE = 'SERVICE_AREA_SPECIAL_SERVICE';

    const SPECIAL_SERVICE = 'SPECIAL_SERVICE';


}

