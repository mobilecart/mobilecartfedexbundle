<?php

namespace MobileCart\FedexBundle\Api\RateV10;

use RuntimeException;
use SoapFault;
use SoapClient as BaseSoapClient;

/**
 * Wrapper for \SoapClient 
 *
 */
class SoapClient extends BaseSoapClient
{
    public function __construct($wsdl, $options = array('exceptions' => 1))
    {
        $xdebugIsDisabled = false;
        try {
            if (function_exists('xdebug_is_enabled') && xdebug_is_enabled()) {
                xdebug_disable();
                $xdebugIsDisabled = true;
            }
            if (!isset($options['exceptions'])) {
                $options['exceptions'] = 1;
            }
            @parent::__construct($wsdl, $options);
            if ($xdebugIsDisabled) {
                xdebug_enable();
            }
        } catch (SoapFault $e) {
            if ($xdebugIsDisabled) {
                xdebug_enable();
            }

            throw new RuntimeException(sprintf('Failed initialize SoapClient. Error: "%s"', $e->getMessage()));
        }
    }
}

