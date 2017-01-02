<?php

namespace MobileCart\FedexBundle\Api\RateV10\ComplexType;

use MobileCart\FedexBundle\Api\RateV10\SimpleType;

/**
 * Data required to produce a Certificate of Origin document. Remaining content (business data) 
 * to be defined once requirements have been completed. 
 *
 *
 */
class NaftaCertificateOfOriginDetail extends ComplexTypeAbstract
{
    const CLASS_NAME = 'NaftaCertificateOfOriginDetail';

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var ShippingDocumentFormat|null $Format
     */
    protected $Format;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var DateRange|null $BlanketPeriod
     */
    protected $BlanketPeriod;

    /**
     * Indicates which Party (if any) from the shipment is to be used as the source of importer 
     * data on the NAFTA COO form. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\NaftaImporterSpecificationType|null $ImporterSpecification
     */
    protected $ImporterSpecification;

    /**
     * Contact information for "Authorized Signature" area of form. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var Contact|null $SignatureContact
     */
    protected $SignatureContact;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\NaftaProducerSpecificationType|null $ProducerSpecification
     */
    protected $ProducerSpecification;

    /**

     * minOccurs = 0
     * maxOccurs = unbounded
     *
     * @var NaftaProducer[] $Producers
     */
    protected $Producers = array();

    /**

     * minOccurs = 0
     * maxOccurs = unbounded
     *
     * @var CustomerImageUsage[] $CustomerImageUsages
     */
    protected $CustomerImageUsages = array();


    /**
     * @param ShippingDocumentFormat|null $format
     * @return NaftaCertificateOfOriginDetail
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
     * @param DateRange|null $blanketPeriod
     * @return NaftaCertificateOfOriginDetail
     */
    public function setBlanketPeriod(DateRange $blanketPeriod = null)
    {
        $this->BlanketPeriod = $blanketPeriod;

        return $this;
    }

    /**
     * @return DateRange|null
     */
    public function getBlanketPeriod()
    {
        return $this->BlanketPeriod;
    }

    /**
     * @param SimpleType\NaftaImporterSpecificationType|null $importerSpecification
     * @return NaftaCertificateOfOriginDetail
     */
    public function setImporterSpecification(SimpleType\NaftaImporterSpecificationType $importerSpecification = null)
    {
        $this->ImporterSpecification = $importerSpecification;

        return $this;
    }

    /**
     * @return SimpleType\NaftaImporterSpecificationType|null
     */
    public function getImporterSpecification()
    {
        return $this->ImporterSpecification;
    }

    /**
     * @param Contact|null $signatureContact
     * @return NaftaCertificateOfOriginDetail
     */
    public function setSignatureContact(Contact $signatureContact = null)
    {
        $this->SignatureContact = $signatureContact;

        return $this;
    }

    /**
     * @return Contact|null
     */
    public function getSignatureContact()
    {
        return $this->SignatureContact;
    }

    /**
     * @param SimpleType\NaftaProducerSpecificationType|null $producerSpecification
     * @return NaftaCertificateOfOriginDetail
     */
    public function setProducerSpecification(SimpleType\NaftaProducerSpecificationType $producerSpecification = null)
    {
        $this->ProducerSpecification = $producerSpecification;

        return $this;
    }

    /**
     * @return SimpleType\NaftaProducerSpecificationType|null
     */
    public function getProducerSpecification()
    {
        return $this->ProducerSpecification;
    }

    /**
     * @param NaftaProducer[] $producers
     * @return NaftaCertificateOfOriginDetail
     */
    public function setProducers(array $producers = array())
    {
        $this->Producers = $producers;

        return $this;
    }

    /**
     * @return NaftaProducer[]
     */
    public function getProducers()
    {
        return $this->Producers;
    }

    /**
     * @param CustomerImageUsage[] $customerImageUsages
     * @return NaftaCertificateOfOriginDetail
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

