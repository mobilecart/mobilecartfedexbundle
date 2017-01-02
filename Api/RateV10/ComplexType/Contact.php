<?php

namespace MobileCart\FedexBundle\Api\RateV10\ComplexType;

use MobileCart\FedexBundle\Api\RateV10\SimpleType;

/**
 * The descriptive data for a point-of-contact person. 
 *
 *
 */
class Contact extends ComplexTypeAbstract
{
    const CLASS_NAME = 'Contact';

    /**
     * Client provided identifier corresponding to this contact information. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $ContactId
     */
    protected $ContactId;

    /**
     * Identifies the contact person's name. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $PersonName
     */
    protected $PersonName;

    /**
     * Identifies the contact person's title. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $Title
     */
    protected $Title;

    /**
     * Identifies the company this contact is associated with. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $CompanyName
     */
    protected $CompanyName;

    /**
     * Identifies the phone number associated with this contact. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $PhoneNumber
     */
    protected $PhoneNumber;

    /**
     * Identifies the phone extension associated with this contact. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $PhoneExtension
     */
    protected $PhoneExtension;

    /**
     * Identifies the pager number associated with this contact. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $PagerNumber
     */
    protected $PagerNumber;

    /**
     * Identifies the fax number associated with this contact. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $FaxNumber
     */
    protected $FaxNumber;

    /**
     * Identifies the email address associated with this contact. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $EMailAddress
     */
    protected $EMailAddress;


    /**
     * @param string|null $contactId
     * @return Contact
     */
    public function setContactId($contactId)
    {
        $this->ContactId = $contactId;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getContactId()
    {
        return $this->ContactId;
    }

    /**
     * @param string|null $personName
     * @return Contact
     */
    public function setPersonName($personName)
    {
        $this->PersonName = $personName;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getPersonName()
    {
        return $this->PersonName;
    }

    /**
     * @param string|null $title
     * @return Contact
     */
    public function setTitle($title)
    {
        $this->Title = $title;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getTitle()
    {
        return $this->Title;
    }

    /**
     * @param string|null $companyName
     * @return Contact
     */
    public function setCompanyName($companyName)
    {
        $this->CompanyName = $companyName;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getCompanyName()
    {
        return $this->CompanyName;
    }

    /**
     * @param string|null $phoneNumber
     * @return Contact
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->PhoneNumber = $phoneNumber;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getPhoneNumber()
    {
        return $this->PhoneNumber;
    }

    /**
     * @param string|null $phoneExtension
     * @return Contact
     */
    public function setPhoneExtension($phoneExtension)
    {
        $this->PhoneExtension = $phoneExtension;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getPhoneExtension()
    {
        return $this->PhoneExtension;
    }

    /**
     * @param string|null $pagerNumber
     * @return Contact
     */
    public function setPagerNumber($pagerNumber)
    {
        $this->PagerNumber = $pagerNumber;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getPagerNumber()
    {
        return $this->PagerNumber;
    }

    /**
     * @param string|null $faxNumber
     * @return Contact
     */
    public function setFaxNumber($faxNumber)
    {
        $this->FaxNumber = $faxNumber;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getFaxNumber()
    {
        return $this->FaxNumber;
    }

    /**
     * @param string|null $eMailAddress
     * @return Contact
     */
    public function setEMailAddress($eMailAddress)
    {
        $this->EMailAddress = $eMailAddress;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getEMailAddress()
    {
        return $this->EMailAddress;
    }


}

