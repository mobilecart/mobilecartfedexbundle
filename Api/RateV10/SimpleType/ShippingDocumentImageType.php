<?php

namespace MobileCart\FedexBundle\Api\RateV10\SimpleType;

/**
 * Specifies the image format used for a shipping document. 
 *
 *
 */
class ShippingDocumentImageType extends SimpleTypeAbstract
{
    const DPL = 'DPL';

    const EPL2 = 'EPL2';

    const PDF = 'PDF';

    const PNG = 'PNG';

    const ZPLII = 'ZPLII';


}

