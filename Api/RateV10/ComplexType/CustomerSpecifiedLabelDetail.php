<?php

namespace MobileCart\FedexBundle\Api\RateV10\ComplexType;

use MobileCart\FedexBundle\Api\RateV10\SimpleType;

/**
 * Allows customer-specified control of label content. 
 *
 *
 */
class CustomerSpecifiedLabelDetail extends ComplexTypeAbstract
{
    const CLASS_NAME = 'CustomerSpecifiedLabelDetail';

    /**
     * If omitted, no doc tab will be produced (i.e. default = former NONE type). 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var DocTabContent|null $DocTabContent
     */
    protected $DocTabContent;

    /**
     * Defines any custom content to print on the label. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var CustomLabelDetail|null $CustomContent
     */
    protected $CustomContent;

    /**
     * Defines additional data to print in the Configurable portion of the label, this allows 
     * you to print the same type information on the label that can also be printed on the 
     * doc tab. 
     * minOccurs = 0
     * maxOccurs = unbounded
     *
     * @var ConfigurableLabelReferenceEntry[] $ConfigurableReferenceEntries
     */
    protected $ConfigurableReferenceEntries = array();

    /**
     * Controls which data/sections will be suppressed. 
     * minOccurs = 0
     * maxOccurs = unbounded
     *
     * @var SimpleType\LabelMaskableDataType[] $MaskedData
     */
    protected $MaskedData = array();

    /**
     * For customers producing their own Ground labels, this field specifies which secondary 
     * barcode will be printed on the label; so that the primary barcode produced by FedEx 
     * has the corect SCNC. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\SecondaryBarcodeType|null $SecondaryBarcode
     */
    protected $SecondaryBarcode;

    /**
     * The language to use when printing the terms and conditions on the label. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var Localization|null $TermsAndConditionsLocalization
     */
    protected $TermsAndConditionsLocalization;

    /**
     * Controls the number of additional copies of supplemental labels. 
     * minOccurs = 0
     * maxOccurs = unbounded
     *
     * @var AdditionalLabelsDetail[] $AdditionalLabels
     */
    protected $AdditionalLabels = array();

    /**
     * This value reduces the default quantity of destination/consignee air waybill labels. 
     * A value of zero indicates no change to default. A minimum of one copy will always be 
     * produced. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var integer|null $AirWaybillSuppressionCount
     */
    protected $AirWaybillSuppressionCount;


    /**
     * @param DocTabContent|null $docTabContent
     * @return CustomerSpecifiedLabelDetail
     */
    public function setDocTabContent(DocTabContent $docTabContent = null)
    {
        $this->DocTabContent = $docTabContent;

        return $this;
    }

    /**
     * @return DocTabContent|null
     */
    public function getDocTabContent()
    {
        return $this->DocTabContent;
    }

    /**
     * @param CustomLabelDetail|null $customContent
     * @return CustomerSpecifiedLabelDetail
     */
    public function setCustomContent(CustomLabelDetail $customContent = null)
    {
        $this->CustomContent = $customContent;

        return $this;
    }

    /**
     * @return CustomLabelDetail|null
     */
    public function getCustomContent()
    {
        return $this->CustomContent;
    }

    /**
     * @param ConfigurableLabelReferenceEntry[] $configurableReferenceEntries
     * @return CustomerSpecifiedLabelDetail
     */
    public function setConfigurableReferenceEntries(array $configurableReferenceEntries = array())
    {
        $this->ConfigurableReferenceEntries = $configurableReferenceEntries;

        return $this;
    }

    /**
     * @return ConfigurableLabelReferenceEntry[]
     */
    public function getConfigurableReferenceEntries()
    {
        return $this->ConfigurableReferenceEntries;
    }

    /**
     * @param SimpleType\LabelMaskableDataType[] $maskedData
     * @return CustomerSpecifiedLabelDetail
     */
    public function setMaskedData(array $maskedData = array())
    {
        $this->MaskedData = $maskedData;

        return $this;
    }

    /**
     * @return SimpleType\LabelMaskableDataType[]
     */
    public function getMaskedData()
    {
        return $this->MaskedData;
    }

    /**
     * @param SimpleType\SecondaryBarcodeType|null $secondaryBarcode
     * @return CustomerSpecifiedLabelDetail
     */
    public function setSecondaryBarcode(SimpleType\SecondaryBarcodeType $secondaryBarcode = null)
    {
        $this->SecondaryBarcode = $secondaryBarcode;

        return $this;
    }

    /**
     * @return SimpleType\SecondaryBarcodeType|null
     */
    public function getSecondaryBarcode()
    {
        return $this->SecondaryBarcode;
    }

    /**
     * @param Localization|null $termsAndConditionsLocalization
     * @return CustomerSpecifiedLabelDetail
     */
    public function setTermsAndConditionsLocalization(Localization $termsAndConditionsLocalization = null)
    {
        $this->TermsAndConditionsLocalization = $termsAndConditionsLocalization;

        return $this;
    }

    /**
     * @return Localization|null
     */
    public function getTermsAndConditionsLocalization()
    {
        return $this->TermsAndConditionsLocalization;
    }

    /**
     * @param AdditionalLabelsDetail[] $additionalLabels
     * @return CustomerSpecifiedLabelDetail
     */
    public function setAdditionalLabels(array $additionalLabels = array())
    {
        $this->AdditionalLabels = $additionalLabels;

        return $this;
    }

    /**
     * @return AdditionalLabelsDetail[]
     */
    public function getAdditionalLabels()
    {
        return $this->AdditionalLabels;
    }

    /**
     * @param integer|null $airWaybillSuppressionCount
     * @return CustomerSpecifiedLabelDetail
     */
    public function setAirWaybillSuppressionCount($airWaybillSuppressionCount)
    {
        $this->AirWaybillSuppressionCount = $airWaybillSuppressionCount;

        return $this;
    }

    /**
     * @return integer|null
     */
    public function getAirWaybillSuppressionCount()
    {
        return $this->AirWaybillSuppressionCount;
    }


}

