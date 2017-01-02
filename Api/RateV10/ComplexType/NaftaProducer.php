<?php

namespace MobileCart\FedexBundle\Api\RateV10\ComplexType;

use MobileCart\FedexBundle\Api\RateV10\SimpleType;

/**
 *
 *
 */
class NaftaProducer extends ComplexTypeAbstract
{
    const CLASS_NAME = 'NaftaProducer';

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $Id
     */
    protected $Id;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var Party|null $Producer
     */
    protected $Producer;


    /**
     * @param string|null $id
     * @return NaftaProducer
     */
    public function setId($id)
    {
        $this->Id = $id;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * @param Party|null $producer
     * @return NaftaProducer
     */
    public function setProducer(Party $producer = null)
    {
        $this->Producer = $producer;

        return $this;
    }

    /**
     * @return Party|null
     */
    public function getProducer()
    {
        return $this->Producer;
    }


}

