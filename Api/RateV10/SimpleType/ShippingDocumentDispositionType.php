<?php

namespace MobileCart\FedexBundle\Api\RateV10\SimpleType;

/**
 * Specifies how to return a shipping document to the caller. 
 *
 *
 */
class ShippingDocumentDispositionType extends SimpleTypeAbstract
{
    const CONFIRMED = 'CONFIRMED';

    const DEFERRED_RETURNED = 'DEFERRED_RETURNED';

    const DEFERRED_STORED = 'DEFERRED_STORED';

    const EMAILED = 'EMAILED';

    const QUEUED = 'QUEUED';

    const RETURNED = 'RETURNED';

    const STORED = 'STORED';


}

