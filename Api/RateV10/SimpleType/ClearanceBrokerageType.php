<?php

namespace MobileCart\FedexBundle\Api\RateV10\SimpleType;

/**
 * Specifies the type of brokerage to be applied to a shipment. 
 *
 *
 */
class ClearanceBrokerageType extends SimpleTypeAbstract
{
    const BROKER_INCLUSIVE = 'BROKER_INCLUSIVE';

    const BROKER_INCLUSIVE_NON_RESIDENT_IMPORTER = 'BROKER_INCLUSIVE_NON_RESIDENT_IMPORTER';

    const BROKER_SELECT = 'BROKER_SELECT';

    const BROKER_SELECT_NON_RESIDENT_IMPORTER = 'BROKER_SELECT_NON_RESIDENT_IMPORTER';

    const BROKER_UNASSIGNED = 'BROKER_UNASSIGNED';


}

