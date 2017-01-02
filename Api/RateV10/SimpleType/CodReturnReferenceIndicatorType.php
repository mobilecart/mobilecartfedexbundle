<?php

namespace MobileCart\FedexBundle\Api\RateV10\SimpleType;

/**
 * Indicates which type of reference information to include on the COD return shipping label. 
 * 
 *
 *
 */
class CodReturnReferenceIndicatorType extends SimpleTypeAbstract
{
    const INVOICE = 'INVOICE';

    const PO = 'PO';

    const REFERENCE = 'REFERENCE';

    const TRACKING = 'TRACKING';


}

