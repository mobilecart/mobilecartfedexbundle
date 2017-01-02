<?php

namespace MobileCart\FedexBundle\Api\RateV10\ComplexType;

use MobileCart\FedexBundle\Api\RateV10\SimpleType;

/**
 * Specifies an individual recipient of e-mailed shipping document(s). 
 *
 *
 */
class ShippingDocumentEMailRecipient extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ShippingDocumentEMailRecipient';

    /**
     * Identifies the relationship of this recipient in the shipment. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\EMailNotificationRecipientType|null $RecipientType
     */
    protected $RecipientType;

    /**
     * Address to which the document is to be sent. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $Address
     */
    protected $Address;


    /**
     * @param SimpleType\EMailNotificationRecipientType|null $recipientType
     * @return ShippingDocumentEMailRecipient
     */
    public function setRecipientType(SimpleType\EMailNotificationRecipientType $recipientType = null)
    {
        $this->RecipientType = $recipientType;

        return $this;
    }

    /**
     * @return SimpleType\EMailNotificationRecipientType|null
     */
    public function getRecipientType()
    {
        return $this->RecipientType;
    }

    /**
     * @param string|null $address
     * @return ShippingDocumentEMailRecipient
     */
    public function setAddress($address)
    {
        $this->Address = $address;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getAddress()
    {
        return $this->Address;
    }


}

