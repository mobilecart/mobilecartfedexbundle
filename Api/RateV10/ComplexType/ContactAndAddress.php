<?php

namespace MobileCart\FedexBundle\Api\RateV10\ComplexType;

use MobileCart\FedexBundle\Api\RateV10\SimpleType;

/**
 *
 *
 */
class ContactAndAddress extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ContactAndAddress';

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var Contact|null $Contact
     */
    protected $Contact;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var Address|null $Address
     */
    protected $Address;


    /**
     * @param Contact|null $contact
     * @return ContactAndAddress
     */
    public function setContact(Contact $contact = null)
    {
        $this->Contact = $contact;

        return $this;
    }

    /**
     * @return Contact|null
     */
    public function getContact()
    {
        return $this->Contact;
    }

    /**
     * @param Address|null $address
     * @return ContactAndAddress
     */
    public function setAddress(Address $address = null)
    {
        $this->Address = $address;

        return $this;
    }

    /**
     * @return Address|null
     */
    public function getAddress()
    {
        return $this->Address;
    }


}

