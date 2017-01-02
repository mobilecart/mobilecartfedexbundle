<?php

namespace MobileCart\FedexBundle\Api\RateV10\SimpleType;

/**
 * Identifies the set of valid email notification recipient types. For SHIPPER, RECIPIENT and 
 * BROKER the email address asssociated with their definitions will be used, any email address 
 * sent with the email notification for these three email notification recipient types will 
 * be ignored. 
 *
 *
 */
class EMailNotificationRecipientType extends SimpleTypeAbstract
{
    const BROKER = 'BROKER';

    const OTHER = 'OTHER';

    const RECIPIENT = 'RECIPIENT';

    const SHIPPER = 'SHIPPER';


}

