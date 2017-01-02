<?php

namespace MobileCart\FedexBundle\Api\RateV10\ComplexType;

use MobileCart\FedexBundle\Api\RateV10\SimpleType;

/**
 *
 *
 */
class UploadDocumentDetail extends ComplexTypeAbstract
{
    const CLASS_NAME = 'UploadDocumentDetail';

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
     * @var string|null $FileName
     */
    protected $FileName;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $DocumentContent
     */
    protected $DocumentContent;


    /**
     * @param integer|null $lineNumber
     * @return UploadDocumentDetail
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
     * @return UploadDocumentDetail
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
     * @return UploadDocumentDetail
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
     * @return UploadDocumentDetail
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
     * @param string|null $fileName
     * @return UploadDocumentDetail
     */
    public function setFileName($fileName)
    {
        $this->FileName = $fileName;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getFileName()
    {
        return $this->FileName;
    }

    /**
     * @param string|null $documentContent
     * @return UploadDocumentDetail
     */
    public function setDocumentContent($documentContent)
    {
        $this->DocumentContent = $documentContent;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getDocumentContent()
    {
        return $this->DocumentContent;
    }


}

