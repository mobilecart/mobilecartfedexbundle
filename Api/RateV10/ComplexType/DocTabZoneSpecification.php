<?php

namespace MobileCart\FedexBundle\Api\RateV10\ComplexType;

use MobileCart\FedexBundle\Api\RateV10\SimpleType;

/**
 *
 *
 */
class DocTabZoneSpecification extends ComplexTypeAbstract
{
    const CLASS_NAME = 'DocTabZoneSpecification';

    /**
     * Zone number can be between 1 and 12. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var integer|null $ZoneNumber
     */
    protected $ZoneNumber;

    /**
     * Header value on this zone. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $Header
     */
    protected $Header;

    /**
     * Reference path to the element in the request/reply whose value should be printed on 
     * this zone. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $DataField
     */
    protected $DataField;

    /**
     * Free form-text to be printed in this zone. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $LiteralValue
     */
    protected $LiteralValue;

    /**
     * Justification for the text printed on this zone. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\DocTabZoneJustificationType|null $Justification
     */
    protected $Justification;


    /**
     * @param integer|null $zoneNumber
     * @return DocTabZoneSpecification
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
     * @return DocTabZoneSpecification
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
     * @return DocTabZoneSpecification
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
     * @return DocTabZoneSpecification
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

    /**
     * @param SimpleType\DocTabZoneJustificationType|null $justification
     * @return DocTabZoneSpecification
     */
    public function setJustification(SimpleType\DocTabZoneJustificationType $justification = null)
    {
        $this->Justification = $justification;

        return $this;
    }

    /**
     * @return SimpleType\DocTabZoneJustificationType|null
     */
    public function getJustification()
    {
        return $this->Justification;
    }


}

