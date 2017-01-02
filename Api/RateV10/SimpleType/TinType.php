<?php

namespace MobileCart\FedexBundle\Api\RateV10\SimpleType;

/**
 * Identifies the category of the taxpayer identification number. 
 *
 *
 */
class TinType extends SimpleTypeAbstract
{
    const BUSINESS_NATIONAL = 'BUSINESS_NATIONAL';

    const BUSINESS_STATE = 'BUSINESS_STATE';

    const PERSONAL_NATIONAL = 'PERSONAL_NATIONAL';

    const PERSONAL_STATE = 'PERSONAL_STATE';


}

