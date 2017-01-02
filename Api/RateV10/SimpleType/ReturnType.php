<?php

namespace MobileCart\FedexBundle\Api\RateV10\SimpleType;

/**
 * The type of return shipment that is being requested. 
 *
 *
 */
class ReturnType extends SimpleTypeAbstract
{
    const FEDEX_TAG = 'FEDEX_TAG';

    const PENDING = 'PENDING';

    const PRINT_RETURN_LABEL = 'PRINT_RETURN_LABEL';


}

