<?php

namespace MobileCart\FedexBundle\Api\RateV10\SimpleType;

/**
 * These values are used to control the availability of certain special services at the time 
 * when a customer uses the e-mail label link to create a return shipment. 
 *
 *
 */
class ReturnEMailAllowedSpecialServiceType extends SimpleTypeAbstract
{
    const SATURDAY_DELIVERY = 'SATURDAY_DELIVERY';

    const SATURDAY_PICKUP = 'SATURDAY_PICKUP';


}

