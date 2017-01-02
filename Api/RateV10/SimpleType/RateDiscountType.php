<?php

namespace MobileCart\FedexBundle\Api\RateV10\SimpleType;

/**
 * Identifies the type of discount applied to the shipment. 
 *
 *
 */
class RateDiscountType extends SimpleTypeAbstract
{
    const BONUS = 'BONUS';

    const COUPON = 'COUPON';

    const EARNED = 'EARNED';

    const OTHER = 'OTHER';

    const VOLUME = 'VOLUME';


}

