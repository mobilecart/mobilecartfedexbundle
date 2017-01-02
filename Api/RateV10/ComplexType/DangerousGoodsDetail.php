<?php

namespace MobileCart\FedexBundle\Api\RateV10\ComplexType;

use MobileCart\FedexBundle\Api\RateV10\SimpleType;

/**
 * The descriptive data required for a FedEx shipment containing dangerous goods (hazardous 
 * materials). 
 *
 *
 */
class DangerousGoodsDetail extends ComplexTypeAbstract
{
    const CLASS_NAME = 'DangerousGoodsDetail';

    /**
     * Identifies whether or not the products being shipped are required to be accessible during 
     * delivery. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\DangerousGoodsAccessibilityType|null $Accessibility
     */
    protected $Accessibility;

    /**
     * Shipment is packaged/documented for movement ONLY on cargo aircraft. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var boolean|null $CargoAircraftOnly
     */
    protected $CargoAircraftOnly;

    /**
     * Indicates which kinds of hazardous content are in the current package. 
     * minOccurs = 0
     * maxOccurs = unbounded
     *
     * @var SimpleType\HazardousCommodityOptionType[] $Options
     */
    protected $Options = array();

    /**
     * Documents the kinds and quantities of all hazardous commodities in the current package. 
     * 
     * minOccurs = 0
     * maxOccurs = unbounded
     *
     * @var HazardousCommodityContent[] $HazardousCommodities
     */
    protected $HazardousCommodities = array();

    /**
     * Description of the packaging of this commodity, suitable for use on OP-900 and OP-950 
     * forms. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var HazardousCommodityPackagingDetail|null $Packaging
     */
    protected $Packaging;

    /**
     * Telephone number to use for contact in the event of an emergency. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $EmergencyContactNumber
     */
    protected $EmergencyContactNumber;

    /**
     * Offeror's name or contract number, per DOT regulation. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $Offeror
     */
    protected $Offeror;


    /**
     * @param SimpleType\DangerousGoodsAccessibilityType|null $accessibility
     * @return DangerousGoodsDetail
     */
    public function setAccessibility(SimpleType\DangerousGoodsAccessibilityType $accessibility = null)
    {
        $this->Accessibility = $accessibility;

        return $this;
    }

    /**
     * @return SimpleType\DangerousGoodsAccessibilityType|null
     */
    public function getAccessibility()
    {
        return $this->Accessibility;
    }

    /**
     * @param boolean|null $cargoAircraftOnly
     * @return DangerousGoodsDetail
     */
    public function setCargoAircraftOnly($cargoAircraftOnly)
    {
        $this->CargoAircraftOnly = $cargoAircraftOnly;

        return $this;
    }

    /**
     * @return boolean|null
     */
    public function getCargoAircraftOnly()
    {
        return $this->CargoAircraftOnly;
    }

    /**
     * @param SimpleType\HazardousCommodityOptionType[] $options
     * @return DangerousGoodsDetail
     */
    public function setOptions(array $options = array())
    {
        $this->Options = $options;

        return $this;
    }

    /**
     * @return SimpleType\HazardousCommodityOptionType[]
     */
    public function getOptions()
    {
        return $this->Options;
    }

    /**
     * @param HazardousCommodityContent[] $hazardousCommodities
     * @return DangerousGoodsDetail
     */
    public function setHazardousCommodities(array $hazardousCommodities = array())
    {
        $this->HazardousCommodities = $hazardousCommodities;

        return $this;
    }

    /**
     * @return HazardousCommodityContent[]
     */
    public function getHazardousCommodities()
    {
        return $this->HazardousCommodities;
    }

    /**
     * @param HazardousCommodityPackagingDetail|null $packaging
     * @return DangerousGoodsDetail
     */
    public function setPackaging(HazardousCommodityPackagingDetail $packaging = null)
    {
        $this->Packaging = $packaging;

        return $this;
    }

    /**
     * @return HazardousCommodityPackagingDetail|null
     */
    public function getPackaging()
    {
        return $this->Packaging;
    }

    /**
     * @param string|null $emergencyContactNumber
     * @return DangerousGoodsDetail
     */
    public function setEmergencyContactNumber($emergencyContactNumber)
    {
        $this->EmergencyContactNumber = $emergencyContactNumber;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getEmergencyContactNumber()
    {
        return $this->EmergencyContactNumber;
    }

    /**
     * @param string|null $offeror
     * @return DangerousGoodsDetail
     */
    public function setOfferor($offeror)
    {
        $this->Offeror = $offeror;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getOfferor()
    {
        return $this->Offeror;
    }


}

