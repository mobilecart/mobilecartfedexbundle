<?php

namespace MobileCart\FedexBundle\Api\RateV10\ComplexType;

use MobileCart\FedexBundle\Api\RateV10\SimpleType;

/**
 * Specific information about the delivery of the email and options for the shipment. 
 *
 *
 */
class EMailLabelDetail extends ComplexTypeAbstract
{
    const CLASS_NAME = 'EMailLabelDetail';

    /**
     * Email address to send the URL to. 
     * minOccurs = 1
     * maxOccurs = 1
     *
     * @var string $NotificationEMailAddress
     */
    protected $NotificationEMailAddress;

    /**
     * A message to be inserted into the email. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $NotificationMessage
     */
    protected $NotificationMessage;


    /**
     * @param string $notificationEMailAddress
     * @return EMailLabelDetail
     */
    public function setNotificationEMailAddress($notificationEMailAddress)
    {
        $this->NotificationEMailAddress = $notificationEMailAddress;

        return $this;
    }

    /**
     * @return string
     */
    public function getNotificationEMailAddress()
    {
        return $this->NotificationEMailAddress;
    }

    /**
     * @param string|null $notificationMessage
     * @return EMailLabelDetail
     */
    public function setNotificationMessage($notificationMessage)
    {
        $this->NotificationMessage = $notificationMessage;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getNotificationMessage()
    {
        return $this->NotificationMessage;
    }


}

