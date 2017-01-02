<?php

namespace MobileCart\FedexBundle\Api\RateV10\ComplexType;

use MobileCart\FedexBundle\Api\RateV10\SimpleType;

/**
 * The descriptive data for the shipment being tendered to FedEx. 
 *
 *
 */
class RequestedShipment extends ComplexTypeAbstract
{
    const CLASS_NAME = 'RequestedShipment';

    /**
     * Identifies the date and time the package is tendered to FedEx. Both the date and time 
     * portions of the string are expected to be used. The date should not be a past date or 
     * a date more than 10 days in the future. The time is the local time of the shipment based 
     * on the shipper's time zone. The date component must be in the format: YYYY-MM-DD (e.g. 
     * 2006-06-26). The time component must be in the format: HH:MM:SS using a 24 hour clock 
     * (e.g. 11:00 a.m. is 11:00:00, whereas 5:00 p.m. is 17:00:00). The date and time parts 
     * are separated by the letter T (e.g. 2006-06-26T17:00:00). There is also a UTC offset 
     * component indicating the number of hours/mainutes from UTC (e.g 2006-06-26T17:00:00-0400 
     * is defined form June 26, 2006 5:00 pm Eastern Time). 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $ShipTimestamp
     */
    protected $ShipTimestamp;

    /**
     * Identifies the method by which the package is to be tendered to FedEx. This element 
     * does not dispatch a courier for package pickup. See DropoffType for list of valid enumerated 
     * values. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\DropoffType|null $DropoffType
     */
    protected $DropoffType;

    /**
     * Identifies the FedEx service to use in shipping the package. See ServiceType for list 
     * of valid enumerated values. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\ServiceType|null $ServiceType
     */
    protected $ServiceType;

    /**
     * Identifies the packaging used by the requestor for the package. See PackagingType for 
     * list of valid enumerated values. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\PackagingType|null $PackagingType
     */
    protected $PackagingType;

    /**
     * Identifies the total weight of the shipment being conveyed to FedEx.This is only applicable 
     * to International shipments and should only be used on the first package of a mutiple 
     * piece shipment.This value contains 1 explicit decimal position 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var Weight|null $TotalWeight
     */
    protected $TotalWeight;

    /**
     * Total insured amount. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var Money|null $TotalInsuredValue
     */
    protected $TotalInsuredValue;

    /**
     * Descriptive data identifying the party responsible for shipping the package. Shipper 
     * and Origin should have the same address. 
     * minOccurs = 1
     * maxOccurs = 1
     *
     * @var Party $Shipper
     */
    protected $Shipper;

    /**
     * Descriptive data identifying the party receiving the package. 
     * minOccurs = 1
     * maxOccurs = 1
     *
     * @var Party $Recipient
     */
    protected $Recipient;

    /**
     * A unique identifier for a recipient location 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $RecipientLocationNumber
     */
    protected $RecipientLocationNumber;

    /**
     * Physical starting address for the shipment, if different from shipper's address. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var ContactAndAddress|null $Origin
     */
    protected $Origin;

    /**
     * Descriptive data indicating the method and means of payment to FedEx for providing shipping 
     * services. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var Payment|null $ShippingChargesPayment
     */
    protected $ShippingChargesPayment;

    /**
     * Descriptive data regarding special services requested by the shipper for this shipment. 
     * If the shipper is requesting a special service which requires additional data (e.g. 
     * COD), the special service type must be present in the specialServiceTypes collection, 
     * and the supporting detail must be provided in the appropriate sub-object. For example, 
     * to request COD, "COD" must be included in the SpecialServiceTypes collection and the 
     * CodDetail object must contain the required data. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var ShipmentSpecialServicesRequested|null $SpecialServicesRequested
     */
    protected $SpecialServicesRequested;

    /**
     * Details specific to an Express freight shipment. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var ExpressFreightDetail|null $ExpressFreightDetail
     */
    protected $ExpressFreightDetail;

    /**
     * Data applicable to shipments using FEDEX_FREIGHT and FEDEX_NATIONAL_FREIGHT services. 
     * 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var FreightShipmentDetail|null $FreightShipmentDetail
     */
    protected $FreightShipmentDetail;

    /**
     * Used with Ground Home Delivery and Freight. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $DeliveryInstructions
     */
    protected $DeliveryInstructions;

    /**
     * Details about how to calculate variable handling charges at the shipment level. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var VariableHandlingChargeDetail|null $VariableHandlingChargeDetail
     */
    protected $VariableHandlingChargeDetail;

