<?php

namespace MobileCart\FedexBundle\Api\RateV10\ComplexType;

use MobileCart\FedexBundle\Api\RateV10\SimpleType;

/**
 *
 *
 */
class RateReplyDetail extends ComplexTypeAbstract
{
    const CLASS_NAME = 'RateReplyDetail';

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

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $DeliveryStation
     */
    protected $DeliveryStation;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\DayOfWeekType|null $DeliveryDayOfWeek
     */
    protected $DeliveryDayOfWeek;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $DeliveryTimestamp
     */
    protected $DeliveryTimestamp;

    /**

     * minOccurs = 0
     * maxOccurs = unbounded
     *
     * @var CommitDetail[] $CommitDetails
     */
    protected $CommitDetails = array();

    /**
     * Identification of an airport, using standard three-letter abbreviations. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $DestinationAirportId
     */
    protected $DestinationAirportId;

    /**
     * Indicates whether or not this shipment is eligible for a money back guarantee. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var boolean|null $IneligibleForMoneyBackGuarantee
     */
    protected $IneligibleForMoneyBackGuarantee;

    /**
     * Commitment code for the origin. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $OriginServiceArea
     */
    protected $OriginServiceArea;

    /**
     * Commitment code for the destination. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $DestinationServiceArea
     */
    protected $DestinationServiceArea;

    /**
     * Time in transit from pickup to delivery. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\TransitTimeType|null $TransitTime
     */
    protected $TransitTime;

    /**
     * Maximum expected transit time 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\TransitTimeType|null $MaximumTransitTime
     */
    protected $MaximumTransitTime;

    /**
     * The signature option for this package. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\SignatureOptionType|null $SignatureOption
     */
    protected $SignatureOption;

    /**
     * The actual rate type of the charges for this package. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\ReturnedRateType|null $ActualRateType
     */
    protected $ActualRateType;

    /**
     * Each element contains all rate data for a single rate type. 
     * minOccurs = 0
     * maxOccurs = unbounded
     *
     * @var RatedShipmentDetail[] $RatedShipmentDetails
     */
    protected $RatedShipmentDetails = array();


    /**
     * @param SimpleType\ServiceType|null $serviceType
     * @return RateReplyDetail
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
     * @return RateReplyDetail
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
     * @param SimpleType\ServiceOptionType[] $appliedOptions
     * @return RateReplyDetail
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
     * @return RateReplyDetail
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
     * @param string|null $deliveryStation
     * @return RateReplyDetail
     */
    public function setDeliveryStation($deliveryStation)
    {
        $this->DeliveryStation = $deliveryStation;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getDeliveryStation()
    {
        return $this->DeliveryStation;
    }

    /**
     * @param SimpleType\DayOfWeekType|null $deliveryDayOfWeek
     * @return RateReplyDetail
     */
    public function setDeliveryDayOfWeek(SimpleType\DayOfWeekType $deliveryDayOfWeek = null)
    {
        $this->DeliveryDayOfWeek = $deliveryDayOfWeek;

        return $this;
    }

    /**
     * @return SimpleType\DayOfWeekType|null
     */
    public function getDeliveryDayOfWeek()
    {
        return $this->DeliveryDayOfWeek;
    }

    /**
     * @param string|null $deliveryTimestamp
     * @return RateReplyDetail
     */
    public function setDeliveryTimestamp($deliveryTimestamp)
    {
        $this->DeliveryTimestamp = $deliveryTimestamp;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getDeliveryTimestamp()
    {
        return $this->DeliveryTimestamp;
    }

    /**
     * @param CommitDetail[] $commitDetails
     * @return RateReplyDetail
     */
    public function setCommitDetails(array $commitDetails = array())
    {
        $this->CommitDetails = $commitDetails;

        return $this;
    }

    /**
     * @return CommitDetail[]
     */
    public function getCommitDetails()
    {
        return $this->CommitDetails;
    }

    /**
     * @param string|null $destinationAirportId
     * @return RateReplyDetail
     */
    public function setDestinationAirportId($destinationAirportId)
    {
        $this->DestinationAirportId = $destinationAirportId;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getDestinationAirportId()
    {
        return $this->DestinationAirportId;
    }

    /**
     * @param boolean|null $ineligibleForMoneyBackGuarantee
     * @return RateReplyDetail
     */
    public function setIneligibleForMoneyBackGuarantee($ineligibleForMoneyBackGuarantee)
    {
        $this->IneligibleForMoneyBackGuarantee = $ineligibleForMoneyBackGuarantee;

        return $this;
    }

    /**
     * @return boolean|null
     */
    public function getIneligibleForMoneyBackGuarantee()
    {
        return $this->IneligibleForMoneyBackGuarantee;
    }

    /**
     * @param string|null $originServiceArea
     * @return RateReplyDetail
     */
    public function setOriginServiceArea($originServiceArea)
    {
        $this->OriginServiceArea = $originServiceArea;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getOriginServiceArea()
    {
        return $this->OriginServiceArea;
    }

    /**
     * @param string|null $destinationServiceArea
     * @return RateReplyDetail
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
     * @param SimpleType\TransitTimeType|null $transitTime
     * @return RateReplyDetail
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
     * @return RateReplyDetail
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
     * @param SimpleType\SignatureOptionType|null $signatureOption
     * @return RateReplyDetail
     */
    public function setSignatureOption(SimpleType\SignatureOptionType $signatureOption = null)
    {
        $this->SignatureOption = $signatureOption;

        return $this;
    }

    /**
     * @return SimpleType\SignatureOptionType|null
     */
    public function getSignatureOption()
    {
        return $this->SignatureOption;
    }

    /**
     * @param SimpleType\ReturnedRateType|null $actualRateType
     * @return RateReplyDetail
     */
    public function setActualRateType(SimpleType\ReturnedRateType $actualRateType = null)
    {
        $this->ActualRateType = $actualRateType;

        return $this;
    }

    /**
     * @return SimpleType\ReturnedRateType|null
     */
    public function getActualRateType()
    {
        return $this->ActualRateType;
    }

    /**
     * @param RatedShipmentDetail[] $ratedShipmentDetails
     * @return RateReplyDetail
     */
    public function setRatedShipmentDetails(array $ratedShipmentDetails = array())
    {
        $this->RatedShipmentDetails = $ratedShipmentDetails;

        return $this;
    }

    /**
     * @return RatedShipmentDetail[]
     */
    public function getRatedShipmentDetails()
    {
        return $this->RatedShipmentDetails;
    }


}

