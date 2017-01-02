<?php

namespace MobileCart\FedexBundle\Api\RateV10\ComplexType;

use MobileCart\FedexBundle\Api\RateV10\SimpleType;

/**
 * The response to a RateRequest. The Notifications indicate whether the request was successful 
 * or not. 
 *
 *
 */
class RateReply extends ComplexTypeAbstract
{
    const CLASS_NAME = 'RateReply';

    /**
     * This indicates the highest level of severity of all the notifications returned in this 
     * reply. 
     * minOccurs = 1
     * maxOccurs = 1
     *
     * @var SimpleType\NotificationSeverityType $HighestSeverity
     */
    protected $HighestSeverity;

    /**
     * The descriptive data regarding the results of the submitted transaction. 
     * minOccurs = 1
     * maxOccurs = unbounded
     *
     * @var Notification[] $Notifications
     */
    protected $Notifications;

    /**
     * Contains the CustomerTransactionId that was sent in the request. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var TransactionDetail|null $TransactionDetail
     */
    protected $TransactionDetail;

    /**
     * The version of this reply. 
     * minOccurs = 1
     * maxOccurs = 1
     *
     * @var VersionId $Version
     */
    protected $Version;

    /**
     * Each element contains all rate data for a single service. If service was specified in 
     * the request, there will be a single entry in this array; if service was omitted in the 
     * request, there will be a separate entry in this array for each service being compared. 
     * 
     * minOccurs = 0
     * maxOccurs = unbounded
     *
     * @var RateReplyDetail[] $RateReplyDetails
     */
    protected $RateReplyDetails = array();


    /**
     * @param SimpleType\NotificationSeverityType $highestSeverity
     * @return RateReply
     */
    public function setHighestSeverity(SimpleType\NotificationSeverityType $highestSeverity)
    {
        $this->HighestSeverity = $highestSeverity;

        return $this;
    }

    /**
     * @return SimpleType\NotificationSeverityType
     */
    public function getHighestSeverity()
    {
        return $this->HighestSeverity;
    }

    /**
     * @param Notification[] $notifications
     * @return RateReply
     */
    public function setNotifications(array $notifications)
    {
        $this->Notifications = $notifications;

        return $this;
    }

    /**
     * @return Notification[]
     */
    public function getNotifications()
    {
        return $this->Notifications;
    }

    /**
     * @param TransactionDetail|null $transactionDetail
     * @return RateReply
     */
    public function setTransactionDetail(TransactionDetail $transactionDetail = null)
    {
        $this->TransactionDetail = $transactionDetail;

        return $this;
    }

    /**
     * @return TransactionDetail|null
     */
    public function getTransactionDetail()
    {
        return $this->TransactionDetail;
    }

    /**
     * @param VersionId $version
     * @return RateReply
     */
    public function setVersion(VersionId $version)
    {
        $this->Version = $version;

        return $this;
    }

    /**
     * @return VersionId
     */
    public function getVersion()
    {
        return $this->Version;
    }

    /**
     * @param RateReplyDetail[] $rateReplyDetails
     * @return RateReply
     */
    public function setRateReplyDetails(array $rateReplyDetails = array())
    {
        $this->RateReplyDetails = $rateReplyDetails;

        return $this;
    }

    /**
     * @return RateReplyDetail[]
     */
    public function getRateReplyDetails()
    {
        return $this->RateReplyDetails;
    }


}

