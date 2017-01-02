<?php

namespace MobileCart\FedexBundle\Api\RateV10\ComplexType;

use MobileCart\FedexBundle\Api\RateV10\SimpleType;

/**
 * The variable handling charges calculated based on the type variable handling charges requested. 
 * 
 *
 *
 */
class VariableHandlingCharges extends ComplexTypeAbstract
{
    const CLASS_NAME = 'VariableHandlingCharges';

    /**
     * The variable handling charge amount calculated based on the requested variable handling 
     * charge detail. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var Money|null $VariableHandlingCharge
     */
    protected $VariableHandlingCharge;

    /**
     * The calculated varibale handling charge plus the net charge. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var Money|null $TotalCustomerCharge
     */
    protected $TotalCustomerCharge;


    /**
     * @param Money|null $variableHandlingCharge
     * @return VariableHandlingCharges
     */
    public function setVariableHandlingCharge(Money $variableHandlingCharge = null)
    {
        $this->VariableHandlingCharge = $variableHandlingCharge;

        return $this;
    }

    /**
     * @return Money|null
     */
    public function getVariableHandlingCharge()
    {
        return $this->VariableHandlingCharge;
    }

    /**
     * @param Money|null $totalCustomerCharge
     * @return VariableHandlingCharges
     */
    public function setTotalCustomerCharge(Money $totalCustomerCharge = null)
    {
        $this->TotalCustomerCharge = $totalCustomerCharge;

        return $this;
    }

    /**
     * @return Money|null
     */
    public function getTotalCustomerCharge()
    {
        return $this->TotalCustomerCharge;
    }


}

