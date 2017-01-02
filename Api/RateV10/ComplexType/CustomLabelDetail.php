<?php

namespace MobileCart\FedexBundle\Api\RateV10\ComplexType;

use MobileCart\FedexBundle\Api\RateV10\SimpleType;

/**
 *
 *
 */
class CustomLabelDetail extends ComplexTypeAbstract
{
    const CLASS_NAME = 'CustomLabelDetail';

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\CustomLabelCoordinateUnits|null $CoordinateUnits
     */
    protected $CoordinateUnits;

    /**

     * minOccurs = 0
     * maxOccurs = unbounded
     *
     * @var CustomLabelTextEntry[] $TextEntries
     */
    protected $TextEntries = array();

    /**

     * minOccurs = 0
     * maxOccurs = unbounded
     *
     * @var CustomLabelGraphicEntry[] $GraphicEntries
     */
    protected $GraphicEntries = array();

    /**

     * minOccurs = 0
     * maxOccurs = unbounded
     *
     * @var CustomLabelBoxEntry[] $BoxEntries
     */
    protected $BoxEntries = array();

    /**

     * minOccurs = 0
     * maxOccurs = unbounded
     *
     * @var CustomLabelBarcodeEntry[] $BarcodeEntries
     */
    protected $BarcodeEntries = array();


    /**
     * @param SimpleType\CustomLabelCoordinateUnits|null $coordinateUnits
     * @return CustomLabelDetail
     */
    public function setCoordinateUnits(SimpleType\CustomLabelCoordinateUnits $coordinateUnits = null)
    {
        $this->CoordinateUnits = $coordinateUnits;

        return $this;
    }

    /**
     * @return SimpleType\CustomLabelCoordinateUnits|null
     */
    public function getCoordinateUnits()
    {
        return $this->CoordinateUnits;
    }

    /**
     * @param CustomLabelTextEntry[] $textEntries
     * @return CustomLabelDetail
     */
    public function setTextEntries(array $textEntries = array())
    {
        $this->TextEntries = $textEntries;

        return $this;
    }

    /**
     * @return CustomLabelTextEntry[]
     */
    public function getTextEntries()
    {
        return $this->TextEntries;
    }

    /**
     * @param CustomLabelGraphicEntry[] $graphicEntries
     * @return CustomLabelDetail
     */
    public function setGraphicEntries(array $graphicEntries = array())
    {
        $this->GraphicEntries = $graphicEntries;

        return $this;
    }

    /**
     * @return CustomLabelGraphicEntry[]
     */
    public function getGraphicEntries()
    {
        return $this->GraphicEntries;
    }

    /**
     * @param CustomLabelBoxEntry[] $boxEntries
     * @return CustomLabelDetail
     */
    public function setBoxEntries(array $boxEntries = array())
    {
        $this->BoxEntries = $boxEntries;

        return $this;
    }

    /**
     * @return CustomLabelBoxEntry[]
     */
    public function getBoxEntries()
    {
        return $this->BoxEntries;
    }

    /**
     * @param CustomLabelBarcodeEntry[] $barcodeEntries
     * @return CustomLabelDetail
     */
    public function setBarcodeEntries(array $barcodeEntries = array())
    {
        $this->BarcodeEntries = $barcodeEntries;

        return $this;
    }

    /**
     * @return CustomLabelBarcodeEntry[]
     */
    public function getBarcodeEntries()
    {
        return $this->BarcodeEntries;
    }


}

