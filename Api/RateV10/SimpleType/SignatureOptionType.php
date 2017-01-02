<?php

namespace MobileCart\FedexBundle\Api\RateV10\SimpleType;

/**
 * Identifies the delivery signature services options offered by FedEx. 
 *
 *
 */
class SignatureOptionType extends SimpleTypeAbstract
{
    const ADULT = 'ADULT';

    const DIRECT = 'DIRECT';

    const INDIRECT = 'INDIRECT';

    const NO_SIGNATURE_REQUIRED = 'NO_SIGNATURE_REQUIRED';

    const SERVICE_DEFAULT = 'SERVICE_DEFAULT';


}

