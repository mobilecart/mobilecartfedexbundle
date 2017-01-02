<?php

namespace MobileCart\FedexBundle\Api\RateV10\ComplexType;

use MobileCart\FedexBundle\Api\RateV10\SimpleType;

/**
 * Information describing email notifications that will be sent in relation to events that 
 * occur during package movement 
 *
 *
 */
class EMailNotificationDetail extends ComplexTypeAbstract
{
    const CLASS_NAME = 'EMailNotificationDetail';

    /**
     * A message that will be included in the email notifications 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $PersonalMessage
     */
    protected $PersonalMessage;

    /**
     * Information describing the destination of the email, format of the email and events 
     * to be notified on 
     * minOccurs = 0
     * maxOccurs = 6
     *
     * @var EMailNotificationRecipient[] $Recipients
     */
    protected $Recipients = array();


    /**
     * @param string|null $personalMessage
     * @return EMailNotificationDetail
     */
    public function setPersonalMessage($personalMessage)
    {
        $this->PersonalMessage = $personalMessage;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getPersonalMessage()
    {
        return $this->PersonalMessage;
    }

    /**
     * @param EMailNotificationRecipient[] $recipients
     * @return EMailNotificationDetail
     */
    public function setRecipients(array $recipients = array())
    {
        $this->Recipients = $recipients;

        return $this;
    }

    /**
     * @return EMailNotificationRecipient[]
     */
    public function getRecipients()
    {
        return $this->Recipients;
    }


}

