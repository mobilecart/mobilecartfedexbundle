<?php

namespace MobileCart\FedexBundle\Api\RateV10\ComplexType;

use MobileCart\FedexBundle\Api\RateV10\SimpleType;

/**
 * Information about the transit time and delivery commitment date and time. 
 *
 *
 */
class CommitDetail extends ComplexTypeAbstract
{
    const CLASS_NAME = 'CommitDetail';

    /**
     * The Commodity applicable to this commitment. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $CommodityName
     */
    protected $CommodityName;

    /**
     * The FedEx service type applicable to this commitment. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\ServiceType|null $ServiceType
     */
    protected $ServiceType;

    /**
     * Shows the specific combination of service options combined with the service type that 
     * produced this committment in the set returned to the caller. 
     * minOccurs = 0
     * maxOccurs = unbounded
     *
     * @var SimpleType\ServiceOptionType[] $AppliedOptions
     */
    protected $AppliedOptions = array();

    /**
     * Supporting detail for applied options identified in preceding field. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var ServiceSubOptionDetail|null $AppliedSubOptions
     */
    protected $AppliedSubOptions;

    /**
     * THe delivery commitment date/time. Express Only. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $CommitTimestamp
     */
    protected $CommitTimestamp;

    /**
     * The delivery commitment day of the week. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\DayOfWeekType|null $DayOfWeek
     */
    protected $DayOfWeek;

    /**
     * The number of transit days; applies to Ground and LTL Freight; indicates minimum transit 
     * time for SmartPost. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\TransitTimeType|null $TransitTime
     */
    protected $TransitTime;

    /**
     * Maximum number of transit days, for SmartPost shipments. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\TransitTimeType|null $MaximumTransitTime
     */
    protected $MaximumTransitTime;

    /**
     * The service area code for the destination of this shipment. Express only. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $DestinationServiceArea
     */
    protected $DestinationServiceArea;

    /**
     * The address of the broker to be used for this shipment. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var Address|null $BrokerAddress
     */
    protected $BrokerAddress;

    /**
     * The FedEx location identifier for the broker. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $BrokerLocationId
     */
    protected $BrokerLocationId;

    /**
     * The delivery commitment date/time the shipment will arrive at the border. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $BrokerCommitTimestamp
     */
    protected $BrokerCommitTimestamp;

    /**
     * The delivery commitment day of the week the shipment will arrive at the border. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\DayOfWeekType|null $BrokerCommitDayOfWeek
     */
    protected $BrokerCommitDayOfWeek;

    /**
     * The number of days it will take for the shipment to make it from broker to destination 
     * 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var integer|null $BrokerToDestinationDays
     */
    protected $BrokerToDestinationDays;

    /**
     * The delivery commitment date for shipment served by GSP (Global Service Provider) 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $ProofOfDeliveryDate
     */
    protected $ProofOfDeliveryDate;

    /**
     * The delivery commitment day of the week for the shipment served by GSP (Global Service 
     * Provider) 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\DayOfWeekType|null $ProofOfDeliveryDayOfWeek
     */
    protected $ProofOfDeliveryDayOfWeek;

    /**
     * Messages concerning the ability to provide an accurate delivery commitment on an International 
     * commit quote. These could be messages providing information about why a commitment could 
     * not be returned or a successful message such as "REQUEST COMPLETED" 
     * minOccurs = 0
     * maxOccurs = unbounded
     *
     * @var Notification[] $CommitMessages
     */
    protected $CommitMessages = array();

    /**
     * Messages concerning the delivery commitment on an International commit quote such as 
     * "0:00 A.M. IF NO CUSTOMS DELAY" 
     * minOccurs = 0
     * maxOccurs = unbounded
     *
     * @var string[] $DeliveryMessages
     */
    protected $DeliveryMessages = array();

    /**
     * Information about why a shipment delivery is delayed and at what level (country/service 
     * etc.). 
     * minOccurs = 0
     * maxOccurs = unbounded
     *
     * @var DelayDetail[] $DelayDetails
     */
    protected $DelayDetails = array();

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\InternationalDocumentContentType|null $DocumentContent
     */
    protected $DocumentContent;