    /**
     * Customs clearance data, used for both international and intra-country shipping. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var CustomsClearanceDetail|null $CustomsClearanceDetail
     */
    protected $CustomsClearanceDetail;

    /**
     * For use in "process tag" transaction. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var PickupDetail|null $PickupDetail
     */
    protected $PickupDetail;

    /**
     * Specifies the characteristics of a shipment pertaining to SmartPost services. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SmartPostShipmentDetail|null $SmartPostDetail
     */
    protected $SmartPostDetail;

    /**
     * If true, only the shipper/payor will have visibility of this shipment. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var boolean|null $BlockInsightVisibility
     */
    protected $BlockInsightVisibility;

    /**
     * Details about the image format and printer type the label is to returned in. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var LabelSpecification|null $LabelSpecification
     */
    protected $LabelSpecification;

    /**
     * Contains data used to create additional (non-label) shipping documents. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var ShippingDocumentSpecification|null $ShippingDocumentSpecification
     */
    protected $ShippingDocumentSpecification;

    /**
     * Specifies whether and what kind of rates the customer wishes to have quoted on this 
     * shipment. The reply will also be constrained by other data on the shipment and customer. 
     * 
     * minOccurs = 0
     * maxOccurs = unbounded
     *
     * @var SimpleType\RateRequestType[] $RateRequestTypes
     */
    protected $RateRequestTypes = array();

    /**
     * Specifies whether the customer wishes to have Estimated Duties and Taxes provided with 
     * the rate quotation on this shipment. Only applies with shipments moving under international 
     * services. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\EdtRequestType|null $EdtRequestType
     */
    protected $EdtRequestType;

    /**
     * The total number of packages in the entire shipment (even when the shipment spans multiple 
     * transactions.) 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var integer|null $PackageCount
     */
    protected $PackageCount;

    /**
     * Specifies which package-level data values are provided at the shipment-level only. The 
     * package-level data values types specified here will not be provided at the package-level. 
     * 
     * minOccurs = 0
     * maxOccurs = unbounded
     *
     * @var SimpleType\ShipmentOnlyFieldsType[] $ShipmentOnlyFields
     */
    protected $ShipmentOnlyFields = array();

    /**
     * One or more package-attribute descriptions, each of which describes an individual package, 
     * a group of identical packages, or (for the total-piece-total-weight case) common characteristics 
     * all packages in the shipment. 
     * minOccurs = 0
     * maxOccurs = 999
     *
     * @var RequestedPackageLineItem[] $RequestedPackageLineItems
     */
    protected $RequestedPackageLineItems = array();


