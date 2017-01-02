<?php

namespace MobileCart\FedexBundle\Api\RateV10\SimpleType;

/**
 * Identifies the collection of special services offered by FedEx. 
 *
 *
 */
class PackageSpecialServiceType extends SimpleTypeAbstract
{
    const ALCOHOL = 'ALCOHOL';

    const APPOINTMENT_DELIVERY = 'APPOINTMENT_DELIVERY';

    const COD = 'COD';

    const DANGEROUS_GOODS = 'DANGEROUS_GOODS';

    const DRY_ICE = 'DRY_ICE';

    const NON_STANDARD_CONTAINER = 'NON_STANDARD_CONTAINER';

    const PRIORITY_ALERT = 'PRIORITY_ALERT';

    const SIGNATURE_OPTION = 'SIGNATURE_OPTION';


}

