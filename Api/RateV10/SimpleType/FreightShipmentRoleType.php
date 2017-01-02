<?php

namespace MobileCart\FedexBundle\Api\RateV10\SimpleType;

/**
 * Indicates the role of the party submitting the transaction. 
 *
 *
 */
class FreightShipmentRoleType extends SimpleTypeAbstract
{
    const CONSIGNEE = 'CONSIGNEE';

    const SHIPPER = 'SHIPPER';

    const THIRD_PARTY = 'THIRD_PARTY';


}

