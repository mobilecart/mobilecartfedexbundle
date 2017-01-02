<?php

namespace MobileCart\FedexBundle\Api\RateV10\SimpleType;

/**
 * Indicates the reason that a dim divisor value was chose. 
 *
 *
 */
class RateDimensionalDivisorType extends SimpleTypeAbstract
{
    const COUNTRY = 'COUNTRY';

    const CUSTOMER = 'CUSTOMER';

    const OTHER = 'OTHER';

    const PRODUCT = 'PRODUCT';

    const WAIVED = 'WAIVED';


}

