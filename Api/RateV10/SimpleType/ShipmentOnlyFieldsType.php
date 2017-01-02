<?php

namespace MobileCart\FedexBundle\Api\RateV10\SimpleType;

/**
 * These values identify which package-level data values will be provided at the shipment-level. 
 * 
 *
 *
 */
class ShipmentOnlyFieldsType extends SimpleTypeAbstract
{
    const DIMENSIONS = 'DIMENSIONS';

    const INSURED_VALUE = 'INSURED_VALUE';

    const WEIGHT = 'WEIGHT';


}

