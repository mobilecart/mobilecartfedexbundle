<?php

namespace MobileCart\FedexBundle\Api\RateV10\SimpleType;

/**
 * Specifies how to organize all shipping documents of the same type. 
 *
 *
 */
class ShippingDocumentGroupingType extends SimpleTypeAbstract
{
    const CONSOLIDATED_BY_DOCUMENT_TYPE = 'CONSOLIDATED_BY_DOCUMENT_TYPE';

    const INDIVIDUAL = 'INDIVIDUAL';


}

