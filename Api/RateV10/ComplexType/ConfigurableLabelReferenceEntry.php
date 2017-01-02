<?php

namespace MobileCart\FedexBundle\Api\RateV10\ComplexType;

use MobileCart\FedexBundle\Api\RateV10\SimpleType;

/**
 * Defines additional data to print in the Configurable portion of the label, this allows you 
 * to print the same type information on the label that can also be printed on the doc tab. 
 * 
 *
 *
 */
class ConfigurableLabelReferenceEntry extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ConfigurableLabelReferenceEntry';

    /**
     * 1 of 12 possible zones to  position data. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var integer|null $ZoneNumber
     */
    protected $ZoneNumber;

    /**
     * The identifiying text for the data in this zone. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $Header
     */
    protected $Header;

    /**
     * A reference to a field in either the request or reply to print in this zone following 
     * the header. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $DataField
     */
    protected $DataField;

    /**
     * A literal value to print after the header in this zone. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $LiteralValue
     */
    protected $LiteralValue;


    /**
     * @param integer|null $zoneNumber
     * @return ConfigurableLabelReferenceEntry
     */
    public function setZoneNumber($zoneNumber)
    {
        $this->ZoneNumber = $zoneNumber;

        return $this;
    }

    /**
     * @return integer|null
     */
    public function getZoneNumber()
    {
        return $this->ZoneNumber;
    }

    /**
     * @param string|null $header
     * @return ConfigurableLabelReferenceEntry
     */
    public function setHeader($header)
    {
        $this->Header = $header;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getHeader()
    {
        return $this->Header;
    }

    /**
     * @param string|null $dataField
     * @return ConfigurableLabelReferenceEntry
     */
    public function setDataField($dataField)
    {
        $this->DataField = $dataField;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getDataField()
    {
        return $this->DataField;
    }

    /**
     * @param string|null $literalValue
     * @return ConfigurableLabelReferenceEntry
     */
    public function setLiteralValue($literalValue)
    {
        $this->LiteralValue = $literalValue;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getLiteralValue()
    {
        return $this->LiteralValue;
    }


}

