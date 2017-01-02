<?php

namespace MobileCart\FedexBundle\Api\RateV10\ComplexType;

use MobileCart\FedexBundle\Api\RateV10\SimpleType;

/**
 *
 *
 */
class CustomsClearanceDetail extends ComplexTypeAbstract
{
    const CLASS_NAME = 'CustomsClearanceDetail';

    /**
     * Descriptive data identifying the Broker responsible for the shipmet.
               
     *  Required if BROKER_SELECT_OPTION is requested in Special Services. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var Party|null $Broker
     */
    protected $Broker;

    /**
     * Interacts both with properties of the shipment and contractual relationship with the 
     * shipper. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\ClearanceBrokerageType|null $ClearanceBrokerage
     */
    protected $ClearanceBrokerage;

    /**
     * Applicable only for Commercial Invoice. If the consignee and importer are not the same, 
     * the Following importer fields are required.
                Importer/Contact/PersonName
 
     *                Importer/Contact/CompanyName
                Importer/Contact/PhoneNumber
 
     *                Importer/Address/StreetLine[0]
                Importer/Address/City
 
     *                Importer/Address/StateOrProvinceCode - if Importer Country Code is US 
     * or CA
                Importer/Address/PostalCode - if Importer Country Code is US or 
     * CA
                Importer/Address/CountryCode 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var Party|null $ImporterOfRecord
     */
    protected $ImporterOfRecord;

    /**
     * Specifies how the recipient is identified for customs purposes; the requirements on 
     * this information vary with destination country. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var RecipientCustomsId|null $RecipientCustomsId
     */
    protected $RecipientCustomsId;

    /**
     * Indicates how payment of duties for the shipment will be made. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var Payment|null $DutiesPayment
     */
    protected $DutiesPayment;

    /**
     * Indicates whether this shipment contains documents only or non-documents. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\InternationalDocumentContentType|null $DocumentContent
     */
    protected $DocumentContent;

    /**
     * The total customs value for the shipment. This total will rrepresent th esum of the 
     * values of all commodities, and may include freight, miscellaneous, and insurance charges. 
     * Must contain 2 explicit decimal positions with a max length of 17 including the decimal. 
     * For Express International MPS, the Total Customs Value is in the master transaction 
     * and all child transactions 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var Money|null $CustomsValue
     */
    protected $CustomsValue;

    /**
     * Identifies responsibilities with respect to loss, damage, etc. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\FreightOnValueType|null $FreightOnValue
     */
    protected $FreightOnValue;

    /**
     * Documents amount paid to third party for coverage of shipment content. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var Money|null $InsuranceCharges
     */
    protected $InsuranceCharges;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var boolean|null $PartiesToTransactionAreRelated
     */
    protected $PartiesToTransactionAreRelated;

    /**
     * CommercialInvoice element is required for electronic upload of CI data. It will serve 
     * to create/transmit an Electronic Commercial Invoice through FedEx System. Customers 
     * are responsible for printing their own Commercial Invoice. Commercial Invoice support 
     * consists of a maximum of 20 commodity line items. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var CommercialInvoice|null $CommercialInvoice
     */
    protected $CommercialInvoice;

    /**
     * For international multiple piece shipments, commodity information must be passed in 
     * the Master and on each child transaction.
                If this shipment cotains more 
     * than four commodities line items, the four highest valued should be included in the 
     * first 4 occurances for this request. 
     * minOccurs = 0
     * maxOccurs = 99
     *
     * @var Commodity[] $Commodities
     */
    protected $Commodities = array();

    /**
     * Country specific details of an International shipment. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var ExportDetail|null $ExportDetail
     */
    protected $ExportDetail;

    /**
     * FOOD_OR_PERISHABLE is required by FDA/BTA; must be true for food/perishable items coming 
     * to US or PR from non-US/non-PR origin. 
     * minOccurs = 0
     * maxOccurs = unbounded
     *
     * @var SimpleType\RegulatoryControlType[] $RegulatoryControls
     */
    protected $RegulatoryControls = array();


    /**
     * @param Party|null $broker
     * @return CustomsClearanceDetail
     */
    public function setBroker(Party $broker = null)
    {
        $this->Broker = $broker;

        return $this;
    }

    /**
     * @return Party|null
     */
    public function getBroker()
    {
        return $this->Broker;
    }

    /**
     * @param SimpleType\ClearanceBrokerageType|null $clearanceBrokerage
     * @return CustomsClearanceDetail
     */
    public function setClearanceBrokerage(SimpleType\ClearanceBrokerageType $clearanceBrokerage = null)
    {
        $this->ClearanceBrokerage = $clearanceBrokerage;

        return $this;
    }

    /**
     * @return SimpleType\ClearanceBrokerageType|null
     */
    public function getClearanceBrokerage()
    {
        return $this->ClearanceBrokerage;
    }

