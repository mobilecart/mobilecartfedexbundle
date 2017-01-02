<?php

namespace MobileCart\FedexBundle\Api\RateV10\ComplexType;

use MobileCart\FedexBundle\Api\RateV10\SimpleType;

/**
 * Data required to produce a custom-specified document, either at shipment or package level. 
 * 
 *
 *
 */
class CustomDocumentDetail extends ComplexTypeAbstract
{
    const CLASS_NAME = 'CustomDocumentDetail';

    /**
     * Common information controlling document production. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var ShippingDocumentFormat|null $Format
     */
    protected $Format;

    /**
     * Applicable only to documents produced on thermal printers with roll stock. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\LabelPrintingOrientationType|null $LabelPrintingOrientation
     */
    protected $LabelPrintingOrientation;

    /**
     * Applicable only to documents produced on thermal printers with roll stock. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\LabelRotationType|null $LabelRotation
     */
    protected $LabelRotation;

    /**
     * Identifies the formatting specification used to construct this custom document. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $SpecificationId
     */
    protected $SpecificationId;


    /**
     * @param ShippingDocumentFormat|null $format
     * @return CustomDocumentDetail
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
     * @param SimpleType\LabelPrintingOrientationType|null $labelPrintingOrientation
     * @return CustomDocumentDetail
     */
    public function setLabelPrintingOrientation(SimpleType\LabelPrintingOrientationType $labelPrintingOrientation = null)
    {
        $this->LabelPrintingOrientation = $labelPrintingOrientation;

        return $this;
    }

    /**
     * @return SimpleType\LabelPrintingOrientationType|null
     */
    public function getLabelPrintingOrientation()
    {
        return $this->LabelPrintingOrientation;
    }

    /**
     * @param SimpleType\LabelRotationType|null $labelRotation
     * @return CustomDocumentDetail
     */
    public function setLabelRotation(SimpleType\LabelRotationType $labelRotation = null)
    {
        $this->LabelRotation = $labelRotation;

        return $this;
    }

    /**
     * @return SimpleType\LabelRotationType|null
     */
    public function getLabelRotation()
    {
        return $this->LabelRotation;
    }

    /**
     * @param string|null $specificationId
     * @return CustomDocumentDetail
     */
    public function setSpecificationId($specificationId)
    {
        $this->SpecificationId = $specificationId;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getSpecificationId()
    {
        return $this->SpecificationId;
    }


}

