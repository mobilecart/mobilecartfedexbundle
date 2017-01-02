<?php

namespace MobileCart\FedexBundle\Api\RateV10\ComplexType;

use MobileCart\FedexBundle\Api\RateV10\SimpleType;

/**
 * These special services are available at the package level for some or all service types. 
 * If the shipper is requesting a special service which requires additional data, the package 
 * special service type must be present in the specialServiceTypes collection, and the supporting 
 * detail must be provided in the appropriate sub-object below. 
 *
 *
 */
class PackageSpecialServicesRequested extends ComplexTypeAbstract
{
    const CLASS_NAME = 'PackageSpecialServicesRequested';

    /**
     * The types of all special services requested for the enclosing shipment or package. 
     * minOccurs = 0
     * maxOccurs = unbounded
     *
     * @var SimpleType\PackageSpecialServiceType[] $SpecialServiceTypes
     */
    protected $SpecialServiceTypes = array();

    /**
     * For use with FedEx Ground services only; COD must be present in shipment's special services. 
     * 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var CodDetail|null $CodDetail
     */
    protected $CodDetail;

    /**
     * Descriptive data required for a FedEx shipment containing dangerous materials. This 
     * element is required when SpecialServiceType.DANGEROUS_GOODS or HAZARDOUS_MATERIAL is 
     * present in the SpecialServiceTypes collection. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var DangerousGoodsDetail|null $DangerousGoodsDetail
     */
    protected $DangerousGoodsDetail;

    /**
     * Descriptive data required for a FedEx shipment containing dry ice. This element is required 
     * when SpecialServiceType.DRY_ICE is present in the SpecialServiceTypes collection. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var Weight|null $DryIceWeight
     */
    protected $DryIceWeight;

    /**
     * The descriptive data required for FedEx signature services. This element is required 
     * when SpecialServiceType.SIGNATURE_OPTION is present in the SpecialServiceTypes collection. 
     * 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SignatureOptionDetail|null $SignatureOptionDetail
     */
    protected $SignatureOptionDetail;

    /**
     * To be filled. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var PriorityAlertDetail|null $PriorityAlertDetail
     */
    protected $PriorityAlertDetail;


    /**
     * @param SimpleType\PackageSpecialServiceType[] $specialServiceTypes
     * @return PackageSpecialServicesRequested
     */
    public function setSpecialServiceTypes(array $specialServiceTypes = array())
    {
        $this->SpecialServiceTypes = $specialServiceTypes;

        return $this;
    }

    /**
     * @return SimpleType\PackageSpecialServiceType[]
     */
    public function getSpecialServiceTypes()
    {
        return $this->SpecialServiceTypes;
    }

    /**
     * @param CodDetail|null $codDetail
     * @return PackageSpecialServicesRequested
     */
    public function setCodDetail(CodDetail $codDetail = null)
    {
        $this->CodDetail = $codDetail;

        return $this;
    }

    /**
     * @return CodDetail|null
     */
    public function getCodDetail()
    {
        return $this->CodDetail;
    }

    /**
     * @param DangerousGoodsDetail|null $dangerousGoodsDetail
     * @return PackageSpecialServicesRequested
     */
    public function setDangerousGoodsDetail(DangerousGoodsDetail $dangerousGoodsDetail = null)
    {
        $this->DangerousGoodsDetail = $dangerousGoodsDetail;

        return $this;
    }

    /**
     * @return DangerousGoodsDetail|null
     */
    public function getDangerousGoodsDetail()
    {
        return $this->DangerousGoodsDetail;
    }

    /**
     * @param Weight|null $dryIceWeight
     * @return PackageSpecialServicesRequested
     */
    public function setDryIceWeight(Weight $dryIceWeight = null)
    {
        $this->DryIceWeight = $dryIceWeight;

        return $this;
    }

    /**
     * @return Weight|null
     */
    public function getDryIceWeight()
    {
        return $this->DryIceWeight;
    }

    /**
     * @param SignatureOptionDetail|null $signatureOptionDetail
     * @return PackageSpecialServicesRequested
     */
    public function setSignatureOptionDetail(SignatureOptionDetail $signatureOptionDetail = null)
    {
        $this->SignatureOptionDetail = $signatureOptionDetail;

        return $this;
    }

    /**
     * @return SignatureOptionDetail|null
     */
    public function getSignatureOptionDetail()
    {
        return $this->SignatureOptionDetail;
    }

    /**
     * @param PriorityAlertDetail|null $priorityAlertDetail
     * @return PackageSpecialServicesRequested
     */
    public function setPriorityAlertDetail(PriorityAlertDetail $priorityAlertDetail = null)
    {
        $this->PriorityAlertDetail = $priorityAlertDetail;

        return $this;
    }

    /**
     * @return PriorityAlertDetail|null
     */
    public function getPriorityAlertDetail()
    {
        return $this->PriorityAlertDetail;
    }


}

