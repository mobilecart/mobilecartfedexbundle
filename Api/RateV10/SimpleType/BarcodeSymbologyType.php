<?php

namespace MobileCart\FedexBundle\Api\RateV10\SimpleType;

/**
 * Identification of the type of barcode (symbology) used on FedEx documents and labels. 
 *
 *
 */
class BarcodeSymbologyType extends SimpleTypeAbstract
{
    const CODABAR = 'CODABAR';

    const CODE128 = 'CODE128';

    const CODE128B = 'CODE128B';

    const CODE128C = 'CODE128C';

    const CODE39 = 'CODE39';

    const CODE93 = 'CODE93';

    const I2OF5 = 'I2OF5';

    const MANUAL = 'MANUAL';

    const PDF417 = 'PDF417';

    const POSTNET = 'POSTNET';

    const UCC128 = 'UCC128';


}

