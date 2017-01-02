<?php

namespace MobileCart\FedexBundle\Api\RateV10\ComplexType;

use MobileCart\FedexBundle\Api\RateV10\SimpleType;

/**
 * The instructions indicating how to print the Certificate of Origin ( e.g. whether or not 
 * to include the instructions, image type, etc ...) 
 *
 *
 */
class CertificateOfOriginDetail extends ComplexTypeAbstract
{
    const CLASS_NAME = 'CertificateOfOriginDetail';

    /**
     * Specifies characteristics of a shipping document to be produced. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var ShippingDocumentFormat|null $DocumentFormat
     */
    protected $DocumentFormat;

    /**
     * Specifies the usage and identification of customer supplied images to be used on this 
     * document. 
     * minOccurs = 0
     * maxOccurs = unbounded
     *
     * @var CustomerImageUsage[] $CustomerImageUsages
     */
    protected $CustomerImageUsages = array();


    /**
     * @param ShippingDocumentFormat|null $documentFormat
     * @return CertificateOfOriginDetail
     */
    public function setDocumentFormat(ShippingDocumentFormat $documentFormat = null)
    {
        $this->DocumentFormat = $documentFormat;

        return $this;
    }

    /**
     * @return ShippingDocumentFormat|null
     */
    public function getDocumentFormat()
    {
        return $this->DocumentFormat;
    }

    /**
     * @param CustomerImageUsage[] $customerImageUsages
     * @return CertificateOfOriginDetail
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