    /**
     * @param string|null $shipTimestamp
     * @return RequestedShipment
     */
    public function setShipTimestamp($shipTimestamp)
    {
        $this->ShipTimestamp = $shipTimestamp;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getShipTimestamp()
    {
        return $this->ShipTimestamp;
    }

    /**
     * @param SimpleType\DropoffType|null $dropoffType
     * @return RequestedShipment
     */
    public function setDropoffType(SimpleType\DropoffType $dropoffType = null)
    {
        $this->DropoffType = $dropoffType;

        return $this;
    }

    /**
     * @return SimpleType\DropoffType|null
     */
    public function getDropoffType()
    {
        return $this->DropoffType;
    }

    /**
     * @param SimpleType\ServiceType|null $serviceType
     * @return RequestedShipment
     */
    public function setServiceType(SimpleType\ServiceType $serviceType = null)
    {
        $this->ServiceType = $serviceType;

        return $this;
    }

    /**
     * @return SimpleType\ServiceType|null
     */
    public function getServiceType()
    {
        return $this->ServiceType;
    }

    /**
     * @param SimpleType\PackagingType|null $packagingType
     * @return RequestedShipment
     */
    public function setPackagingType(SimpleType\PackagingType $packagingType = null)
    {
        $this->PackagingType = $packagingType;

        return $this;
    }

    /**
     * @return SimpleType\PackagingType|null
     */
    public function getPackagingType()
    {
        return $this->PackagingType;
    }

    /**
     * @param Weight|null $totalWeight
     * @return RequestedShipment
     */
    public function setTotalWeight(Weight $totalWeight = null)
    {
        $this->TotalWeight = $totalWeight;

        return $this;
    }

    /**
     * @return Weight|null
     */
    public function getTotalWeight()
    {
        return $this->TotalWeight;
    }

    /**
     * @param Money|null $totalInsuredValue
     * @return RequestedShipment
     */
    public function setTotalInsuredValue(Money $totalInsuredValue = null)
    {
        $this->TotalInsuredValue = $totalInsuredValue;

        return $this;
    }

    /**
     * @return Money|null
     */
    public function getTotalInsuredValue()
    {
        return $this->TotalInsuredValue;
    }

    /**
     * @param Party $shipper
     * @return RequestedShipment
     */
    public function setShipper(Party $shipper)
    {
        $this->Shipper = $shipper;

        return $this;
    }

    /**
     * @return Party
     */
    public function getShipper()
    {
        return $this->Shipper;
    }

    /**
     * @param Party $recipient
     * @return RequestedShipment
     */
    public function setRecipient(Party $recipient)
    {
        $this->Recipient = $recipient;

        return $this;
    }

    /**
     * @return Party
     */
    public function getRecipient()
    {
        return $this->Recipient;
    }

    /**
     * @param string|null $recipientLocationNumber
     * @return RequestedShipment
     */
    public function setRecipientLocationNumber($recipientLocationNumber)
    {
        $this->RecipientLocationNumber = $recipientLocationNumber;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getRecipientLocationNumber()
    {
        return $this->RecipientLocationNumber;
    }

    /**
     * @param ContactAndAddress|null $origin
     * @return RequestedShipment
     */
    public function setOrigin(ContactAndAddress $origin = null)
    {
        $this->Origin = $origin;

        return $this;
    }

    /**
     * @return ContactAndAddress|null
     */
    public function getOrigin()
    {
        return $this->Origin;
    }

    /**
     * @param Payment|null $shippingChargesPayment
     * @return RequestedShipment
     */
    public function setShippingChargesPayment(Payment $shippingChargesPayment = null)
    {
        $this->ShippingChargesPayment = $shippingChargesPayment;

        return $this;
    }

    /**
     * @return Payment|null
     */
    public function getShippingChargesPayment()
    {
        return $this->ShippingChargesPayment;
    }

    /**
     * @param ShipmentSpecialServicesRequested|null $specialServicesRequested
     * @return RequestedShipment
     */
    public function setSpecialServicesRequested(ShipmentSpecialServicesRequested $specialServicesRequested = null)
    {
        $this->SpecialServicesRequested = $specialServicesRequested;

        return $this;
    }

    /**
     * @return ShipmentSpecialServicesRequested|null
     */
    public function getSpecialServicesRequested()
    {
        return $this->SpecialServicesRequested;
    }

    /**
     * @param ExpressFreightDetail|null $expressFreightDetail
     * @return RequestedShipment
     */
    public function setExpressFreightDetail(ExpressFreightDetail $expressFreightDetail = null)
    {
        $this->ExpressFreightDetail = $expressFreightDetail;

        return $this;
    }

    /**
     * @return ExpressFreightDetail|null
     */
    public function getExpressFreightDetail()
    {
        return $this->ExpressFreightDetail;
    }

    /**
     * @param FreightShipmentDetail|null $freightShipmentDetail
     * @return RequestedShipment
     */
    public function setFreightShipmentDetail(FreightShipmentDetail $freightShipmentDetail = null)
    {
        $this->FreightShipmentDetail = $freightShipmentDetail;

        return $this;
    }

    /**
     * @return FreightShipmentDetail|null
     */
    public function getFreightShipmentDetail()
    {
        return $this->FreightShipmentDetail;
    }

    /**
     * @param string|null $deliveryInstructions
     * @return RequestedShipment
     */
    public function setDeliveryInstructions($deliveryInstructions)
    {
        $this->DeliveryInstructions = $deliveryInstructions;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getDeliveryInstructions()
    {
        return $this->DeliveryInstructions;
    }

    /**
     * @param VariableHandlingChargeDetail|null $variableHandlingChargeDetail
     * @return RequestedShipment
     */
    public function setVariableHandlingChargeDetail(VariableHandlingChargeDetail $variableHandlingChargeDetail = null)
    {
        $this->VariableHandlingChargeDetail = $variableHandlingChargeDetail;

        return $this;
    }

    /**
     * @return VariableHandlingChargeDetail|null
     */
    public function getVariableHandlingChargeDetail()
    {
        return $this->VariableHandlingChargeDetail;
    }

    /**
     * @param CustomsClearanceDetail|null $customsClearanceDetail
     * @return RequestedShipment
     */
    public function setCustomsClearanceDetail(CustomsClearanceDetail $customsClearanceDetail = null)
    {
        $this->CustomsClearanceDetail = $customsClearanceDetail;

        return $this;
    }

    /**
     * @return CustomsClearanceDetail|null
     */
    public function getCustomsClearanceDetail()
    {
        return $this->CustomsClearanceDetail;
    }

    /**
     * @param PickupDetail|null $pickupDetail
     * @return RequestedShipment
     */
    public function setPickupDetail(PickupDetail $pickupDetail = null)
    {
        $this->PickupDetail = $pickupDetail;

        return $this;
    }

    /**
     * @return PickupDetail|null
     */
    public function getPickupDetail()
    {
        return $this->PickupDetail;
    }

    /**
     * @param SmartPostShipmentDetail|null $smartPostDetail
     * @return RequestedShipment
     */
    public function setSmartPostDetail(SmartPostShipmentDetail $smartPostDetail = null)
    {
        $this->SmartPostDetail = $smartPostDetail;

        return $this;
    }

    /**
     * @return SmartPostShipmentDetail|null
     */
    public function getSmartPostDetail()
    {
        return $this->SmartPostDetail;
    }

    /**
     * @param boolean|null $blockInsightVisibility
     * @return RequestedShipment
     */
    public function setBlockInsightVisibility($blockInsightVisibility)
    {
        $this->BlockInsightVisibility = $blockInsightVisibility;

        return $this;
    }

    /**
     * @return boolean|null
     */
    public function getBlockInsightVisibility()
    {
        return $this->BlockInsightVisibility;
    }

    /**
     * @param LabelSpecification|null $labelSpecification
     * @return RequestedShipment
     */
    public function setLabelSpecification(LabelSpecification $labelSpecification = null)
    {
        $this->LabelSpecification = $labelSpecification;

        return $this;
    }

    /**
     * @return LabelSpecification|null
     */
    public function getLabelSpecification()
    {
        return $this->LabelSpecification;
    }

    /**
     * @param ShippingDocumentSpecification|null $shippingDocumentSpecification
     * @return RequestedShipment
     */
    public function setShippingDocumentSpecification(ShippingDocumentSpecification $shippingDocumentSpecification = null)
    {
        $this->ShippingDocumentSpecification = $shippingDocumentSpecification;

        return $this;
    }

    /**
     * @return ShippingDocumentSpecification|null
     */
    public function getShippingDocumentSpecification()
    {
        return $this->ShippingDocumentSpecification;
    }

    /**
     * @param SimpleType\RateRequestType[] $rateRequestTypes
     * @return RequestedShipment
     */
    public function setRateRequestTypes(array $rateRequestTypes = array())
    {
        $this->RateRequestTypes = $rateRequestTypes;

        return $this;
    }

    /**
     * @return SimpleType\RateRequestType[]
     */
    public function getRateRequestTypes()
    {
        return $this->RateRequestTypes;
    }

    /**
     * @param SimpleType\EdtRequestType|null $edtRequestType
     * @return RequestedShipment
     */
    public function setEdtRequestType(SimpleType\EdtRequestType $edtRequestType = null)
    {
        $this->EdtRequestType = $edtRequestType;

        return $this;
    }

    /**
     * @return SimpleType\EdtRequestType|null
     */
    public function getEdtRequestType()
    {
        return $this->EdtRequestType;
    }

    /**
     * @param integer|null $packageCount
     * @return RequestedShipment
     */
    public function setPackageCount($packageCount)
    {
        $this->PackageCount = $packageCount;

        return $this;
    }

    /**
     * @return integer|null
     */
    public function getPackageCount()
    {
        return $this->PackageCount;
    }

    /**
     * @param SimpleType\ShipmentOnlyFieldsType[] $shipmentOnlyFields
     * @return RequestedShipment
     */
    public function setShipmentOnlyFields(array $shipmentOnlyFields = array())
    {
        $this->ShipmentOnlyFields = $shipmentOnlyFields;

        return $this;
    }

    /**
     * @return SimpleType\ShipmentOnlyFieldsType[]
     */
    public function getShipmentOnlyFields()
    {
        return $this->ShipmentOnlyFields;
    }

    /**
     * @param RequestedPackageLineItem[] $requestedPackageLineItems
     * @return RequestedShipment
     */
    public function setRequestedPackageLineItems(array $requestedPackageLineItems = array())
    {
        $this->RequestedPackageLineItems = $requestedPackageLineItems;

        return $this;
    }

    /**
     * @return RequestedPackageLineItem[]
     */
    public function getRequestedPackageLineItems()
    {
        return $this->RequestedPackageLineItems;
    }


}

