<?php

namespace MobileCart\FedexBundle\Api\RateV10\SimpleType;

/**
 * Specifies the type of service scheduling offered from a Freight or National Freight Service 
 * Center to a customer-supplied address. 
 *
 *
 */
class FreightServiceSchedulingType extends SimpleTypeAbstract
{
    const LIMITED = 'LIMITED';

    const STANDARD = 'STANDARD';

    const WILL_CALL = 'WILL_CALL';


}

