<?php

namespace MobileCart\FedexBundle\Api\RateV10\ComplexType;

use MobileCart\FedexBundle\Api\RateV10\SimpleType;

/**
 * Specifies how to e-mail shipping documents. 
 *
 *
 */
class ShippingDocumentEMailDetail extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ShippingDocumentEMailDetail';

    /**
     * Provides the roles and email addresses for e-mail recipients. 
     * minOccurs = 0
     * maxOccurs = unbounded
     *
     * @var ShippingDocumentEMailRecipient[] $EMailRecipients
     */
    protected $EMailRecipients = array();

    /**
     * Identifies the convention by which documents are to be grouped as e-mail attachments. 
     * 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\ShippingDocumentEMailGroupingType|null $Grouping
     */
    protected $Grouping;


    /**
     * @param ShippingDocumentEMailRecipient[] $eMailRecipients
     * @return ShippingDocumentEMailDetail
     */
    public function setEMailRecipients(array $eMailRecipients = array())
    {
        $this->EMailRecipients = $eMailRecipients;

        return $this;
    }

    /**
     * @return ShippingDocumentEMailRecipient[]
     */
    public function getEMailRecipients()
    {
        return $this->EMailRecipients;
    }

    /**
     * @param SimpleType\ShippingDocumentEMailGroupingType|null $grouping
     * @return ShippingDocumentEMailDetail
     */
    public function setGrouping(SimpleType\ShippingDocumentEMailGroupingType $grouping = null)
    {
        $this->Grouping = $grouping;

        return $this;
    }

    /**
     * @return SimpleType\ShippingDocumentEMailGroupingType|null
     */
    public function getGrouping()
    {
        return $this->Grouping;
    }


}