    /**
     * @param Party|null $importerOfRecord
     * @return CustomsClearanceDetail
     */
    public function setImporterOfRecord(Party $importerOfRecord = null)
    {
        $this->ImporterOfRecord = $importerOfRecord;

        return $this;
    }

    /**
     * @return Party|null
     */
    public function getImporterOfRecord()
    {
        return $this->ImporterOfRecord;
    }

    /**
     * @param RecipientCustomsId|null $recipientCustomsId
     * @return CustomsClearanceDetail
     */
    public function setRecipientCustomsId(RecipientCustomsId $recipientCustomsId = null)
    {
        $this->RecipientCustomsId = $recipientCustomsId;

        return $this;
    }

    /**
     * @return RecipientCustomsId|null
     */
    public function getRecipientCustomsId()
    {
        return $this->RecipientCustomsId;
    }

    /**
     * @param Payment|null $dutiesPayment
     * @return CustomsClearanceDetail
     */
    public function setDutiesPayment(Payment $dutiesPayment = null)
    {
        $this->DutiesPayment = $dutiesPayment;

        return $this;
    }

    /**
     * @return Payment|null
     */
    public function getDutiesPayment()
    {
        return $this->DutiesPayment;
    }

    /**
     * @param SimpleType\InternationalDocumentContentType|null $documentContent
     * @return CustomsClearanceDetail
     */
    public function setDocumentContent(SimpleType\InternationalDocumentContentType $documentContent = null)
    {
        $this->DocumentContent = $documentContent;

        return $this;
    }

    /**
     * @return SimpleType\InternationalDocumentContentType|null
     */
    public function getDocumentContent()
    {
        return $this->DocumentContent;
    }

    /**
     * @param Money|null $customsValue
     * @return CustomsClearanceDetail
     */
    public function setCustomsValue(Money $customsValue = null)
    {
        $this->CustomsValue = $customsValue;

        return $this;
    }

    /**
     * @return Money|null
     */
    public function getCustomsValue()
    {
        return $this->CustomsValue;
    }

    /**
     * @param SimpleType\FreightOnValueType|null $freightOnValue
     * @return CustomsClearanceDetail
     */
    public function setFreightOnValue(SimpleType\FreightOnValueType $freightOnValue = null)
    {
        $this->FreightOnValue = $freightOnValue;

        return $this;
    }

    /**
     * @return SimpleType\FreightOnValueType|null
     */
    public function getFreightOnValue()
    {
        return $this->FreightOnValue;
    }

    /**
     * @param Money|null $insuranceCharges
     * @return CustomsClearanceDetail
     */
    public function setInsuranceCharges(Money $insuranceCharges = null)
    {
        $this->InsuranceCharges = $insuranceCharges;

        return $this;
    }

    /**
     * @return Money|null
     */
    public function getInsuranceCharges()
    {
        return $this->InsuranceCharges;
    }

    /**
     * @param boolean|null $partiesToTransactionAreRelated
     * @return CustomsClearanceDetail
     */
    public function setPartiesToTransactionAreRelated($partiesToTransactionAreRelated)
    {
        $this->PartiesToTransactionAreRelated = $partiesToTransactionAreRelated;

        return $this;
    }

    /**
     * @return boolean|null
     */
    public function getPartiesToTransactionAreRelated()
    {
        return $this->PartiesToTransactionAreRelated;
    }

    /**
     * @param CommercialInvoice|null $commercialInvoice
     * @return CustomsClearanceDetail
     */
    public function setCommercialInvoice(CommercialInvoice $commercialInvoice = null)
    {
        $this->CommercialInvoice = $commercialInvoice;

        return $this;
    }

    /**
     * @return CommercialInvoice|null
     */
    public function getCommercialInvoice()
    {
        return $this->CommercialInvoice;
    }

    /**
     * @param Commodity[] $commodities
     * @return CustomsClearanceDetail
     */
    public function setCommodities(array $commodities = array())
    {
        $this->Commodities = $commodities;

        return $this;
    }

    /**
     * @return Commodity[]
     */
    public function getCommodities()
    {
        return $this->Commodities;
    }

    /**
     * @param ExportDetail|null $exportDetail
     * @return CustomsClearanceDetail
     */
    public function setExportDetail(ExportDetail $exportDetail = null)
    {
        $this->ExportDetail = $exportDetail;

        return $this;
    }

    /**
     * @return ExportDetail|null
     */
    public function getExportDetail()
    {
        return $this->ExportDetail;
    }

    /**
     * @param SimpleType\RegulatoryControlType[] $regulatoryControls
     * @return CustomsClearanceDetail
     */
    public function setRegulatoryControls(array $regulatoryControls = array())
    {
        $this->RegulatoryControls = $regulatoryControls;

        return $this;
    }

    /**
     * @return SimpleType\RegulatoryControlType[]
     */
    public function getRegulatoryControls()
    {
        return $this->RegulatoryControls;
    }


}

