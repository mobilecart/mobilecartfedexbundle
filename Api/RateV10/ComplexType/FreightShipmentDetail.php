<?php

namespace MobileCart\FedexBundle\Api\RateV10\ComplexType;

use MobileCart\FedexBundle\Api\RateV10\SimpleType;

/**
 * Data applicable to shipments using FEDEX_FREIGHT and FEDEX_NATIONAL_FREIGHT services. 
 *
 *
 */
class FreightShipmentDetail extends ComplexTypeAbstract
{
    const CLASS_NAME = 'FreightShipmentDetail';

    /**
     * Account number used with FEDEX_FREIGHT service. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $FedExFreightAccountNumber
     */
    protected $FedExFreightAccountNumber;

    /**
     * Used for validating FedEx Freight account number and (optionally) identifying third 
     * party payment on the bill of lading. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var ContactAndAddress|null $FedExFreightBillingContactAndAddress
     */
    protected $FedExFreightBillingContactAndAddress;

    /**
     * Account number used with FEDEX_NATIONAL_FREIGHT service. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $FedExNationalFreightAccountNumber
     */
    protected $FedExNationalFreightAccountNumber;

    /**
     * Used for validating FedEx National Freight account number and (optionally) identifying 
     * third party payment on the bill of lading. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var ContactAndAddress|null $FedExNationalFreightBillingContactAndAddress
     */
    protected $FedExNationalFreightBillingContactAndAddress;

    /**
     * Indicates the role of the party submitting the transaction. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\FreightShipmentRoleType|null $Role
     */
    protected $Role;

    /**
     * Designates which of the requester's tariffs will be used for rating. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\FreightAccountPaymentType|null $PaymentType
     */
    protected $PaymentType;

    /**
     * Identifies the declared value for the shipment 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var Money|null $DeclaredValuePerUnit
     */
    protected $DeclaredValuePerUnit;

    /**
     * Identifies the declared value units corresponding to the above defined declared value 
     * 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $DeclaredValueUnits
     */
    protected $DeclaredValueUnits;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var LiabilityCoverageDetail|null $LiabilityCoverageDetail
     */
    protected $LiabilityCoverageDetail;

    /**
     * Identifiers for promotional discounts offered to customers. 
     * minOccurs = 0
     * maxOccurs = unbounded
     *
     * @var string[] $Coupons
     */
    protected $Coupons = array();

    /**
     * Total number of individual handling units in the entire shipment (for unit pricing). 
     * 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var integer|null $TotalHandlingUnits
     */
    protected $TotalHandlingUnits;

    /**
     * Estimated discount rate provided by client for unsecured rate quote. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var float|null $ClientDiscountPercent
     */
    protected $ClientDiscountPercent;

    /**
     * Total weight of pallets used in shipment. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var Weight|null $PalletWeight
     */
    protected $PalletWeight;

    /**
     * Overall shipment dimensions. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var Dimensions|null $ShipmentDimensions
     */
    protected $ShipmentDimensions;

    /**
     * Description for the shipment. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $Comment
     */
    protected $Comment;

    /**
     * Specifies which party will pay surcharges for any special services which support split 
     * billing. 
     * minOccurs = 0
     * maxOccurs = unbounded
     *
     * @var FreightSpecialServicePayment[] $SpecialServicePayments
     */
    protected $SpecialServicePayments = array();

    /**
     * Details of the commodities in the shipment. 
     * minOccurs = 0
     * maxOccurs = unbounded
     *
     * @var FreightShipmentLineItem[] $LineItems
     */
    protected $LineItems = array();


