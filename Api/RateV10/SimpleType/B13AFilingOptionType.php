<?php

namespace MobileCart\FedexBundle\Api\RateV10\SimpleType;

/**
 * Specifies which filing option is being exercised by the customer.
            Required for 
 * non-document shipments originating in Canada destined for any country other than Canada, 
 * the United States, Puerto Rico or the U.S. Virgin Islands. 
 *
 *
 */
class B13AFilingOptionType extends SimpleTypeAbstract
{
    const FILED_ELECTRONICALLY = 'FILED_ELECTRONICALLY';

    const MANUALLY_ATTACHED = 'MANUALLY_ATTACHED';

    const NOT_REQUIRED = 'NOT_REQUIRED';

    const SUMMARY_REPORTING = 'SUMMARY_REPORTING';


}

