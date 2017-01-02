<?php

namespace MobileCart\FedexBundle\Api\RateV10\ComplexType;

use MobileCart\FedexBundle\Api\RateV10\SimpleType;

/**
 * Image to be included from printer's memory, or from a local file for offline clients. 
 *
 *
 */
class CustomLabelGraphicEntry extends ComplexTypeAbstract
{
    const CLASS_NAME = 'CustomLabelGraphicEntry';

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var CustomLabelPosition|null $Position
     */
    protected $Position;

    /**
     * Printer-specific index of graphic image to be printed. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $PrinterGraphicId
     */
    protected $PrinterGraphicId;

    /**
     * Fully-qualified path and file name for graphic image to be printed. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $FileGraphicFullName
     */
    protected $FileGraphicFullName;


    /**
     * @param CustomLabelPosition|null $position
     * @return CustomLabelGraphicEntry
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
     * @param string|null $printerGraphicId
     * @return CustomLabelGraphicEntry
     */
    public function setPrinterGraphicId($printerGraphicId)
    {
        $this->PrinterGraphicId = $printerGraphicId;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getPrinterGraphicId()
    {
        return $this->PrinterGraphicId;
    }

    /**
     * @param string|null $fileGraphicFullName
     * @return CustomLabelGraphicEntry
     */
    public function setFileGraphicFullName($fileGraphicFullName)
    {
        $this->FileGraphicFullName = $fileGraphicFullName;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getFileGraphicFullName()
    {
        return $this->FileGraphicFullName;
    }


}

