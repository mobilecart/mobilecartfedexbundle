<?php

namespace MobileCart\FedexBundle\Api\RateV10\ComplexType;

use MobileCart\FedexBundle\Api\RateV10\SimpleType;

/**
 * Data required to complete the Destionation Control Statement for US exports. 
 *
 *
 */
class DestinationControlDetail extends ComplexTypeAbstract
{
    const CLASS_NAME = 'DestinationControlDetail';

    /**

     * minOccurs = 0
     * maxOccurs = unbounded
     *
     * @var SimpleType\DestinationControlStatementType[] $StatementTypes
     */
    protected $StatementTypes = array();

    /**
     * Comma-separated list of up to four country codes, required for DEPARTMENT_OF_STATE statement. 
     * 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $DestinationCountries
     */
    protected $DestinationCountries;

    /**
     * Name of end user, required for DEPARTMENT_OF_STATE statement. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $EndUser
     */
    protected $EndUser;


    /**
     * @param SimpleType\DestinationControlStatementType[] $statementTypes
     * @return DestinationControlDetail
     */
    public function setStatementTypes(array $statementTypes = array())
    {
        $this->StatementTypes = $statementTypes;

        return $this;
    }

    /**
     * @return SimpleType\DestinationControlStatementType[]
     */
    public function getStatementTypes()
    {
        return $this->StatementTypes;
    }

    /**
     * @param string|null $destinationCountries
     * @return DestinationControlDetail
     */
    public function setDestinationCountries($destinationCountries)
    {
        $this->DestinationCountries = $destinationCountries;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getDestinationCountries()
    {
        return $this->DestinationCountries;
    }

    /**
     * @param string|null $endUser
     * @return DestinationControlDetail
     */
    public function setEndUser($endUser)
    {
        $this->EndUser = $endUser;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getEndUser()
    {
        return $this->EndUser;
    }


}

