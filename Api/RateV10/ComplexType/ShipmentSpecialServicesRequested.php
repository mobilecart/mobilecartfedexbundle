<?php

namespace MobileCart\FedexBundle\Api\RateV10\ComplexType;

use MobileCart\FedexBundle\Api\RateV10\SimpleType;

/**
 * These special services are available at the shipment level for some or all service types. 
 * If the shipper is requesting a special service which requires additional data (such as the 
 * COD amount), the shipment special service type must be present in the specialServiceTypes 
 * collection, and the supporting detail must be provided in the appropriate sub-object below. 
 * 
 *
 *
 */
class ShipmentSpecialServicesRequested extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ShipmentSpecialServicesRequested';

    /**
     * The types of all special services requested for the enclosing shipment (or other shipment-level 
     * transaction). 
     * minOccurs = 0
     * maxOccurs = unbounded
     *
     * @var SimpleType\ShipmentSpecialServiceType[] $SpecialServiceTypes
     */
    protected $SpecialServiceTypes = array();

    /**
     * Descriptive data required for a FedEx COD (Collect-On-Delivery) shipment. This element 
     * is required when SpecialServiceType.COD is present in the SpecialServiceTypes collection. 
     * 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var CodDetail|null $CodDetail
     */
    protected $CodDetail;

    /**
     * Descriptive data required for a FedEx shipment that is to be held at the destination 
     * FedEx location for pickup by the recipient. This element is required when SpecialServiceType.HOLD_AT_LOCATION 
     * is present in the SpecialServiceTypes collection. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var HoldAtLocationDetail|null $HoldAtLocationDetail
     */
    protected $HoldAtLocationDetail;

    /**
     * Descriptive data required for FedEx to provide email notification to the customer regarding 
     * the shipment. This element is required when SpecialServiceType.EMAIL_NOTIFICATION is 
     * present in the SpecialServiceTypes collection. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var EMailNotificationDetail|null $EMailNotificationDetail
     */
    protected $EMailNotificationDetail;

    /**
     * The descriptive data required for FedEx Printed Return Label. This element is required 
     * when SpecialServiceType.PRINTED_RETURN_LABEL is present in the SpecialServiceTypes collection 
     * 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var ReturnShipmentDetail|null $ReturnShipmentDetail
     */
    protected $ReturnShipmentDetail;

    /**
     * This field should be populated for pending shipments (e.g. e-mail label) It is required 
     * by a PENDING_SHIPMENT special service type. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var PendingShipmentDetail|null $PendingShipmentDetail
     */
    protected $PendingShipmentDetail;

    /**
     * The number of packages with dry ice and the total weight of the dry ice. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var ShipmentDryIceDetail|null $ShipmentDryIceDetail
     */
    protected $ShipmentDryIceDetail;

    /**
     * The descriptive data required for FedEx Home Delivery options. This element is required 
     * when SpecialServiceType.HOME_DELIVERY_PREMIUM is present in the SpecialServiceTypes 
     * collection 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var HomeDeliveryPremiumDetail|null $HomeDeliveryPremiumDetail
     */
    protected $HomeDeliveryPremiumDetail;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var FlatbedTrailerDetail|null $FlatbedTrailerDetail
     */
    protected $FlatbedTrailerDetail;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var FreightGuaranteeDetail|null $FreightGuaranteeDetail
     */
    protected $FreightGuaranteeDetail;

    /**
     * Electronic Trade document references. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var EtdDetail|null $EtdDetail
     */
    protected $EtdDetail;

    /**
     * Specification for date or range of dates on which delivery is to be attempted. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var CustomDeliveryWindowDetail|null $CustomDeliveryWindowDetail
     */
    protected $CustomDeliveryWindowDetail;


    /**
     * @param SimpleType\ShipmentSpecialServiceType[] $specialServiceTypes
     * @return ShipmentSpecialServicesRequested
     */
    public function setSpecialServiceTypes(array $specialServiceTypes = array())
    {
        $this->SpecialServiceTypes = $specialServiceTypes;

        return $this;
    }

    /**
     * @return SimpleType\ShipmentSpecialServiceType[]
     */
    public function getSpecialServiceTypes()
    {
        return $this->SpecialServiceTypes;
    }

    /**
     * @param CodDetail|null $codDetail
     * @return ShipmentSpecialServicesRequested
     */
    public function setCodDetail(CodDetail $codDetail = null)
    {
        $this->CodDetail = $codDetail;

        return $this;
    }

    /**
     * @return CodDetail|null
     */
    public function getCodDetail()
    {
        return $this->CodDetail;
    }

    /**
     * @param HoldAtLocationDetail|null $holdAtLocationDetail
     * @return ShipmentSpecialServicesRequested
     */
    public function setHoldAtLocationDetail(HoldAtLocationDetail $holdAtLocationDetail = null)
    {
        $this->HoldAtLocationDetail = $holdAtLocationDetail;

        return $this;
    }

    /**
     * @return HoldAtLocationDetail|null
     */
    public function getHoldAtLocationDetail()
    {
        return $this->HoldAtLocationDetail;
    }

    /**
     * @param EMailNotificationDetail|null $eMailNotificationDetail
     * @return ShipmentSpecialServicesRequested
     */
    public function setEMailNotificationDetail(EMailNotificationDetail $eMailNotificationDetail = null)
    {
        $this->EMailNotificationDetail = $eMailNotificationDetail;

        return $this;
    }

    /**
     * @return EMailNotificationDetail|null
     */
    public function getEMailNotificationDetail()
    {
        return $this->EMailNotificationDetail;
    }

    /**
     * @param ReturnShipmentDetail|null $returnShipmentDetail
     * @return ShipmentSpecialServicesRequested
     */
    public function setReturnShipmentDetail(ReturnShipmentDetail $returnShipmentDetail = null)
    {
        $this->ReturnShipmentDetail = $returnShipmentDetail;

        return $this;
    }

    /**
     * @return ReturnShipmentDetail|null
     */
    public function getReturnShipmentDetail()
    {
        return $this->ReturnShipmentDetail;
    }

    /**
     * @param PendingShipmentDetail|null $pendingShipmentDetail
     * @return ShipmentSpecialServicesRequested
     */
    public function setPendingShipmentDetail(PendingShipmentDetail $pendingShipmentDetail = null)
    {
        $this->PendingShipmentDetail = $pendingShipmentDetail;

        return $this;
    }

    /**
     * @return PendingShipmentDetail|null
     */
    public function getPendingShipmentDetail()
    {
        return $this->PendingShipmentDetail;
    }

    /**
     * @param ShipmentDryIceDetail|null $shipmentDryIceDetail
     * @return ShipmentSpecialServicesRequested
     */
    public function setShipmentDryIceDetail(ShipmentDryIceDetail $shipmentDryIceDetail = null)
    {
        $this->ShipmentDryIceDetail = $shipmentDryIceDetail;

        return $this;
    }

    /**
     * @return ShipmentDryIceDetail|null
     */
    public function getShipmentDryIceDetail()
    {
        return $this->ShipmentDryIceDetail;
    }

    /**
     * @param HomeDeliveryPremiumDetail|null $homeDeliveryPremiumDetail
     * @return ShipmentSpecialServicesRequested
     */
    public function setHomeDeliveryPremiumDetail(HomeDeliveryPremiumDetail $homeDeliveryPremiumDetail = null)
    {
        $this->HomeDeliveryPremiumDetail = $homeDeliveryPremiumDetail;

        return $this;
    }

    /**
     * @return HomeDeliveryPremiumDetail|null
     */
    public function getHomeDeliveryPremiumDetail()
    {
        return $this->HomeDeliveryPremiumDetail;
    }

    /**
     * @param FlatbedTrailerDetail|null $flatbedTrailerDetail
     * @return ShipmentSpecialServicesRequested
     */
    public function setFlatbedTrailerDetail(FlatbedTrailerDetail $flatbedTrailerDetail = null)
    {
        $this->FlatbedTrailerDetail = $flatbedTrailerDetail;

        return $this;
    }

    /**
     * @return FlatbedTrailerDetail|null
     */
    public function getFlatbedTrailerDetail()
    {
        return $this->FlatbedTrailerDetail;
    }

    /**
     * @param FreightGuaranteeDetail|null $freightGuaranteeDetail
     * @return ShipmentSpecialServicesRequested
     */
    public function setFreightGuaranteeDetail(FreightGuaranteeDetail $freightGuaranteeDetail = null)
    {
        $this->FreightGuaranteeDetail = $freightGuaranteeDetail;

        return $this;
    }

    /**
     * @return FreightGuaranteeDetail|null
     */
    public function getFreightGuaranteeDetail()
    {
        return $this->FreightGuaranteeDetail;
    }

    /**
     * @param EtdDetail|null $etdDetail
     * @return ShipmentSpecialServicesRequested
     */
    public function setEtdDetail(EtdDetail $etdDetail = null)
    {
        $this->EtdDetail = $etdDetail;

        return $this;
    }

    /**
     * @return EtdDetail|null
     */
    public function getEtdDetail()
    {
        return $this->EtdDetail;
    }

    /**
     * @param CustomDeliveryWindowDetail|null $customDeliveryWindowDetail
     * @return ShipmentSpecialServicesRequested
     */
    public function setCustomDeliveryWindowDetail(CustomDeliveryWindowDetail $customDeliveryWindowDetail = null)
    {
        $this->CustomDeliveryWindowDetail = $customDeliveryWindowDetail;

        return $this;
    }

    /**
     * @return CustomDeliveryWindowDetail|null
     */
    public function getCustomDeliveryWindowDetail()
    {
        return $this->CustomDeliveryWindowDetail;
    }


}

