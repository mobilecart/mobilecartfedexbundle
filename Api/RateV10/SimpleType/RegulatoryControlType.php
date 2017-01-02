<?php

namespace MobileCart\FedexBundle\Api\RateV10\SimpleType;

/**
 * FOOD_OR_PERISHABLE is required by FDA/BTA; must be true for food/perishable items coming 
 * to US or PR from non-US/non-PR origin 
 *
 *
 */
class RegulatoryControlType extends SimpleTypeAbstract
{
    const EU_CIRCULATION = 'EU_CIRCULATION';

    const FOOD_OR_PERISHABLE = 'FOOD_OR_PERISHABLE';

    const NAFTA = 'NAFTA';


}

