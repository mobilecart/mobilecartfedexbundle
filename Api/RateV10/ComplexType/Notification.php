<?php

namespace MobileCart\FedexBundle\Api\RateV10\ComplexType;

use MobileCart\FedexBundle\Api\RateV10\SimpleType;

/**
 * The descriptive data regarding the result of the submitted transaction. 
 *
 *
 */
class Notification extends ComplexTypeAbstract
{
    const CLASS_NAME = 'Notification';

    /**
     * The severity of this notification. This can indicate success or failure or some other 
     * information about the request. The values that can be returned are SUCCESS - Your transaction 
     * succeeded with no other applicable information. NOTE - Additional information that may 
     * be of interest to you about your transaction. WARNING - Additional information that 
     * you need to know about your transaction that you may need to take action on. ERROR - 
     * Information about an error that occurred while processing your transaction. FAILURE 
     * - FedEx was unable to process your transaction at this time due to a system failure. 
     * Please try again later 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\NotificationSeverityType|null $Severity
     */
    protected $Severity;

    /**
     * Indicates the source of this notification. Combined with the Code it uniquely identifies 
     * this notification 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $Source
     */
    protected $Source;

    /**
     * A code that represents this notification. Combined with the Source it uniquely identifies 
     * this notification. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $Code
     */
    protected $Code;

    /**
     * Human-readable text that explains this notification. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $Message
     */
    protected $Message;

    /**
     * The translated message. The language and locale specified in the ClientDetail. Localization 
     * are used to determine the representation. Currently only supported in a TrackReply. 
     * 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $LocalizedMessage
     */
    protected $LocalizedMessage;

    /**
     * A collection of name/value pairs that provide specific data to help the client determine 
     * the nature of an error (or warning, etc.) witout having to parse the message string. 
     * 
     * minOccurs = 0
     * maxOccurs = unbounded
     *
     * @var NotificationParameter[] $MessageParameters
     */
    protected $MessageParameters = array();


    /**
     * @param SimpleType\NotificationSeverityType|null $severity
     * @return Notification
     */
    public function setSeverity(SimpleType\NotificationSeverityType $severity = null)
    {
        $this->Severity = $severity;

        return $this;
    }

    /**
     * @return SimpleType\NotificationSeverityType|null
     */
    public function getSeverity()
    {
        return $this->Severity;
    }

    /**
     * @param string|null $source
     * @return Notification
     */
    public function setSource($source)
    {
        $this->Source = $source;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getSource()
    {
        return $this->Source;
    }

    /**
     * @param string|null $code
     * @return Notification
     */
    public function setCode($code)
    {
        $this->Code = $code;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getCode()
    {
        return $this->Code;
    }

    /**
     * @param string|null $message
     * @return Notification
     */
    public function setMessage($message)
    {
        $this->Message = $message;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getMessage()
    {
        return $this->Message;
    }

    /**
     * @param string|null $localizedMessage
     * @return Notification
     */
    public function setLocalizedMessage($localizedMessage)
    {
        $this->LocalizedMessage = $localizedMessage;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getLocalizedMessage()
    {
        return $this->LocalizedMessage;
    }

    /**
     * @param NotificationParameter[] $messageParameters
     * @return Notification
     */
    public function setMessageParameters(array $messageParameters = array())
    {
        $this->MessageParameters = $messageParameters;

        return $this;
    }

    /**
     * @return NotificationParameter[]
     */
    public function getMessageParameters()
    {
        return $this->MessageParameters;
    }


}

