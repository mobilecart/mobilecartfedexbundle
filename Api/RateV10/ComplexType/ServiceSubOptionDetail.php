<?php

namespace MobileCart\FedexBundle\Api\RateV10\ComplexType;

use MobileCart\FedexBundle\Api\RateV10\SimpleType;

/**
 * Supporting detail for applied options identified in a rate quote. 
 *
 *
 */
class ServiceSubOptionDetail extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ServiceSubOptionDetail';

    /**
     * Identifies the type of Freight Guarantee applied, if FREIGHT_GUARANTEE is applied to 
     * the rate quote. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\FreightGuaranteeType|null $FreightGuarantee
     */
    protected $FreightGuarantee;

    /**
     * Identifies the smartPostHubId used during rate quote, if SMART_POST_HUB_ID is a variable 
     * option on the rate request. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $SmartPostHubId
     */
    protected $SmartPostHubId;

    /**
     * Identifies the indicia used during rate quote, if SMART_POST_ALLOWED_INDICIA is a variable 
     * option on the rate request. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\SmartPostIndiciaType|null $SmartPostIndicia
     */
    protected $SmartPostIndicia;


    /**
     * @param SimpleType\FreightGuaranteeType|null $freightGuarantee
     * @return ServiceSubOptionDetail
     */
    public function setFreightGuarantee(SimpleType\FreightGuaranteeType $freightGuarantee = null)
    {
        $this->FreightGuarantee = $freightGuarantee;

        return $this;
    }

    /**
     * @return SimpleType\FreightGuaranteeType|null
     */
    public function getFreightGuarantee()
    {
        return $this->FreightGuarantee;
    }

    /**
     * @param string|null $smartPostHubId
     * @return ServiceSubOptionDetail
     */
    public function setSmartPostHubId($smartPostHubId)
    {
        $this->SmartPostHubId = $smartPostHubId;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getSmartPostHubId()
    {
        return $this->SmartPostHubId;
    }

    /**
     * @param SimpleType\SmartPostIndiciaType|null $smartPostIndicia
     * @return ServiceSubOptionDetail
     */
    public function setSmartPostIndicia(SimpleType\SmartPostIndiciaType $smartPostIndicia = null)
    {
        $this->SmartPostIndicia = $smartPostIndicia;

        return $this;
    }

    /**
     * @return SimpleType\SmartPostIndiciaType|null
     */
    public function getSmartPostIndicia()
    {
        return $this->SmartPostIndicia;
    }


}

