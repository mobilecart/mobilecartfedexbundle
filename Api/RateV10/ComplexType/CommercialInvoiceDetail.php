<?php

namespace MobileCart\FedexBundle\Api\RateV10\ComplexType;

use MobileCart\FedexBundle\Api\RateV10\SimpleType;

/**
 * The instructions indicating how to print the Commercial Invoice( e.g. image type) Specifies 
 * characteristics of a shipping document to be produced. 
 *
 *
 */
class CommercialInvoiceDetail extends ComplexTypeAbstract
{
    const CLASS_NAME = 'CommercialInvoiceDetail';

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var ShippingDocumentFormat|null $Format
     */
    protected $Format;

    /**
     * Specifies the usage and identification of a customer supplied image to be used on this 
     * document. 
     * minOccurs = 0
     * maxOccurs = unbounded
     *
     * @var CustomerImageUsage[] $CustomerImageUsages
     */
    protected $CustomerImageUsages = array();


    /**
     * @param ShippingDocumentFormat|null $format
     * @return CommercialInvoiceDetail
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

    /**
     * @param CustomerImageUsage[] $customerImageUsages
     * @return CommercialInvoiceDetail
     */
    public function setCustomerImageUsages(array $customerImageUsages = array())
    {
        $this->CustomerImageUsages = $customerImageUsages;

        return $this;
    }

    /**
     * @return CustomerImageUsage[]
     */
    public function getCustomerImageUsages()
    {
        return $this->CustomerImageUsages;
    }


}

