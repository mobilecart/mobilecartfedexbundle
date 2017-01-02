<?php

namespace MobileCart\FedexBundle\Api\RateV10\ComplexType;

use MobileCart\FedexBundle\Api\RateV10\SimpleType;

/**
 * Electronic Trade document references used with the ETD special service. 
 *
 *
 */
class EtdDetail extends ComplexTypeAbstract
{
    const CLASS_NAME = 'EtdDetail';

    /**
     * Indicates the types of shipping documents produced for the shipper by FedEx (see ShippingDocumentSpecification) 
     * which should be copied back to the shipper in the shipment result data. 
     * minOccurs = 0
     * maxOccurs = unbounded
     *
     * @var SimpleType\RequestedShippingDocumentType[] $RequestedDocumentCopies
     */
    protected $RequestedDocumentCopies = array();

    /**
     * Currently not supported. 
     * minOccurs = 0
     * maxOccurs = unbounded
     *
     * @var UploadDocumentDetail[] $Documents
     */
    protected $Documents = array();

    /**

     * minOccurs = 0
     * maxOccurs = unbounded
     *
     * @var UploadDocumentReferenceDetail[] $DocumentReferences
     */
    protected $DocumentReferences = array();


    /**
     * @param SimpleType\RequestedShippingDocumentType[] $requestedDocumentCopies
     * @return EtdDetail
     */
    public function setRequestedDocumentCopies(array $requestedDocumentCopies = array())
    {
        $this->RequestedDocumentCopies = $requestedDocumentCopies;

        return $this;
    }

    /**
     * @return SimpleType\RequestedShippingDocumentType[]
     */
    public function getRequestedDocumentCopies()
    {
        return $this->RequestedDocumentCopies;
    }

    /**
     * @param UploadDocumentDetail[] $documents
     * @return EtdDetail
     */
    public function setDocuments(array $documents = array())
    {
        $this->Documents = $documents;

        return $this;
    }

    /**
     * @return UploadDocumentDetail[]
     */
    public function getDocuments()
    {
        return $this->Documents;
    }

    /**
     * @param UploadDocumentReferenceDetail[] $documentReferences
     * @return EtdDetail
     */
    public function setDocumentReferences(array $documentReferences = array())
    {
        $this->DocumentReferences = $documentReferences;

        return $this;
    }

    /**
     * @return UploadDocumentReferenceDetail[]
     */
    public function getDocumentReferences()
    {
        return $this->DocumentReferences;
    }


}

