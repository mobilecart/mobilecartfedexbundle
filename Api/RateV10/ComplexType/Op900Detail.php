<?php

namespace MobileCart\FedexBundle\Api\RateV10\ComplexType;

use MobileCart\FedexBundle\Api\RateV10\SimpleType;

/**
 * The instructions indicating how to print the OP-900 form for hazardous materials packages. 
 * 
 *
 *
 */
class Op900Detail extends ComplexTypeAbstract
{
    const CLASS_NAME = 'Op900Detail';

    /**
     * Specifies characteristics of a shipping document to be produced. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var ShippingDocumentFormat|null $Format
     */
    protected $Format;

    /**
     * Identifies which reference type (from the package's customer references) is to be used 
     * as the source for the reference on this OP-900. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\CustomerReferenceType|null $Reference
     */
    protected $Reference;

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
     * Data field to be used when a name is to be printed in the document instead of (or in 
     * addition to) a signature image. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $SignatureName
     */
    protected $SignatureName;


    /**
     * @param ShippingDocumentFormat|null $format
     * @return Op900Detail
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
     * @param SimpleType\CustomerReferenceType|null $reference
     * @return Op900Detail
     */
    public function setReference(SimpleType\CustomerReferenceType $reference = null)
    {
        $this->Reference = $reference;

        return $this;
    }

    /**
     * @return SimpleType\CustomerReferenceType|null
     */
    public function getReference()
    {
        return $this->Reference;
    }

    /**
     * @param CustomerImageUsage[] $customerImageUsages
     * @return Op900Detail
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

    /**
     * @param string|null $signatureName
     * @return Op900Detail
     */
    public function setSignatureName($signatureName)
    {
        $this->SignatureName = $signatureName;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getSignatureName()
    {
        return $this->SignatureName;
    }


}

