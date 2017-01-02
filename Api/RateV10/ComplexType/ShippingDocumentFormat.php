<?php

namespace MobileCart\FedexBundle\Api\RateV10\ComplexType;

use MobileCart\FedexBundle\Api\RateV10\SimpleType;

/**
 * Specifies characteristics of a shipping document to be produced. 
 *
 *
 */
class ShippingDocumentFormat extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ShippingDocumentFormat';

    /**
     * Specifies how to create, organize, and return the document. 
     * minOccurs = 0
     * maxOccurs = unbounded
     *
     * @var ShippingDocumentDispositionDetail[] $Dispositions
     */
    protected $Dispositions = array();

    /**
     * Specifies how far down the page to move the beginning of the image; allows for printing 
     * on letterhead and other pre-printed stock. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var LinearMeasure|null $TopOfPageOffset
     */
    protected $TopOfPageOffset;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\ShippingDocumentImageType|null $ImageType
     */
    protected $ImageType;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\ShippingDocumentStockType|null $StockType
     */
    protected $StockType;

    /**
     * For those shipping document types which have both a "form" and "instructions" component 
     * (e.g. NAFTA Certificate of Origin and General Agency Agreement), this field indicates 
     * whether to provide the instructions. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var boolean|null $ProvideInstructions
     */
    protected $ProvideInstructions;

    /**
     * Governs the language to be used for this individual document, independently from other 
     * content returned for the same shipment. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var Localization|null $Localization
     */
    protected $Localization;


    /**
     * @param ShippingDocumentDispositionDetail[] $dispositions
     * @return ShippingDocumentFormat
     */
    public function setDispositions(array $dispositions = array())
    {
        $this->Dispositions = $dispositions;

        return $this;
    }

    /**
     * @return ShippingDocumentDispositionDetail[]
     */
    public function getDispositions()
    {
        return $this->Dispositions;
    }

    /**
     * @param LinearMeasure|null $topOfPageOffset
     * @return ShippingDocumentFormat
     */
    public function setTopOfPageOffset(LinearMeasure $topOfPageOffset = null)
    {
        $this->TopOfPageOffset = $topOfPageOffset;

        return $this;
    }

    /**
     * @return LinearMeasure|null
     */
    public function getTopOfPageOffset()
    {
        return $this->TopOfPageOffset;
    }

    /**
     * @param SimpleType\ShippingDocumentImageType|null $imageType
     * @return ShippingDocumentFormat
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
     * @param SimpleType\ShippingDocumentStockType|null $stockType
     * @return ShippingDocumentFormat
     */
    public function setStockType(SimpleType\ShippingDocumentStockType $stockType = null)
    {
        $this->StockType = $stockType;

        return $this;
    }

    /**
     * @return SimpleType\ShippingDocumentStockType|null
     */
    public function getStockType()
    {
        return $this->StockType;
    }

    /**
     * @param boolean|null $provideInstructions
     * @return ShippingDocumentFormat
     */
    public function setProvideInstructions($provideInstructions)
    {
        $this->ProvideInstructions = $provideInstructions;

        return $this;
    }

    /**
     * @return boolean|null
     */
    public function getProvideInstructions()
    {
        return $this->ProvideInstructions;
    }

    /**
     * @param Localization|null $localization
     * @return ShippingDocumentFormat
     */
    public function setLocalization(Localization $localization = null)
    {
        $this->Localization = $localization;

        return $this;
    }

    /**
     * @return Localization|null
     */
    public function getLocalization()
    {
        return $this->Localization;
    }


}

