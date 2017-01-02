<?php

namespace MobileCart\FedexBundle\Api\RateV10\ComplexType;

use MobileCart\FedexBundle\Api\RateV10\SimpleType;

/**
 * Description of an individual commodity or class of content in a shipment. 
 *
 *
 */
class FreightShipmentLineItem extends ComplexTypeAbstract
{
    const CLASS_NAME = 'FreightShipmentLineItem';

    /**
     * Freight class for this line item. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\FreightClassType|null $FreightClass
     */
    protected $FreightClass;

    /**
     * Specification of handling-unit packaging for this commodity or class line. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\PhysicalPackagingType|null $Packaging
     */
    protected $Packaging;

    /**
     * Customer-provided description for this commodity or class line. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $Description
     */
    protected $Description;

    /**
     * Weight for this commodity or class line. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var Weight|null $Weight
     */
    protected $Weight;

    /**
     * FED EX INTERNAL USE ONLY - Individual line item dimensions. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var Dimensions|null $Dimensions
     */
    protected $Dimensions;

    /**
     * Volume (cubic measure) for this commodity or class line. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var Volume|null $Volume
     */
    protected $Volume;


    /**
     * @param SimpleType\FreightClassType|null $freightClass
     * @return FreightShipmentLineItem
     */
    public function setFreightClass(SimpleType\FreightClassType $freightClass = null)
    {
        $this->FreightClass = $freightClass;

        return $this;
    }

    /**
     * @return SimpleType\FreightClassType|null
     */
    public function getFreightClass()
    {
        return $this->FreightClass;
    }

    /**
     * @param SimpleType\PhysicalPackagingType|null $packaging
     * @return FreightShipmentLineItem
     */
    public function setPackaging(SimpleType\PhysicalPackagingType $packaging = null)
    {
        $this->Packaging = $packaging;

        return $this;
    }

    /**
     * @return SimpleType\PhysicalPackagingType|null
     */
    public function getPackaging()
    {
        return $this->Packaging;
    }

    /**
     * @param string|null $description
     * @return FreightShipmentLineItem
     */
    public function setDescription($description)
    {
        $this->Description = $description;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getDescription()
    {
        return $this->Description;
    }

    /**
     * @param Weight|null $weight
     * @return FreightShipmentLineItem
     */
    public function setWeight(Weight $weight = null)
    {
        $this->Weight = $weight;

        return $this;
    }

    /**
     * @return Weight|null
     */
    public function getWeight()
    {
        return $this->Weight;
    }

    /**
     * @param Dimensions|null $dimensions
     * @return FreightShipmentLineItem
     */
    public function setDimensions(Dimensions $dimensions = null)
    {
        $this->Dimensions = $dimensions;

        return $this;
    }

    /**
     * @return Dimensions|null
     */
    public function getDimensions()
    {
        return $this->Dimensions;
    }

    /**
     * @param Volume|null $volume
     * @return FreightShipmentLineItem
     */
    public function setVolume(Volume $volume = null)
    {
        $this->Volume = $volume;

        return $this;
    }

    /**
     * @return Volume|null
     */
    public function getVolume()
    {
        return $this->Volume;
    }


}

