<?php

namespace MobileCart\FedexBundle\Api\RateV10\SimpleType;

/**
 * Identifies whether or not the products being shipped are required to be accessible during 
 * delivery. 
 *
 *
 */
class DangerousGoodsAccessibilityType extends SimpleTypeAbstract
{
    const ACCESSIBLE = 'ACCESSIBLE';

    const INACCESSIBLE = 'INACCESSIBLE';


}

