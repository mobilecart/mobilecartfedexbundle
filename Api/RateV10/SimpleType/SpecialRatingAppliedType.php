<?php

namespace MobileCart\FedexBundle\Api\RateV10\SimpleType;

/**
 * Indicates which special rating cases applied to this shipment. 
 *
 *
 */
class SpecialRatingAppliedType extends SimpleTypeAbstract
{
    const FIXED_FUEL_SURCHARGE = 'FIXED_FUEL_SURCHARGE';

    const IMPORT_PRICING = 'IMPORT_PRICING';


}

