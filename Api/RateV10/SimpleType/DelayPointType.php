<?php

namespace MobileCart\FedexBundle\Api\RateV10\SimpleType;

/**
 * The point where the delay is occurring ( e.g. Origin, Destination, Broker location). 
 *
 *
 */
class DelayPointType extends SimpleTypeAbstract
{
    const BROKER = 'BROKER';

    const DESTINATION = 'DESTINATION';

    const ORIGIN = 'ORIGIN';

    const ORIGIN_DESTINATION_PAIR = 'ORIGIN_DESTINATION_PAIR';

    const PROOF_OF_DELIVERY_POINT = 'PROOF_OF_DELIVERY_POINT';


}

