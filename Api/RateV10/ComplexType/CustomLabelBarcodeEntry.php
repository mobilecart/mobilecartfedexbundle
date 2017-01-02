<?php

namespace MobileCart\FedexBundle\Api\RateV10\ComplexType;

use MobileCart\FedexBundle\Api\RateV10\SimpleType;

/**
 * Constructed string, based on format and zero or more data fields, printed in specified barcode 
 * symbology. 
 *
 *
 */
class CustomLabelBarcodeEntry extends ComplexTypeAbstract
{
    const CLASS_NAME = 'CustomLabelBarcodeEntry';

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var CustomLabelPosition|null $Position
     */
    protected $Position;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $Format
     */
    protected $Format;

    /**

     * minOccurs = 0
     * maxOccurs = unbounded
     *
     * @var string[] $DataFields
     */
    protected $DataFields = array();

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var integer|null $BarHeight
     */
    protected $BarHeight;

    /**
     * Width of thinnest bar/space element in the barcode. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var integer|null $ThinBarWidth
     */
    protected $ThinBarWidth;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\BarcodeSymbologyType|null $BarcodeSymbology
     */
    protected $BarcodeSymbology;


    /**
     * @param CustomLabelPosition|null $position
     * @return CustomLabelBarcodeEntry
     */
    public function setPosition(CustomLabelPosition $position = null)
    {
        $this->Position = $position;

        return $this;
    }

    /**
     * @return CustomLabelPosition|null
     */
    public function getPosition()
    {
        return $this->Position;
    }

    /**
     * @param string|null $format
     * @return CustomLabelBarcodeEntry
     */
    public function setFormat($format)
    {
        $this->Format = $format;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getFormat()
    {
        return $this->Format;
    }

    /**
     * @param string[] $dataFields
     * @return CustomLabelBarcodeEntry
     */
    public function setDataFields(array $dataFields = array())
    {
        $this->DataFields = $dataFields;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getDataFields()
    {
        return $this->DataFields;
    }

    /**
     * @param integer|null $barHeight
     * @return CustomLabelBarcodeEntry
     */
    public function setBarHeight($barHeight)
    {
        $this->BarHeight = $barHeight;

        return $this;
    }

    /**
     * @return integer|null
     */
    public function getBarHeight()
    {
        return $this->BarHeight;
    }

    /**
     * @param integer|null $thinBarWidth
     * @return CustomLabelBarcodeEntry
     */
    public function setThinBarWidth($thinBarWidth)
    {
        $this->ThinBarWidth = $thinBarWidth;

        return $this;
    }

    /**
     * @return integer|null
     */
    public function getThinBarWidth()
    {
        return $this->ThinBarWidth;
    }

    /**
     * @param SimpleType\BarcodeSymbologyType|null $barcodeSymbology
     * @return CustomLabelBarcodeEntry
     */
    public function setBarcodeSymbology(SimpleType\BarcodeSymbologyType $barcodeSymbology = null)
    {
        $this->BarcodeSymbology = $barcodeSymbology;

        return $this;
    }

    /**
     * @return SimpleType\BarcodeSymbologyType|null
     */
    public function getBarcodeSymbology()
    {
        return $this->BarcodeSymbology;
    }


}

