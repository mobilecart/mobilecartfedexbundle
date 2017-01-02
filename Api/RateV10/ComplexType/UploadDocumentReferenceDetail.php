<?php

namespace MobileCart\FedexBundle\Api\RateV10\ComplexType;

use MobileCart\FedexBundle\Api\RateV10\SimpleType;

/**
 *
 *
 */
class UploadDocumentReferenceDetail extends ComplexTypeAbstract
{
    const CLASS_NAME = 'UploadDocumentReferenceDetail';

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var integer|null $LineNumber
     */
    protected $LineNumber;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $CustomerReference
     */
    protected $CustomerReference;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\UploadDocumentProducerType|null $DocumentProducer
     */
    protected $DocumentProducer;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\UploadDocumentType|null $DocumentType
     */
    protected $DocumentType;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $DocumentId
     */
    protected $DocumentId;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\UploadDocumentIdProducer|null $DocumentIdProducer
     */
    protected $DocumentIdProducer;


    /**
     * @param integer|null $lineNumber
     * @return UploadDocumentReferenceDetail
     */
    public function setLineNumber($lineNumber)
    {
        $this->LineNumber = $lineNumber;

        return $this;
    }

    /**
     * @return integer|null
     */
    public function getLineNumber()
    {
        return $this->LineNumber;
    }

    /**
     * @param string|null $customerReference
     * @return UploadDocumentReferenceDetail
     */
    public function setCustomerReference($customerReference)
    {
        $this->CustomerReference = $customerReference;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getCustomerReference()
    {
        return $this->CustomerReference;
    }

    /**
     * @param SimpleType\UploadDocumentProducerType|null $documentProducer
     * @return UploadDocumentReferenceDetail
     */
    public function setDocumentProducer(SimpleType\UploadDocumentProducerType $documentProducer = null)
    {
        $this->DocumentProducer = $documentProducer;

        return $this;
    }

    /**
     * @return SimpleType\UploadDocumentProducerType|null
     */
    public function getDocumentProducer()
    {
        return $this->DocumentProducer;
    }

    /**
     * @param SimpleType\UploadDocumentType|null $documentType
     * @return UploadDocumentReferenceDetail
     */
    public function setDocumentType(SimpleType\UploadDocumentType $documentType = null)
    {
        $this->DocumentType = $documentType;

        return $this;
    }

    /**
     * @return SimpleType\UploadDocumentType|null
     */
    public function getDocumentType()
    {
        return $this->DocumentType;
    }

    /**
     * @param string|null $documentId
     * @return UploadDocumentReferenceDetail
     */
    public function setDocumentId($documentId)
    {
        $this->DocumentId = $documentId;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getDocumentId()
    {
        return $this->DocumentId;
    }

    /**
     * @param SimpleType\UploadDocumentIdProducer|null $documentIdProducer
     * @return UploadDocumentReferenceDetail
     */
    public function setDocumentIdProducer(SimpleType\UploadDocumentIdProducer $documentIdProducer = null)
    {
        $this->DocumentIdProducer = $documentIdProducer;

        return $this;
    }

    /**
     * @return SimpleType\UploadDocumentIdProducer|null
     */
    public function getDocumentIdProducer()
    {
        return $this->DocumentIdProducer;
    }


}

