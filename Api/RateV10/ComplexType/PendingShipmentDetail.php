<?php

namespace MobileCart\FedexBundle\Api\RateV10\ComplexType;

use MobileCart\FedexBundle\Api\RateV10\SimpleType;

/**
 * This information describes the kind of pending shipment being requested. 
 *
 *
 */
class PendingShipmentDetail extends ComplexTypeAbstract
{
    const CLASS_NAME = 'PendingShipmentDetail';

    /**

     * minOccurs = 1
     * maxOccurs = 1
     *
     * @var SimpleType\PendingShipmentType $Type
     */
    protected $Type;

    /**
     * Date after which the pending shipment will no longer be available for completion. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $ExpirationDate
     */
    protected $ExpirationDate;

    /**
     * Only used with type of EMAIL. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var EMailLabelDetail|null $EmailLabelDetail
     */
    protected $EmailLabelDetail;


    /**
     * @param SimpleType\PendingShipmentType $type
     * @return PendingShipmentDetail
     */
    public function setType(SimpleType\PendingShipmentType $type)
    {
        $this->Type = $type;

        return $this;
    }

    /**
     * @return SimpleType\PendingShipmentType
     */
    public function getType()
    {
        return $this->Type;
    }

    /**
     * @param string|null $expirationDate
     * @return PendingShipmentDetail
     */
    public function setExpirationDate($expirationDate)
    {
        $this->ExpirationDate = $expirationDate;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getExpirationDate()
    {
        return $this->ExpirationDate;
    }

    /**
     * @param EMailLabelDetail|null $emailLabelDetail
     * @return PendingShipmentDetail
     */
    public function setEmailLabelDetail(EMailLabelDetail $emailLabelDetail = null)
    {
        $this->EmailLabelDetail = $emailLabelDetail;

        return $this;
    }

    /**
     * @return EMailLabelDetail|null
     */
    public function getEmailLabelDetail()
    {
        return $this->EmailLabelDetail;
    }


}

