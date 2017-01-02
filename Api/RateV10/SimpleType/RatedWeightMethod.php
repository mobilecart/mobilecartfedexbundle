<?php

namespace MobileCart\FedexBundle\Api\RateV10\SimpleType;

/**
 * The method used to calculate the weight to be used in rating the package.. 
 *
 *
 */
class RatedWeightMethod extends SimpleTypeAbstract
{
    const ACTUAL = 'ACTUAL';

    const AVERAGE_PACKAGE_WEIGHT_MINIMUM = 'AVERAGE_PACKAGE_WEIGHT_MINIMUM';

    const BALLOON = 'BALLOON';

    const DIM = 'DIM';

    const FREIGHT_MINIMUM = 'FREIGHT_MINIMUM';

    const MIXED = 'MIXED';

    const OVERSIZE = 'OVERSIZE';

    const OVERSIZE_1 = 'OVERSIZE_1';

    const OVERSIZE_2 = 'OVERSIZE_2';

    const OVERSIZE_3 = 'OVERSIZE_3';

    const PACKAGING_MINIMUM = 'PACKAGING_MINIMUM';

    const WEIGHT_BREAK = 'WEIGHT_BREAK';


}