    /**
     * @param string|null $fedExFreightAccountNumber
     * @return FreightShipmentDetail
     */
    public function setFedExFreightAccountNumber($fedExFreightAccountNumber)
    {
        $this->FedExFreightAccountNumber = $fedExFreightAccountNumber;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getFedExFreightAccountNumber()
    {
        return $this->FedExFreightAccountNumber;
    }

    /**
     * @param ContactAndAddress|null $fedExFreightBillingContactAndAddress
     * @return FreightShipmentDetail
     */
    public function setFedExFreightBillingContactAndAddress(ContactAndAddress $fedExFreightBillingContactAndAddress = null)
    {
        $this->FedExFreightBillingContactAndAddress = $fedExFreightBillingContactAndAddress;

        return $this;
    }

    /**
     * @return ContactAndAddress|null
     */
    public function getFedExFreightBillingContactAndAddress()
    {
        return $this->FedExFreightBillingContactAndAddress;
    }

    /**
     * @param string|null $fedExNationalFreightAccountNumber
     * @return FreightShipmentDetail
     */
    public function setFedExNationalFreightAccountNumber($fedExNationalFreightAccountNumber)
    {
        $this->FedExNationalFreightAccountNumber = $fedExNationalFreightAccountNumber;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getFedExNationalFreightAccountNumber()
    {
        return $this->FedExNationalFreightAccountNumber;
    }

    /**
     * @param ContactAndAddress|null $fedExNationalFreightBillingContactAndAddress
     * @return FreightShipmentDetail
     */
    public function setFedExNationalFreightBillingContactAndAddress(ContactAndAddress $fedExNationalFreightBillingContactAndAddress = null)
    {
        $this->FedExNationalFreightBillingContactAndAddress = $fedExNationalFreightBillingContactAndAddress;

        return $this;
    }

    /**
     * @return ContactAndAddress|null
     */
    public function getFedExNationalFreightBillingContactAndAddress()
    {
        return $this->FedExNationalFreightBillingContactAndAddress;
    }

    /**
     * @param SimpleType\FreightShipmentRoleType|null $role
     * @return FreightShipmentDetail
     */
    public function setRole(SimpleType\FreightShipmentRoleType $role = null)
    {
        $this->Role = $role;

        return $this;
    }

    /**
     * @return SimpleType\FreightShipmentRoleType|null
     */
    public function getRole()
    {
        return $this->Role;
    }

    /**
     * @param SimpleType\FreightAccountPaymentType|null $paymentType
     * @return FreightShipmentDetail
     */
    public function setPaymentType(SimpleType\FreightAccountPaymentType $paymentType = null)
    {
        $this->PaymentType = $paymentType;

        return $this;
    }

    /**
     * @return SimpleType\FreightAccountPaymentType|null
     */
    public function getPaymentType()
    {
        return $this->PaymentType;
    }

    /**
     * @param Money|null $declaredValuePerUnit
     * @return FreightShipmentDetail
     */
    public function setDeclaredValuePerUnit(Money $declaredValuePerUnit = null)
    {
        $this->DeclaredValuePerUnit = $declaredValuePerUnit;

        return $this;
    }

    /**
     * @return Money|null
     */
    public function getDeclaredValuePerUnit()
    {
        return $this->DeclaredValuePerUnit;
    }

    /**
     * @param string|null $declaredValueUnits
     * @return FreightShipmentDetail
     */
    public function setDeclaredValueUnits($declaredValueUnits)
    {
        $this->DeclaredValueUnits = $declaredValueUnits;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getDeclaredValueUnits()
    {
        return $this->DeclaredValueUnits;
    }

    /**
     * @param LiabilityCoverageDetail|null $liabilityCoverageDetail
     * @return FreightShipmentDetail
     */
    public function setLiabilityCoverageDetail(LiabilityCoverageDetail $liabilityCoverageDetail = null)
    {
        $this->LiabilityCoverageDetail = $liabilityCoverageDetail;

        return $this;
    }

    /**
     * @return LiabilityCoverageDetail|null
     */
    public function getLiabilityCoverageDetail()
    {
        return $this->LiabilityCoverageDetail;
    }

    /**
     * @param string[] $coupons
     * @return FreightShipmentDetail
     */
    public function setCoupons(array $coupons = array())
    {
        $this->Coupons = $coupons;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getCoupons()
    {
        return $this->Coupons;
    }

    /**
     * @param integer|null $totalHandlingUnits
     * @return FreightShipmentDetail
     */
    public function setTotalHandlingUnits($totalHandlingUnits)
    {
        $this->TotalHandlingUnits = $totalHandlingUnits;

        return $this;
    }

    /**
     * @return integer|null
     */
    public function getTotalHandlingUnits()
    {
        return $this->TotalHandlingUnits;
    }

    /**
     * @param float|null $clientDiscountPercent
     * @return FreightShipmentDetail
     */
    public function setClientDiscountPercent($clientDiscountPercent)
    {
        $this->ClientDiscountPercent = $clientDiscountPercent;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getClientDiscountPercent()
    {
        return $this->ClientDiscountPercent;
    }

    /**
     * @param Weight|null $palletWeight
     * @return FreightShipmentDetail
     */
    public function setPalletWeight(Weight $palletWeight = null)
    {
        $this->PalletWeight = $palletWeight;

        return $this;
    }

    /**
     * @return Weight|null
     */
    public function getPalletWeight()
    {
        return $this->PalletWeight;
    }

    /**
     * @param Dimensions|null $shipmentDimensions
     * @return FreightShipmentDetail
     */
    public function setShipmentDimensions(Dimensions $shipmentDimensions = null)
    {
        $this->ShipmentDimensions = $shipmentDimensions;

        return $this;
    }

    /**
     * @return Dimensions|null
     */
    public function getShipmentDimensions()
    {
        return $this->ShipmentDimensions;
    }

    /**
     * @param string|null $comment
     * @return FreightShipmentDetail
     */
    public function setComment($comment)
    {
        $this->Comment = $comment;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getComment()
    {
        return $this->Comment;
    }

    /**
     * @param FreightSpecialServicePayment[] $specialServicePayments
     * @return FreightShipmentDetail
     */
    public function setSpecialServicePayments(array $specialServicePayments = array())
    {
        $this->SpecialServicePayments = $specialServicePayments;

        return $this;
    }

    /**
     * @return FreightSpecialServicePayment[]
     */
    public function getSpecialServicePayments()
    {
        return $this->SpecialServicePayments;
    }

    /**
     * @param FreightShipmentLineItem[] $lineItems
     * @return FreightShipmentDetail
     */
    public function setLineItems(array $lineItems = array())
    {
        $this->LineItems = $lineItems;

        return $this;
    }

    /**
     * @return FreightShipmentLineItem[]
     */
    public function getLineItems()
    {
        return $this->LineItems;
    }


}

