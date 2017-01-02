<?php

namespace MobileCart\FedexBundle\Api\RateV10\SimpleType;

/**
 * Selects the value from a set of rate data to which the percentage is applied. 
 *
 *
 */
class RateElementBasisType extends SimpleTypeAbstract
{
    const BASE_CHARGE = 'BASE_CHARGE';

    const NET_CHARGE = 'NET_CHARGE';

    const NET_CHARGE_EXCLUDING_TAXES = 'NET_CHARGE_EXCLUDING_TAXES';

    const NET_FREIGHT = 'NET_FREIGHT';


}

