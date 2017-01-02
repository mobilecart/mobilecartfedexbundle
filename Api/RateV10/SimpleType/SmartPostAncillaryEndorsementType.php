<?php

namespace MobileCart\FedexBundle\Api\RateV10\SimpleType;

/**
 * These values are mutually exclusive; at most one of them can be attached to a SmartPost 
 * shipment. 
 *
 *
 */
class SmartPostAncillaryEndorsementType extends SimpleTypeAbstract
{
    const ADDRESS_CORRECTION = 'ADDRESS_CORRECTION';

    const CARRIER_LEAVE_IF_NO_RESPONSE = 'CARRIER_LEAVE_IF_NO_RESPONSE';

    const CHANGE_SERVICE = 'CHANGE_SERVICE';

    const FORWARDING_SERVICE = 'FORWARDING_SERVICE';

    const RETURN_SERVICE = 'RETURN_SERVICE';


}

