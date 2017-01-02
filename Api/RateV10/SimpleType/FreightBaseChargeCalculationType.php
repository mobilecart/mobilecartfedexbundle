<?php

namespace MobileCart\FedexBundle\Api\RateV10\SimpleType;

/**
 * Specifies the way in which base charges for a Freight shipment or shipment leg are calculated. 
 * 
 *
 *
 */
class FreightBaseChargeCalculationType extends SimpleTypeAbstract
{
    const LINE_ITEMS = 'LINE_ITEMS';

    const UNIT_PRICING = 'UNIT_PRICING';


}

