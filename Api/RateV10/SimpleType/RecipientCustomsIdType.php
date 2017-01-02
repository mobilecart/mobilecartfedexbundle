<?php

namespace MobileCart\FedexBundle\Api\RateV10\SimpleType;

/**
 * Type of Brazilian taxpayer identifier provided in Recipient/TaxPayerIdentification/Number. 
 * For shipments bound for Brazil this overrides the value in Recipient/TaxPayerIdentification/TinType 
 * 
 *
 *
 */
class RecipientCustomsIdType extends SimpleTypeAbstract
{
    const COMPANY = 'COMPANY';

    const INDIVIDUAL = 'INDIVIDUAL';

    const PASSPORT = 'PASSPORT';


}

