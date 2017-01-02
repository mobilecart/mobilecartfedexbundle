<?php

namespace MobileCart\FedexBundle\Api\RateV10\ComplexType;

use MobileCart\FedexBundle\Api\RateV10\SimpleType;

/**
 * The descriptive data for a FedEx email notification recipient. 
 *
 *
 */
class EMailNotificationRecipient extends ComplexTypeAbstract
{
    const CLASS_NAME = 'EMailNotificationRecipient';

    /**
     * Identifies the relationship this email recipient has to the shipment. 
     * minOccurs = 1
     * maxOccurs = 1
     *
     * @var SimpleType\EMailNotificationRecipientType $EMailNotificationRecipientType
     */
    protected $EMailNotificationRecipientType;

    /**
     * The email address to send the notification to 
     * minOccurs = 1
     * maxOccurs = 1
     *
     * @var string $EMailAddress
     */
    protected $EMailAddress;

    /**
     * The types of email notifications being requested for this recipient. 
     * minOccurs = 0
     * maxOccurs = unbounded
     *
     * @var SimpleType\EMailNotificationEventType[] $NotificationEventsRequested
     */
    protected $NotificationEventsRequested = array();

    /**
     * The format of the email notification. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\EMailNotificationFormatType|null $Format
     */
    protected $Format;

    /**
     * The language/locale to be used in this email notification. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var Localization|null $Localization
     */
    protected $Localization;


    /**
     * @param SimpleType\EMailNotificationRecipientType $eMailNotificationRecipientType
     * @return EMailNotificationRecipient
     */
    public function setEMailNotificationRecipientType(SimpleType\EMailNotificationRecipientType $eMailNotificationRecipientType)
    {
        $this->EMailNotificationRecipientType = $eMailNotificationRecipientType;

        return $this;
    }

    /**
     * @return SimpleType\EMailNotificationRecipientType
     */
    public function getEMailNotificationRecipientType()
    {
        return $this->EMailNotificationRecipientType;
    }

    /**
     * @param string $eMailAddress
     * @return EMailNotificationRecipient
     */
    public function setEMailAddress($eMailAddress)
    {
        $this->EMailAddress = $eMailAddress;

        return $this;
    }

    /**
     * @return string
     */
    public function getEMailAddress()
    {
        return $this->EMailAddress;
    }

    /**
     * @param SimpleType\EMailNotificationEventType[] $notificationEventsRequested
     * @return EMailNotificationRecipient
     */
    public function setNotificationEventsRequested(array $notificationEventsRequested = array())
    {
        $this->NotificationEventsRequested = $notificationEventsRequested;

        return $this;
    }

    /**
     * @return SimpleType\EMailNotificationEventType[]
     */
    public function getNotificationEventsRequested()
    {
        return $this->NotificationEventsRequested;
    }

    /**
     * @param SimpleType\EMailNotificationFormatType|null $format
     * @return EMailNotificationRecipient
     */
    public function setFormat(SimpleType\EMailNotificationFormatType $format = null)
    {
        $this->Format = $format;

        return $this;
    }

    /**
     * @return SimpleType\EMailNotificationFormatType|null
     */
    public function getFormat()
    {
        return $this->Format;
    }

    /**
     * @param Localization|null $localization
     * @return EMailNotificationRecipient
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

