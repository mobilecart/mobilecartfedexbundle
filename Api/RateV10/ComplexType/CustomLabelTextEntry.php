<?php

namespace MobileCart\FedexBundle\Api\RateV10\ComplexType;

use MobileCart\FedexBundle\Api\RateV10\SimpleType;

/**
 * Constructed string, based on format and zero or more data fields, printed in specified printer 
 * font (for thermal labels) or generic font/size (for plain paper labels). 
 *
 *
 */
class CustomLabelTextEntry extends ComplexTypeAbstract
{
    const CLASS_NAME = 'CustomLabelTextEntry';

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
     * Printer-specific font name for use with thermal printer labels. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $ThermalFontId
     */
    protected $ThermalFontId;

    /**
     * Generic font name for use with plain paper labels. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $FontName
     */
    protected $FontName;

    /**
     * Generic font size for use with plain paper labels. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var integer|null $FontSize
     */
    protected $FontSize;


    /**
     * @param CustomLabelPosition|null $position
     * @return CustomLabelTextEntry
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
     * @return CustomLabelTextEntry
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
     * @return CustomLabelTextEntry
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
     * @param string|null $thermalFontId
     * @return CustomLabelTextEntry
     */
    public function setThermalFontId($thermalFontId)
    {
        $this->ThermalFontId = $thermalFontId;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getThermalFontId()
    {
        return $this->ThermalFontId;
    }

    /**
     * @param string|null $fontName
     * @return CustomLabelTextEntry
     */
    public function setFontName($fontName)
    {
        $this->FontName = $fontName;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getFontName()
    {
        return $this->FontName;
    }

    /**
     * @param integer|null $fontSize
     * @return CustomLabelTextEntry
     */
    public function setFontSize($fontSize)
    {
        $this->FontSize = $fontSize;

        return $this;
    }

    /**
     * @return integer|null
     */
    public function getFontSize()
    {
        return $this->FontSize;
    }


}

