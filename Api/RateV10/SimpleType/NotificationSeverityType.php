<?php

namespace MobileCart\FedexBundle\Api\RateV10\SimpleType;

/**
 * Identifies the set of severity values for a Notification. 
 *
 *
 */
class NotificationSeverityType extends SimpleTypeAbstract
{
    const ERROR = 'ERROR';

    const FAILURE = 'FAILURE';

    const NOTE = 'NOTE';

    const SUCCESS = 'SUCCESS';

    const WARNING = 'WARNING';


}

