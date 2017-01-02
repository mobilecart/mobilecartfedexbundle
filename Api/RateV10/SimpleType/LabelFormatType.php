<?php

namespace MobileCart\FedexBundle\Api\RateV10\SimpleType;

/**
 * Specifies the type of label to be returned. 
 *
 *
 */
class LabelFormatType extends SimpleTypeAbstract
{
    const COMMON2D = 'COMMON2D';

    const LABEL_DATA_ONLY = 'LABEL_DATA_ONLY';

    const MAILROOM = 'MAILROOM';

    const NO_LABEL = 'NO_LABEL';

    const OPERATIONAL_LABEL = 'OPERATIONAL_LABEL';

    const PRE_COMMON2D = 'PRE_COMMON2D';


}

