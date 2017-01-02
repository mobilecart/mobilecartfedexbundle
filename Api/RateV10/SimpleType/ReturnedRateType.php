<?php

namespace MobileCart\FedexBundle\Api\RateV10\SimpleType;

/**
 * The "PAYOR..." rates are expressed in the currency identified in the payor's rate table(s). 
 * The "RATED..." rates are expressed in the currency of the origin country. Former "...COUNTER..." 
 * values have become "...RETAIL..." values, except for PAYOR_COUNTER and RATED_COUNTER, which 
 * have been removed. 
 *
 *
 */
class ReturnedRateType extends SimpleTypeAbstract
{
    const PAYOR_ACCOUNT_PACKAGE = 'PAYOR_ACCOUNT_PACKAGE';

    const PAYOR_ACCOUNT_SHIPMENT = 'PAYOR_ACCOUNT_SHIPMENT';

    const PAYOR_LIST_PACKAGE = 'PAYOR_LIST_PACKAGE';

    const PAYOR_LIST_SHIPMENT = 'PAYOR_LIST_SHIPMENT';

    const RATED_ACCOUNT_PACKAGE = 'RATED_ACCOUNT_PACKAGE';

    const RATED_ACCOUNT_SHIPMENT = 'RATED_ACCOUNT_SHIPMENT';

    const RATED_LIST_PACKAGE = 'RATED_LIST_PACKAGE';

    const RATED_LIST_SHIPMENT = 'RATED_LIST_SHIPMENT';


}

