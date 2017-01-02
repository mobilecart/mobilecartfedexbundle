<?php

namespace MobileCart\FedexBundle\Api\RateV10\SimpleType;

/**
 * Specifice the kind of tax or miscellaneous charge being reported on a Commercial Invoice. 
 * 
 *
 *
 */
class TaxesOrMiscellaneousChargeType extends SimpleTypeAbstract
{
    const COMMISSIONS = 'COMMISSIONS';

    const DISCOUNTS = 'DISCOUNTS';

    const HANDLING_FEES = 'HANDLING_FEES';

    const OTHER = 'OTHER';

    const ROYALTIES_AND_LICENSE_FEES = 'ROYALTIES_AND_LICENSE_FEES';

    const TAXES = 'TAXES';


}

