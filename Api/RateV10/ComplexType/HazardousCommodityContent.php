<?php

namespace MobileCart\FedexBundle\Api\RateV10\ComplexType;

use MobileCart\FedexBundle\Api\RateV10\SimpleType;

/**
 * Documents the kind and quantity of an individual hazardous commodity in a package. 
 *
 *
 */
class HazardousCommodityContent extends ComplexTypeAbstract
{
    const CLASS_NAME = 'HazardousCommodityContent';

    /**
     * Identifies and describes an individual hazardous commodity. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var HazardousCommodityDescription|null $Description
     */
    protected $Description;

    /**
     * Specifies the amount of the commodity in alternate units. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var HazardousCommodityQuantityDetail|null $Quantity
     */
    protected $Quantity;

    /**
     * Customer-provided specifications for handling individual commodities. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var HazardousCommodityOptionDetail|null $Options
     */
    protected $Options;


    /**
     * @param HazardousCommodityDescription|null $description
     * @return HazardousCommodityContent
     */
    public function setDescription(HazardousCommodityDescription $description = null)
    {
        $this->Description = $description;

        return $this;
    }

    /**
     * @return HazardousCommodityDescription|null
     */
    public function getDescription()
    {
        return $this->Description;
    }

    /**
     * @param HazardousCommodityQuantityDetail|null $quantity
     * @return HazardousCommodityContent
     */
    public function setQuantity(HazardousCommodityQuantityDetail $quantity = null)
    {
        $this->Quantity = $quantity;

        return $this;
    }

    /**
     * @return HazardousCommodityQuantityDetail|null
     */
    public function getQuantity()
    {
        return $this->Quantity;
    }

    /**
     * @param HazardousCommodityOptionDetail|null $options
     * @return HazardousCommodityContent
     */
    public function setOptions(HazardousCommodityOptionDetail $options = null)
    {
        $this->Options = $options;

        return $this;
    }

    /**
     * @return HazardousCommodityOptionDetail|null
     */
    public function getOptions()
    {
        return $this->Options;
    }


}

