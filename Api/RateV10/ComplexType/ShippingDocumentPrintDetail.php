<?php

namespace MobileCart\FedexBundle\Api\RateV10\ComplexType;

use MobileCart\FedexBundle\Api\RateV10\SimpleType;

/**
 * Specifies printing options for a shipping document. 
 *
 *
 */
class ShippingDocumentPrintDetail extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ShippingDocumentPrintDetail';

    /**
     * Provides environment-specific printer identification. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $PrinterId
     */
    protected $PrinterId;


    /**
     * @param string|null $printerId
     * @return ShippingDocumentPrintDetail
     */
    public function setPrinterId($printerId)
    {
        $this->PrinterId = $printerId;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getPrinterId()
    {
        return $this->PrinterId;
    }


}

