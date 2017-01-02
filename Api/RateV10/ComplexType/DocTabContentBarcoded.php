<?php

namespace MobileCart\FedexBundle\Api\RateV10\ComplexType;

use MobileCart\FedexBundle\Api\RateV10\SimpleType;

/**
 *
 *
 */
class DocTabContentBarcoded extends ComplexTypeAbstract
{
    const CLASS_NAME = 'DocTabContentBarcoded';

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\BarcodeSymbologyType|null $Symbology
     */
    protected $Symbology;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var DocTabZoneSpecification|null $Specification
     */
    protected $Specification;


    /**
     * @param SimpleType\BarcodeSymbologyType|null $symbology
     * @return DocTabContentBarcoded
     */
    public function setSymbology(SimpleType\BarcodeSymbologyType $symbology = null)
    {
        $this->Symbology = $symbology;

        return $this;
    }

    /**
     * @return SimpleType\BarcodeSymbologyType|null
     */
    public function getSymbology()
    {
        return $this->Symbology;
    }

    /**
     * @param DocTabZoneSpecification|null $specification
     * @return DocTabContentBarcoded
     */
    public function setSpecification(DocTabZoneSpecification $specification = null)
    {
        $this->Specification = $specification;

        return $this;
    }

    /**
     * @return DocTabZoneSpecification|null
     */
    public function getSpecification()
    {
        return $this->Specification;
    }


}

