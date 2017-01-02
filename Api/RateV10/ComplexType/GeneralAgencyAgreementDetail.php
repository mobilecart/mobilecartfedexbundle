<?php

namespace MobileCart\FedexBundle\Api\RateV10\ComplexType;

use MobileCart\FedexBundle\Api\RateV10\SimpleType;

/**
 * Data required to produce a General Agency Agreement document. Remaining content (business 
 * data) to be defined once requirements have been completed. 
 *
 *
 */
class GeneralAgencyAgreementDetail extends ComplexTypeAbstract
{
    const CLASS_NAME = 'GeneralAgencyAgreementDetail';

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var ShippingDocumentFormat|null $Format
     */
    protected $Format;


    /**
     * @param ShippingDocumentFormat|null $format
     * @return GeneralAgencyAgreementDetail
     */
    public function setFormat(ShippingDocumentFormat $format = null)
    {
        $this->Format = $format;

        return $this;
    }

    /**
     * @return ShippingDocumentFormat|null
     */
    public function getFormat()
    {
        return $this->Format;
    }


}

