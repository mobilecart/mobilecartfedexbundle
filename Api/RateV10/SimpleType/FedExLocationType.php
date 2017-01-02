<?php

namespace MobileCart\FedexBundle\Api\RateV10\SimpleType;

/**
 * Identifies a kind of FedEx facility. 
 *
 *
 */
class FedExLocationType extends SimpleTypeAbstract
{
    const FEDEX_EXPRESS_STATION = 'FEDEX_EXPRESS_STATION';

    const FEDEX_GROUND_TERMINAL = 'FEDEX_GROUND_TERMINAL';

    const FEDEX_OFFICE = 'FEDEX_OFFICE';


}