    /**
     * Required documentation for this shipment. 
     * minOccurs = 0
     * maxOccurs = unbounded
     *
     * @var SimpleType\RequiredShippingDocumentType[] $RequiredDocuments
     */
    protected $RequiredDocuments = array();

    /**
     * Freight origin and destination city center information and total distance between origin 
     * and destination city centers. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var FreightCommitDetail|null $FreightCommitDetail
     */
    protected $FreightCommitDetail;


    /**
     * @param string|null $commodityName
     * @return CommitDetail
     */
    public function setCommodityName($commodityName)
    {
        $this->CommodityName = $commodityName;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getCommodityName()
    {
        return $this->CommodityName;
    }

    /**
     * @param SimpleType\ServiceType|null $serviceType
     * @return CommitDetail
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
     * @param SimpleType\ServiceOptionType[] $appliedOptions
     * @return CommitDetail
     */
    public function setAppliedOptions(array $appliedOptions = array())
    {
        $this->AppliedOptions = $appliedOptions;

        return $this;
    }

    /**
     * @return SimpleType\ServiceOptionType[]
     */
    public function getAppliedOptions()
    {
        return $this->AppliedOptions;
    }

    /**
     * @param ServiceSubOptionDetail|null $appliedSubOptions
     * @return CommitDetail
     */
    public function setAppliedSubOptions(ServiceSubOptionDetail $appliedSubOptions = null)
    {
        $this->AppliedSubOptions = $appliedSubOptions;

        return $this;
    }

    /**
     * @return ServiceSubOptionDetail|null
     */
    public function getAppliedSubOptions()
    {
        return $this->AppliedSubOptions;
    }

    /**
     * @param string|null $commitTimestamp
     * @return CommitDetail
     */
    public function setCommitTimestamp($commitTimestamp)
    {
        $this->CommitTimestamp = $commitTimestamp;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getCommitTimestamp()
    {
        return $this->CommitTimestamp;
    }

    /**
     * @param SimpleType\DayOfWeekType|null $dayOfWeek
     * @return CommitDetail
     */
    public function setDayOfWeek(SimpleType\DayOfWeekType $dayOfWeek = null)
    {
        $this->DayOfWeek = $dayOfWeek;

        return $this;
    }

    /**
     * @return SimpleType\DayOfWeekType|null
     */
    public function getDayOfWeek()
    {
        return $this->DayOfWeek;
    }

    /**
     * @param SimpleType\TransitTimeType|null $transitTime
     * @return CommitDetail
     */
    public function setTransitTime(SimpleType\TransitTimeType $transitTime = null)
    {
        $this->TransitTime = $transitTime;

        return $this;
    }

    /**
     * @return SimpleType\TransitTimeType|null
     */
    public function getTransitTime()
    {
        return $this->TransitTime;
    }

    /**
     * @param SimpleType\TransitTimeType|null $maximumTransitTime
     * @return CommitDetail
     */
    public function setMaximumTransitTime(SimpleType\TransitTimeType $maximumTransitTime = null)
    {
        $this->MaximumTransitTime = $maximumTransitTime;

        return $this;
    }

    /**
     * @return SimpleType\TransitTimeType|null
     */
    public function getMaximumTransitTime()
    {
        return $this->MaximumTransitTime;
    }

    /**
     * @param string|null $destinationServiceArea
     * @return CommitDetail
     */
    public function setDestinationServiceArea($destinationServiceArea)
    {
        $this->DestinationServiceArea = $destinationServiceArea;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getDestinationServiceArea()
    {
        return $this->DestinationServiceArea;
    }

    /**
     * @param Address|null $brokerAddress
     * @return CommitDetail
     */
    public function setBrokerAddress(Address $brokerAddress = null)
    {
        $this->BrokerAddress = $brokerAddress;

        return $this;
    }

    /**
     * @return Address|null
     */
    public function getBrokerAddress()
    {
        return $this->BrokerAddress;
    }

    /**
     * @param string|null $brokerLocationId
     * @return CommitDetail
     */
    public function setBrokerLocationId($brokerLocationId)
    {
        $this->BrokerLocationId = $brokerLocationId;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getBrokerLocationId()
    {
        return $this->BrokerLocationId;
    }

    /**
     * @param string|null $brokerCommitTimestamp
     * @return CommitDetail
     */
    public function setBrokerCommitTimestamp($brokerCommitTimestamp)
    {
        $this->BrokerCommitTimestamp = $brokerCommitTimestamp;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getBrokerCommitTimestamp()
    {
        return $this->BrokerCommitTimestamp;
    }

    /**
     * @param SimpleType\DayOfWeekType|null $brokerCommitDayOfWeek
     * @return CommitDetail
     */
    public function setBrokerCommitDayOfWeek(SimpleType\DayOfWeekType $brokerCommitDayOfWeek = null)
    {
        $this->BrokerCommitDayOfWeek = $brokerCommitDayOfWeek;

        return $this;
    }

    /**
     * @return SimpleType\DayOfWeekType|null
     */
    public function getBrokerCommitDayOfWeek()
    {
        return $this->BrokerCommitDayOfWeek;
    }

    /**
     * @param integer|null $brokerToDestinationDays
     * @return CommitDetail
     */
    public function setBrokerToDestinationDays($brokerToDestinationDays)
    {
        $this->BrokerToDestinationDays = $brokerToDestinationDays;

        return $this;
    }

    /**
     * @return integer|null
     */
    public function getBrokerToDestinationDays()
    {
        return $this->BrokerToDestinationDays;
    }

    /**
     * @param string|null $proofOfDeliveryDate
     * @return CommitDetail
     */
    public function setProofOfDeliveryDate($proofOfDeliveryDate)
    {
        $this->ProofOfDeliveryDate = $proofOfDeliveryDate;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getProofOfDeliveryDate()
    {
        return $this->ProofOfDeliveryDate;
    }

    /**
     * @param SimpleType\DayOfWeekType|null $proofOfDeliveryDayOfWeek
     * @return CommitDetail
     */
    public function setProofOfDeliveryDayOfWeek(SimpleType\DayOfWeekType $proofOfDeliveryDayOfWeek = null)
    {
        $this->ProofOfDeliveryDayOfWeek = $proofOfDeliveryDayOfWeek;

        return $this;
    }

    /**
     * @return SimpleType\DayOfWeekType|null
     */
    public function getProofOfDeliveryDayOfWeek()
    {
        return $this->ProofOfDeliveryDayOfWeek;
    }

    /**
     * @param Notification[] $commitMessages
     * @return CommitDetail
     */
    public function setCommitMessages(array $commitMessages = array())
    {
        $this->CommitMessages = $commitMessages;

        return $this;
    }

    /**
     * @return Notification[]
     */
    public function getCommitMessages()
    {
        return $this->CommitMessages;
    }

    /**
     * @param string[] $deliveryMessages
     * @return CommitDetail
     */
    public function setDeliveryMessages(array $deliveryMessages = array())
    {
        $this->DeliveryMessages = $deliveryMessages;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getDeliveryMessages()
    {
        return $this->DeliveryMessages;
    }

    /**
     * @param DelayDetail[] $delayDetails
     * @return CommitDetail
     */
    public function setDelayDetails(array $delayDetails = array())
    {
        $this->DelayDetails = $delayDetails;

        return $this;
    }

    /**
     * @return DelayDetail[]
     */
    public function getDelayDetails()
    {
        return $this->DelayDetails;
    }

    /**
     * @param SimpleType\InternationalDocumentContentType|null $documentContent
     * @return CommitDetail
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
     * @param SimpleType\RequiredShippingDocumentType[] $requiredDocuments
     * @return CommitDetail
     */
    public function setRequiredDocuments(array $requiredDocuments = array())
    {
        $this->RequiredDocuments = $requiredDocuments;

        return $this;
    }

    /**
     * @return SimpleType\RequiredShippingDocumentType[]
     */
    public function getRequiredDocuments()
    {
        return $this->RequiredDocuments;
    }

    /**
     * @param FreightCommitDetail|null $freightCommitDetail
     * @return CommitDetail
     */
    public function setFreightCommitDetail(FreightCommitDetail $freightCommitDetail = null)
    {
        $this->FreightCommitDetail = $freightCommitDetail;

        return $this;
    }

    /**
     * @return FreightCommitDetail|null
     */
    public function getFreightCommitDetail()
    {
        return $this->FreightCommitDetail;
    }


}

