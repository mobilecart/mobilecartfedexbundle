<?php

namespace MobileCart\FedexBundle\Api\RateV10\ComplexType;

use MobileCart\FedexBundle\Api\RateV10\SimpleType;

/**
 *
 *
 */
class CodAddTransportationChargesDetail extends ComplexTypeAbstract
{
    const CLASS_NAME = 'CodAddTransportationChargesDetail';

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\RateTypeBasisType|null $RateTypeBasis
     */
    protected $RateTypeBasis;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\CodAddTransportationChargeBasisType|null $ChargeBasis
     */
    protected $ChargeBasis;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\ChargeBasisLevelType|null $ChargeBasisLevel
     */
    protected $ChargeBasisLevel;


    /**
     * @param SimpleType\RateTypeBasisType|null $rateTypeBasis
     * @return CodAddTransportationChargesDetail
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

    /**
     * @param SimpleType\CodAddTransportationChargeBasisType|null $chargeBasis
     * @return CodAddTransportationChargesDetail
     */
    public function setChargeBasis(SimpleType\CodAddTransportationChargeBasisType $chargeBasis = null)
    {
        $this->ChargeBasis = $chargeBasis;

        return $this;
    }

    /**
     * @return SimpleType\CodAddTransportationChargeBasisType|null
     */
    public function getChargeBasis()
    {
        return $this->ChargeBasis;
    }

    /**
     * @param SimpleType\ChargeBasisLevelType|null $chargeBasisLevel
     * @return CodAddTransportationChargesDetail
     */
    public function setChargeBasisLevel(SimpleType\ChargeBasisLevelType $chargeBasisLevel = null)
    {
        $this->ChargeBasisLevel = $chargeBasisLevel;

        return $this;
    }

    /**
     * @return SimpleType\ChargeBasisLevelType|null
     */
    public function getChargeBasisLevel()
    {
        return $this->ChargeBasisLevel;
    }


}

