<?php

namespace MobileCart\FedexBundle\Api\RateV10\ComplexType;

use MobileCart\FedexBundle\Api\RateV10\SimpleType;

/**
 *
 *
 */
class NaftaCommodityDetail extends ComplexTypeAbstract
{
    const CLASS_NAME = 'NaftaCommodityDetail';

    /**
     * Defined by NAFTA regulations. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\NaftaPreferenceCriterionCode|null $PreferenceCriterion
     */
    protected $PreferenceCriterion;

    /**
     * Defined by NAFTA regulations. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\NaftaProducerDeterminationCode|null $ProducerDetermination
     */
    protected $ProducerDetermination;

    /**
     * Identification of which producer is associated with this commodity (if multiple producers 
     * are used in a single shipment). 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $ProducerId
     */
    protected $ProducerId;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\NaftaNetCostMethodCode|null $NetCostMethod
     */
    protected $NetCostMethod;

    /**
     * Date range over which RVC net cost was calculated. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var DateRange|null $NetCostDateRange
     */
    protected $NetCostDateRange;


    /**
     * @param SimpleType\NaftaPreferenceCriterionCode|null $preferenceCriterion
     * @return NaftaCommodityDetail
     */
    public function setPreferenceCriterion(SimpleType\NaftaPreferenceCriterionCode $preferenceCriterion = null)
    {
        $this->PreferenceCriterion = $preferenceCriterion;

        return $this;
    }

    /**
     * @return SimpleType\NaftaPreferenceCriterionCode|null
     */
    public function getPreferenceCriterion()
    {
        return $this->PreferenceCriterion;
    }

    /**
     * @param SimpleType\NaftaProducerDeterminationCode|null $producerDetermination
     * @return NaftaCommodityDetail
     */
    public function setProducerDetermination(SimpleType\NaftaProducerDeterminationCode $producerDetermination = null)
    {
        $this->ProducerDetermination = $producerDetermination;

        return $this;
    }

    /**
     * @return SimpleType\NaftaProducerDeterminationCode|null
     */
    public function getProducerDetermination()
    {
        return $this->ProducerDetermination;
    }

    /**
     * @param string|null $producerId
     * @return NaftaCommodityDetail
     */
    public function setProducerId($producerId)
    {
        $this->ProducerId = $producerId;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getProducerId()
    {
        return $this->ProducerId;
    }

    /**
     * @param SimpleType\NaftaNetCostMethodCode|null $netCostMethod
     * @return NaftaCommodityDetail
     */
    public function setNetCostMethod(SimpleType\NaftaNetCostMethodCode $netCostMethod = null)
    {
        $this->NetCostMethod = $netCostMethod;

        return $this;
    }

    /**
     * @return SimpleType\NaftaNetCostMethodCode|null
     */
    public function getNetCostMethod()
    {
        return $this->NetCostMethod;
    }

    /**
     * @param DateRange|null $netCostDateRange
     * @return NaftaCommodityDetail
     */
    public function setNetCostDateRange(DateRange $netCostDateRange = null)
    {
        $this->NetCostDateRange = $netCostDateRange;

        return $this;
    }

    /**
     * @return DateRange|null
     */
    public function getNetCostDateRange()
    {
        return $this->NetCostDateRange;
    }


}

