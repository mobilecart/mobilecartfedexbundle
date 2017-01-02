<?php

namespace MobileCart\FedexBundle\Api\RateV10\SimpleType;

/**
 * Identifies the type of additional labels. 
 *
 *
 */
class AdditionalLabelsType extends SimpleTypeAbstract
{
    const BROKER = 'BROKER';

    const CONSIGNEE = 'CONSIGNEE';

    const CUSTOMS = 'CUSTOMS';

    const DESTINATION = 'DESTINATION';

    const MANIFEST = 'MANIFEST';

    const ORIGIN = 'ORIGIN';

    const RECIPIENT = 'RECIPIENT';

    const SHIPPER = 'SHIPPER';


}

