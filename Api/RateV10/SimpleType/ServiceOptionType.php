<?php

namespace MobileCart\FedexBundle\Api\RateV10\SimpleType;

/**
 * These values control the optional features of service that may be combined in a commitment/rate 
 * comparision transaction. 
 *
 *
 */
class ServiceOptionType extends SimpleTypeAbstract
{
    const FREIGHT_GUARANTEE = 'FREIGHT_GUARANTEE';

    const SATURDAY_DELIVERY = 'SATURDAY_DELIVERY';

    const SMART_POST_ALLOWED_INDICIA = 'SMART_POST_ALLOWED_INDICIA';

    const SMART_POST_HUB_ID = 'SMART_POST_HUB_ID';


}

