<?php

namespace MobileCart\FedexBundle\Api\RateV10\ComplexType;

use MobileCart\FedexBundle\Api\RateV10\SimpleType;

/**
 * This definition of variable handling charge detail is intended for use in Jan 2011 corp 
 * load. 
 *
 *
 */
class VariableHandlingChargeDetail extends ComplexTypeAbstract
{
    const CLASS_NAME = 'VariableHandlingChargeDetail';

    /**
     * Used with Variable handling charge type of FIXED_VALUE. Contains the amount to be added 
     * to the freight charge. Contains 2 explicit decimal positions with a total max length 
     * of 10 including the decimal. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var Money|null $FixedValue
     */
    protected $FixedValue;

    /**
     * Actual percentage (10 means 10%, which is a mutiplier of 0.1) 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var float|null $PercentValue
     */
    protected $PercentValue;

    /**
     * Select the value from a set of rate data to which the percentage is applied. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\RateElementBasisType|null $RateElementBasis
     */
    protected $RateElementBasis;

    /**
     * Select the type of rate from which the element is to be selected. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\RateTypeBasisType|null $RateTypeBasis
     */
    protected $RateTypeBasis;


    /**
     * @param Money|null $fixedValue
     * @return VariableHandlingChargeDetail
     */
    public function setFixedValue(Money $fixedValue = null)
    {
        $this->FixedValue = $fixedValue;

        return $this;
    }

    /**
     * @return Money|null
     */
    public function getFixedValue()
    {
        return $this->FixedValue;
    }

    /**
     * @param float|null $percentValue
     * @return VariableHandlingChargeDetail
     */
    public function setPercentValue($percentValue)
    {
        $this->PercentValue = $percentValue;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getPercentValue()
    {
        return $this->PercentValue;
    }

    /**
     * @param SimpleType\RateElementBasisType|null $rateElementBasis
     * @return VariableHandlingChargeDetail
     */
    public function setRateElementBasis(SimpleType\RateElementBasisType $rateElementBasis = null)
    {
        $this->RateElementBasis = $rateElementBasis;

        return $this;
    }

    /**
     * @return SimpleType\RateElementBasisType|null
     */
    public function getRateElementBasis()
    {
        return $this->RateElementBasis;
    }

    /**
     * @param SimpleType\RateTypeBasisType|null $rateTypeBasis
     * @return VariableHandlingChargeDetail
     */
    public function setRateTypeBasis(SimpleType\RateTypeBasisType $rateTypeBasis = null)
    {
        $this->RateTypeBasis = $rateTypeBasis;

        return $this;
    }

    /**
     * @return SimpleType\RateTypeBasisType|null
     */
    public function getRateTypeBasis()
    {
        return $this->RateTypeBasis;
    }


}

