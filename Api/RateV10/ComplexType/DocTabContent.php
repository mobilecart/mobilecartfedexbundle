<?php

namespace MobileCart\FedexBundle\Api\RateV10\ComplexType;

use MobileCart\FedexBundle\Api\RateV10\SimpleType;

/**
 *
 *
 */
class DocTabContent extends ComplexTypeAbstract
{
    const CLASS_NAME = 'DocTabContent';

    /**
     * The DocTabContentType options available. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\DocTabContentType|null $DocTabContentType
     */
    protected $DocTabContentType;

    /**
     * The DocTabContentType should be set to ZONE001 to specify additional Zone details. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var DocTabContentZone001|null $Zone001
     */
    protected $Zone001;

    /**
     * The DocTabContentType should be set to BARCODED to specify additional BarCoded details. 
     * 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var DocTabContentBarcoded|null $Barcoded
     */
    protected $Barcoded;


    /**
     * @param SimpleType\DocTabContentType|null $docTabContentType
     * @return DocTabContent
     */
    public function setDocTabContentType(SimpleType\DocTabContentType $docTabContentType = null)
    {
        $this->DocTabContentType = $docTabContentType;

        return $this;
    }

    /**
     * @return SimpleType\DocTabContentType|null
     */
    public function getDocTabContentType()
    {
        return $this->DocTabContentType;
    }

    /**
     * @param DocTabContentZone001|null $zone001
     * @return DocTabContent
     */
    public function setZone001(DocTabContentZone001 $zone001 = null)
    {
        $this->Zone001 = $zone001;

        return $this;
    }

    /**
     * @return DocTabContentZone001|null
     */
    public function getZone001()
    {
        return $this->Zone001;
    }

    /**
     * @param DocTabContentBarcoded|null $barcoded
     * @return DocTabContent
     */
    public function setBarcoded(DocTabContentBarcoded $barcoded = null)
    {
        $this->Barcoded = $barcoded;

        return $this;
    }

    /**
     * @return DocTabContentBarcoded|null
     */
    public function getBarcoded()
    {
        return $this->Barcoded;
    }


}

