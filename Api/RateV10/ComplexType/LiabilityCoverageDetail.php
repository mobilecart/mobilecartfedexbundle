<?php

namespace MobileCart\FedexBundle\Api\RateV10\ComplexType;

use MobileCart\FedexBundle\Api\RateV10\SimpleType;

/**
 *
 *
 */
class LiabilityCoverageDetail extends ComplexTypeAbstract
{
    const CLASS_NAME = 'LiabilityCoverageDetail';

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\LiabilityCoverageType|null $CoverageType
     */
    protected $CoverageType;

    /**
     * Identifies the Liability Coverage Amount. For Jan 2010 this value represents coverage 
     * amount per pound 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var Money|null $CoverageAmount
     */
    protected $CoverageAmount;


    /**
     * @param SimpleType\LiabilityCoverageType|null $coverageType
     * @return LiabilityCoverageDetail
     */
    public function setCoverageType(SimpleType\LiabilityCoverageType $coverageType = null)
    {
        $this->CoverageType = $coverageType;

        return $this;
    }

    /**
     * @return SimpleType\LiabilityCoverageType|null
     */
    public function getCoverageType()
    {
        return $this->CoverageType;
    }

    /**
     * @param Money|null $coverageAmount
     * @return LiabilityCoverageDetail
     */
    public function setCoverageAmount(Money $coverageAmount = null)
    {
        $this->CoverageAmount = $coverageAmount;

        return $this;
    }

    /**
     * @return Money|null
     */
    public function getCoverageAmount()
    {
        return $this->CoverageAmount;
    }


}

