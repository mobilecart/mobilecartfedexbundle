<?php

namespace MobileCart\FedexBundle\Api\RateV10\ComplexType;

use MobileCart\FedexBundle\Api\RateV10\SimpleType;

/**
 * Currently not supported. Delivery contact information for an Express freight shipment. 
 *
 *
 */
class ExpressFreightDetailContact extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ExpressFreightDetailContact';

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $Name
     */
    protected $Name;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $Phone
     */
    protected $Phone;


    /**
     * @param string|null $name
     * @return ExpressFreightDetailContact
     */
    public function setName($name)
    {
        $this->Name = $name;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * @param string|null $phone
     * @return ExpressFreightDetailContact
     */
    public function setPhone($phone)
    {
        $this->Phone = $phone;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getPhone()
    {
        return $this->Phone;
    }


}

