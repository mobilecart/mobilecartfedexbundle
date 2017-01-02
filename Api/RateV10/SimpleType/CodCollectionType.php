<?php

namespace MobileCart\FedexBundle\Api\RateV10\SimpleType;

/**
 * Identifies the type of funds FedEx should collect upon shipment delivery. 
 *
 *
 */
class CodCollectionType extends SimpleTypeAbstract
{
    const ANY = 'ANY';

    const CASH = 'CASH';

    const GUARANTEED_FUNDS = 'GUARANTEED_FUNDS';


}

