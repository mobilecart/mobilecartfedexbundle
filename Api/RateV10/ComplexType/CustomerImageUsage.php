<?php

namespace MobileCart\FedexBundle\Api\RateV10\ComplexType;

use MobileCart\FedexBundle\Api\RateV10\SimpleType;

/**
 *
 *
 */
class CustomerImageUsage extends ComplexTypeAbstract
{
    const CLASS_NAME = 'CustomerImageUsage';

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\CustomerImageUsageType|null $Type
     */
    protected $Type;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\ImageId|null $Id
     */
    protected $Id;


    /**
     * @param SimpleType\CustomerImageUsageType|null $type
     * @return CustomerImageUsage
     */
    public function setType(SimpleType\CustomerImageUsageType $type = null)
    {
        $this->Type = $type;

        return $this;
    }

    /**
     * @return SimpleType\CustomerImageUsageType|null
     */
    public function getType()
    {
        return $this->Type;
    }

    /**
     * @param SimpleType\ImageId|null $id
     * @return CustomerImageUsage
     */
    public function setId(SimpleType\ImageId $id = null)
    {
        $this->Id = $id;

        return $this;
    }

    /**
     * @return SimpleType\ImageId|null
     */
    public function getId()
    {
        return $this->Id;
    }


}

