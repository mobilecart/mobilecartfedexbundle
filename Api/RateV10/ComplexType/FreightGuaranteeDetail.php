<?php

namespace MobileCart\FedexBundle\Api\RateV10\ComplexType;

use MobileCart\FedexBundle\Api\RateV10\SimpleType;

/**
 *
 *
 */
class FreightGuaranteeDetail extends ComplexTypeAbstract
{
    const CLASS_NAME = 'FreightGuaranteeDetail';

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\FreightGuaranteeType|null $Type
     */
    protected $Type;

    /**
     * Date for all Freight guarantee types. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $Date
     */
    protected $Date;


    /**
     * @param SimpleType\FreightGuaranteeType|null $type
     * @return FreightGuaranteeDetail
     */
    public function setType(SimpleType\FreightGuaranteeType $type = null)
    {
        $this->Type = $type;

        return $this;
    }

    /**
     * @return SimpleType\FreightGuaranteeType|null
     */
    public function getType()
    {
        return $this->Type;
    }

    /**
     * @param string|null $date
     * @return FreightGuaranteeDetail
     */
    public function setDate($date)
    {
        $this->Date = $date;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getDate()
    {
        return $this->Date;
    }


}

