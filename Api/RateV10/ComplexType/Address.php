<?php

namespace MobileCart\FedexBundle\Api\RateV10\ComplexType;

use MobileCart\FedexBundle\Api\RateV10\SimpleType;

/**
 * Descriptive data for a physical location. May be used as an actual physical address (place 
 * to which one could go), or as a container of "address parts" which should be handled as 
 * a unit (such as a city-state-ZIP combination within the US). 
 *
 *
 */
class Address extends ComplexTypeAbstract
{
    const CLASS_NAME = 'Address';

    /**
     * Combination of number, street name, etc. At least one line is required for a valid physical 
     * address; empty lines should not be included. 
     * minOccurs = 0
     * maxOccurs = 2
     *
     * @var string[] $StreetLines
     */
    protected $StreetLines = array();

    /**
     * Name of city, town, etc. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $City
     */
    protected $City;

    /**
     * Identifying abbreviation for US state, Canada province, etc. Format and presence of 
     * this field will vary, depending on country. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $StateOrProvinceCode
     */
    protected $StateOrProvinceCode;

    /**
     * Identification of a region (usually small) for mail/package delivery. Format and presence 
     * of this field will vary, depending on country. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $PostalCode
     */
    protected $PostalCode;

    /**
     * Relevant only to addresses in Puerto Rico. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $UrbanizationCode
     */
    protected $UrbanizationCode;

    /**
     * The two-letter code used to identify a country. 
     * minOccurs = 1
     * maxOccurs = 1
     *
     * @var string $CountryCode
     */
    protected $CountryCode;

    /**
     * Indicates whether this address residential (as opposed to commercial). 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var boolean|null $Residential
     */
    protected $Residential;


    /**
     * @param string[] $streetLines
     * @return Address
     */
    public function setStreetLines(array $streetLines = array())
    {
        $this->StreetLines = $streetLines;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getStreetLines()
    {
        return $this->StreetLines;
    }

    /**
     * @param string|null $city
     * @return Address
     */
    public function setCity($city)
    {
        $this->City = $city;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getCity()
    {
        return $this->City;
    }

    /**
     * @param string|null $stateOrProvinceCode
     * @return Address
     */
    public function setStateOrProvinceCode($stateOrProvinceCode)
    {
        $this->StateOrProvinceCode = $stateOrProvinceCode;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getStateOrProvinceCode()
    {
        return $this->StateOrProvinceCode;
    }

    /**
     * @param string|null $postalCode
     * @return Address
     */
    public function setPostalCode($postalCode)
    {
        $this->PostalCode = $postalCode;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getPostalCode()
    {
        return $this->PostalCode;
    }

    /**
     * @param string|null $urbanizationCode
     * @return Address
     */
    public function setUrbanizationCode($urbanizationCode)
    {
        $this->UrbanizationCode = $urbanizationCode;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getUrbanizationCode()
    {
        return $this->UrbanizationCode;
    }

    /**
     * @param string $countryCode
     * @return Address
     */
    public function setCountryCode($countryCode)
    {
        $this->CountryCode = $countryCode;

        return $this;
    }

    /**
     * @return string
     */
    public function getCountryCode()
    {
        return $this->CountryCode;
    }

    /**
     * @param boolean|null $residential
     * @return Address
     */
    public function setResidential($residential)
    {
        $this->Residential = $residential;

        return $this;
    }

    /**
     * @return boolean|null
     */
    public function getResidential()
    {
        return $this->Residential;
    }


}

