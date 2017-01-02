<?php

namespace MobileCart\FedexBundle\Api\RateV10\ComplexType;

use MobileCart\FedexBundle\Api\RateV10\SimpleType;

/**
 * Data required for shipments handled under the SMART_POST and GROUND_SMART_POST service types. 
 * 
 *
 *
 */
class SmartPostShipmentDetail extends ComplexTypeAbstract
{
    const CLASS_NAME = 'SmartPostShipmentDetail';

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\SmartPostIndiciaType|null $Indicia
     */
    protected $Indicia;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\SmartPostAncillaryEndorsementType|null $AncillaryEndorsement
     */
    protected $AncillaryEndorsement;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $HubId
     */
    protected $HubId;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $CustomerManifestId
     */
    protected $CustomerManifestId;


    /**
     * @param SimpleType\SmartPostIndiciaType|null $indicia
     * @return SmartPostShipmentDetail
     */
    public function setIndicia(SimpleType\SmartPostIndiciaType $indicia = null)
    {
        $this->Indicia = $indicia;

        return $this;
    }

    /**
     * @return SimpleType\SmartPostIndiciaType|null
     */
    public function getIndicia()
    {
        return $this->Indicia;
    }

    /**
     * @param SimpleType\SmartPostAncillaryEndorsementType|null $ancillaryEndorsement
     * @return SmartPostShipmentDetail
     */
    public function setAncillaryEndorsement(SimpleType\SmartPostAncillaryEndorsementType $ancillaryEndorsement = null)
    {
        $this->AncillaryEndorsement = $ancillaryEndorsement;

        return $this;
    }

    /**
     * @return SimpleType\SmartPostAncillaryEndorsementType|null
     */
    public function getAncillaryEndorsement()
    {
        return $this->AncillaryEndorsement;
    }

    /**
     * @param string|null $hubId
     * @return SmartPostShipmentDetail
     */
    public function setHubId($hubId)
    {
        $this->HubId = $hubId;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getHubId()
    {
        return $this->HubId;
    }

    /**
     * @param string|null $customerManifestId
     * @return SmartPostShipmentDetail
     */
    public function setCustomerManifestId($customerManifestId)
    {
        $this->CustomerManifestId = $customerManifestId;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getCustomerManifestId()
    {
        return $this->CustomerManifestId;
    }


}

