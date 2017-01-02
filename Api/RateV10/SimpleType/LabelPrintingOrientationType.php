<?php

namespace MobileCart\FedexBundle\Api\RateV10\SimpleType;

/**
 * This indicates if the top or bottom of the label comes out of the printer first. 
 *
 *
 */
class LabelPrintingOrientationType extends SimpleTypeAbstract
{
    const BOTTOM_EDGE_OF_TEXT_FIRST = 'BOTTOM_EDGE_OF_TEXT_FIRST';

    const TOP_EDGE_OF_TEXT_FIRST = 'TOP_EDGE_OF_TEXT_FIRST';


}

