<?php

namespace MobileCart\FedexBundle\Api\RateV10\SimpleType;

/**
 * The type of delay this shipment will encounter. 
 *
 *
 */
class CommitmentDelayType extends SimpleTypeAbstract
{
    const HOLIDAY = 'HOLIDAY';

    const NON_WORKDAY = 'NON_WORKDAY';

    const NO_CITY_DELIVERY = 'NO_CITY_DELIVERY';

    const NO_HOLD_AT_LOCATION = 'NO_HOLD_AT_LOCATION';

    const NO_LOCATION_DELIVERY = 'NO_LOCATION_DELIVERY';

    const NO_SERVICE_AREA_DELIVERY = 'NO_SERVICE_AREA_DELIVERY';

    const NO_SERVICE_AREA_SPECIAL_SERVICE_DELIVERY = 'NO_SERVICE_AREA_SPECIAL_SERVICE_DELIVERY';

    const NO_SPECIAL_SERVICE_DELIVERY = 'NO_SPECIAL_SERVICE_DELIVERY';

    const NO_ZIP_DELIVERY = 'NO_ZIP_DELIVERY';

    const WEEKEND = 'WEEKEND';

    const WEEKEND_SPECIAL = 'WEEKEND_SPECIAL';


}

