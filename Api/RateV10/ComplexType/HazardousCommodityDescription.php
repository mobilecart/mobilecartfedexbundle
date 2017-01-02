<?php

namespace MobileCart\FedexBundle\Api\RateV10\ComplexType;

use MobileCart\FedexBundle\Api\RateV10\SimpleType;

/**
 * Identifies and describes an individual hazardous commodity. For 201001 load, this is based 
 * on data from the FedEx Ground Hazardous Materials Shipping Guide. 
 *
 *
 */
class HazardousCommodityDescription extends ComplexTypeAbstract
{
    const CLASS_NAME = 'HazardousCommodityDescription';

    /**
     * Regulatory identifier for a commodity (e.g. "UN ID" value). 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $Id
     */
    protected $Id;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\HazardousCommodityPackingGroupType|null $PackingGroup
     */
    protected $PackingGroup;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $ProperShippingName
     */
    protected $ProperShippingName;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $TechnicalName
     */
    protected $TechnicalName;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $HazardClass
     */
    protected $HazardClass;

    /**

     * minOccurs = 0
     * maxOccurs = unbounded
     *
     * @var string[] $SubsidiaryClasses
     */
    protected $SubsidiaryClasses = array();

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $LabelText
     */
    protected $LabelText;


    /**
     * @param string|null $id
     * @return HazardousCommodityDescription
     */
    public function setId($id)
    {
        $this->Id = $id;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * @param SimpleType\HazardousCommodityPackingGroupType|null $packingGroup
     * @return HazardousCommodityDescription
     */
    public function setPackingGroup(SimpleType\HazardousCommodityPackingGroupType $packingGroup = null)
    {
        $this->PackingGroup = $packingGroup;

        return $this;
    }

    /**
     * @return SimpleType\HazardousCommodityPackingGroupType|null
     */
    public function getPackingGroup()
    {
        return $this->PackingGroup;
    }

    /**
     * @param string|null $properShippingName
     * @return HazardousCommodityDescription
     */
    public function setProperShippingName($properShippingName)
    {
        $this->ProperShippingName = $properShippingName;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getProperShippingName()
    {
        return $this->ProperShippingName;
    }

    /**
     * @param string|null $technicalName
     * @return HazardousCommodityDescription
     */
    public function setTechnicalName($technicalName)
    {
        $this->TechnicalName = $technicalName;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getTechnicalName()
    {
        return $this->TechnicalName;
    }

    /**
     * @param string|null $hazardClass
     * @return HazardousCommodityDescription
     */
    public function setHazardClass($hazardClass)
    {
        $this->HazardClass = $hazardClass;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getHazardClass()
    {
        return $this->HazardClass;
    }

    /**
     * @param string[] $subsidiaryClasses
     * @return HazardousCommodityDescription
     */
    public function setSubsidiaryClasses(array $subsidiaryClasses = array())
    {
        $this->SubsidiaryClasses = $subsidiaryClasses;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getSubsidiaryClasses()
    {
        return $this->SubsidiaryClasses;
    }

    /**
     * @param string|null $labelText
     * @return HazardousCommodityDescription
     */
    public function setLabelText($labelText)
    {
        $this->LabelText = $labelText;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getLabelText()
    {
        return $this->LabelText;
    }


}

