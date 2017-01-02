<?php

namespace MobileCart\FedexBundle\Api\RateV10\ComplexType;

use MobileCart\FedexBundle\Api\RateV10\SimpleType;

/**
 * Description of shipping label to be returned in the reply 
 *
 *
 */
class LabelSpecification extends ComplexTypeAbstract
{
    const CLASS_NAME = 'LabelSpecification';

    /**
     * Specify type of label to be returned 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\LabelFormatType|null $LabelFormatType
     */
    protected $LabelFormatType;

    /**
     * The type of image or printer commands the label is to be formatted in.
             
     *    DPL = Unimark thermal printer language
                EPL2 = Eltron thermal printer 
     * language
                PDF = a label returned as a pdf image
                PNG = 
     * a label returned as a png image
                ZPLII = Zebra thermal printer language 
     * 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\ShippingDocumentImageType|null $ImageType
     */
    protected $ImageType;

    /**
     * For thermal printer lables this indicates the size of the label and the location of 
     * the doc tab if present. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\LabelStockType|null $LabelStockType
     */
    protected $LabelStockType;

    /**
     * This indicates if the top or bottom of the label comes out of the printer first. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\LabelPrintingOrientationType|null $LabelPrintingOrientation
     */
    protected $LabelPrintingOrientation;

    /**
     * Relative to normal orientation for the printer. RIGHT=90 degrees clockwise, UPSIDE_DOWN=180 
     * degrees, LEFT=90 degrees counterclockwise. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\LabelRotationType|null $LabelRotation
     */
    protected $LabelRotation;

    /**
     * If present, this contact and address information will replace the return address information 
     * on the label. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var ContactAndAddress|null $PrintedLabelOrigin
     */
    protected $PrintedLabelOrigin;

    /**
     * Allows customer-specified control of label content. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var CustomerSpecifiedLabelDetail|null $CustomerSpecifiedDetail
     */
    protected $CustomerSpecifiedDetail;


    /**
     * @param SimpleType\LabelFormatType|null $labelFormatType
     * @return LabelSpecification
     */
    public function setLabelFormatType(SimpleType\LabelFormatType $labelFormatType = null)
    {
        $this->LabelFormatType = $labelFormatType;

        return $this;
    }

    /**
     * @return SimpleType\LabelFormatType|null
     */
    public function getLabelFormatType()
    {
        return $this->LabelFormatType;
    }

    /**
     * @param SimpleType\ShippingDocumentImageType|null $imageType
     * @return LabelSpecification
     */
    public function setImageType(SimpleType\ShippingDocumentImageType $imageType = null)
    {
        $this->ImageType = $imageType;

        return $this;
    }

    /**
     * @return SimpleType\ShippingDocumentImageType|null
     */
    public function getImageType()
    {
        return $this->ImageType;
    }

    /**
     * @param SimpleType\LabelStockType|null $labelStockType
     * @return LabelSpecification
     */
    public function setLabelStockType(SimpleType\LabelStockType $labelStockType = null)
    {
        $this->LabelStockType = $labelStockType;

        return $this;
    }

    /**
     * @return SimpleType\LabelStockType|null
     */
    public function getLabelStockType()
    {
        return $this->LabelStockType;
    }

    /**
     * @param SimpleType\LabelPrintingOrientationType|null $labelPrintingOrientation
     * @return LabelSpecification
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
     * @return LabelSpecification
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
     * @param ContactAndAddress|null $printedLabelOrigin
     * @return LabelSpecification
     */
    public function setPrintedLabelOrigin(ContactAndAddress $printedLabelOrigin = null)
    {
        $this->PrintedLabelOrigin = $printedLabelOrigin;

        return $this;
    }

    /**
     * @return ContactAndAddress|null
     */
    public function getPrintedLabelOrigin()
    {
        return $this->PrintedLabelOrigin;
    }

    /**
     * @param CustomerSpecifiedLabelDetail|null $customerSpecifiedDetail
     * @return LabelSpecification
     */
    public function setCustomerSpecifiedDetail(CustomerSpecifiedLabelDetail $customerSpecifiedDetail = null)
    {
        $this->CustomerSpecifiedDetail = $customerSpecifiedDetail;

        return $this;
    }

    /**
     * @return CustomerSpecifiedLabelDetail|null
     */
    public function getCustomerSpecifiedDetail()
    {
        return $this->CustomerSpecifiedDetail;
    }


}

