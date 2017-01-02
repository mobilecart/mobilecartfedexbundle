<?php

namespace MobileCart\FedexBundle\Api\RateV10\ComplexType;

use MobileCart\FedexBundle\Api\RateV10\SimpleType;

/**
 *
 *
 */
class DocTabContentZone001 extends ComplexTypeAbstract
{
    const CLASS_NAME = 'DocTabContentZone001';

    /**

     * minOccurs = 1
     * maxOccurs = 12
     *
     * @var DocTabZoneSpecification[] $DocTabZoneSpecifications
     */
    protected $DocTabZoneSpecifications;


    /**
     * @param DocTabZoneSpecification[] $docTabZoneSpecifications
     * @return DocTabContentZone001
     */
    public function setDocTabZoneSpecifications(array $docTabZoneSpecifications)
    {
        $this->DocTabZoneSpecifications = $docTabZoneSpecifications;

        return $this;
    }

    /**
     * @return DocTabZoneSpecification[]
     */
    public function getDocTabZoneSpecifications()
    {
        return $this->DocTabZoneSpecifications;
    }


}

