<?php

namespace MobileCart\FedexBundle\Api\RateV10\SimpleType;

/**
 * Indicates which kind of hazardous content (as defined by DOT) is being reported. 
 *
 *
 */
class HazardousCommodityOptionType extends SimpleTypeAbstract
{
    const HAZARDOUS_MATERIALS = 'HAZARDOUS_MATERIALS';

    const LITHIUM_BATTERY_EXCEPTION = 'LITHIUM_BATTERY_EXCEPTION';

    const ORM_D = 'ORM_D';

    const REPORTABLE_QUANTITIES = 'REPORTABLE_QUANTITIES';

    const SMALL_QUANTITY_EXCEPTION = 'SMALL_QUANTITY_EXCEPTION';


}

