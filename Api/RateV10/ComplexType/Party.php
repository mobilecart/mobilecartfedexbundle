<?php

namespace MobileCart\FedexBundle\Api\RateV10\ComplexType;

use MobileCart\FedexBundle\Api\RateV10\SimpleType;

/**
 * The descriptive data for a person or company entitiy doing business with FedEx. 
 *
 *
 */
class Party extends ComplexTypeAbstract
{
    const CLASS_NAME = 'Party';

    /**
     * Identifies the FedEx account number assigned to the customer. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $AccountNumber
     */
    protected $AccountNumber;

    /**
     * Descriptive data for taxpayer identification information. 
     * minOccurs = 0
     * maxOccurs = unbounded
     *
     * @var TaxpayerIdentification[] $Tins
     */
    protected $Tins = array();

    /**
     * Descriptive data identifying the point-of-contact person. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var Contact|null $Contact
     */
    protected $Contact;

    /**
     * The descriptive data for a physical location. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var Address|null $Address
     */
    protected $Address;


    /**
     * @param string|null $accountNumber
     * @return Party
     */
    public function setAccountNumber($accountNumber)
    {
        $this->AccountNumber = $accountNumber;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getAccountNumber()
    {
        return $this->AccountNumber;
    }

    /**
     * @param TaxpayerIdentification[] $tins
     * @return Party
     */
    public function setTins(array $tins = array())
    {
        $this->Tins = $tins;

        return $this;
    }

    /**
     * @return TaxpayerIdentification[]
     */
    public function getTins()
    {
        return $this->Tins;
    }

    /**
     * @param Contact|null $contact
     * @return Party
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
     * @return Party
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

