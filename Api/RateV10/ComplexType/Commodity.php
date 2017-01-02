<?php

namespace MobileCart\FedexBundle\Api\RateV10\ComplexType;

use MobileCart\FedexBundle\Api\RateV10\SimpleType;

/**
 * For international multiple piece shipments, commodity information must be passed in the 
 * Master and on each child transaction.
            If this shipment cotains more than four 
 * commodities line items, the four highest valued should be included in the first 4 occurances 
 * for this request. 
 *
 *
 */
class Commodity extends ComplexTypeAbstract
{
    const CLASS_NAME = 'Commodity';

    /**
     * total number of pieces of this commodity 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $Name
     */
    protected $Name;

    /**
     * total number of pieces of this commodity 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var integer|null $NumberOfPieces
     */
    protected $NumberOfPieces;

    /**
     * Complete and accurate description of this commodity. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $Description
     */
    protected $Description;

    /**
     * Country code where commodity contents were produced or manufactured in their final form. 
     * 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $CountryOfManufacture
     */
    protected $CountryOfManufacture;

    /**
     * Unique alpha/numeric representing commodity item.
                At least one occurrence 
     * is required for US Export shipments if the Customs Value is greater than $2500 or if 
     * a valid US Export license is required. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $HarmonizedCode
     */
    protected $HarmonizedCode;

    /**
     * Total weight of this commodity. 1 explicit decimal position. Max length 11 including 
     * decimal. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var Weight|null $Weight
     */
    protected $Weight;

    /**
     * Number of units of a commodity in total number of pieces for this line item. Max length 
     * is 9 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var integer|null $Quantity
     */
    protected $Quantity;

    /**
     * Unit of measure used to express the quantity of this commodity line item. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $QuantityUnits
     */
    protected $QuantityUnits;

    /**
     * Contains only additional quantitative information other than weight and quantity to 
     * calculate duties and taxes. 
     * minOccurs = 0
     * maxOccurs = unbounded
     *
     * @var Measure[] $AdditionalMeasures
     */
    protected $AdditionalMeasures = array();

    /**
     * Value of each unit in Quantity. Six explicit decimal positions, Max length 18 including 
     * decimal. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var Money|null $UnitPrice
     */
    protected $UnitPrice;

    /**
     * Total customs value for this line item.
                It should equal the commodity 
     * unit quantity times commodity unit value.
                Six explicit decimal positions, 
     * max length 18 including decimal. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var Money|null $CustomsValue
     */
    protected $CustomsValue;

    /**
     * Defines additional characteristic of commodity used to calculate duties and taxes 
     * minOccurs = 0
     * maxOccurs = unbounded
     *
     * @var EdtExciseCondition[] $ExciseConditions
     */
    protected $ExciseConditions = array();

    /**
     * Applicable to US export shipping only. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $ExportLicenseNumber
     */
    protected $ExportLicenseNumber;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $ExportLicenseExpirationDate
     */
    protected $ExportLicenseExpirationDate;

    /**
     * An identifying mark or number used on the packaging of a shipment to help customers 
     * identify a particular shipment. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $CIMarksAndNumbers
     */
    protected $CIMarksAndNumbers;

    /**
     * All data required for this commodity in NAFTA Certificate of Origin. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var NaftaCommodityDetail|null $NaftaDetail
     */
    protected $NaftaDetail;


    /**
     * @param string|null $name
     * @return Commodity
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
     * @param integer|null $numberOfPieces
     * @return Commodity
     */
    public function setNumberOfPieces($numberOfPieces)
    {
        $this->NumberOfPieces = $numberOfPieces;

        return $this;
    }

    /**
     * @return integer|null
     */
    public function getNumberOfPieces()
    {
        return $this->NumberOfPieces;
    }

    /**
     * @param string|null $description
     * @return Commodity
     */
    public function setDescription($description)
    {
        $this->Description = $description;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getDescription()
    {
        return $this->Description;
    }

    /**
     * @param string|null $countryOfManufacture
     * @return Commodity
     */
    public function setCountryOfManufacture($countryOfManufacture)
    {
        $this->CountryOfManufacture = $countryOfManufacture;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getCountryOfManufacture()
    {
        return $this->CountryOfManufacture;
    }

    /**
     * @param string|null $harmonizedCode
     * @return Commodity
     */
    public function setHarmonizedCode($harmonizedCode)
    {
        $this->HarmonizedCode = $harmonizedCode;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getHarmonizedCode()
    {
        return $this->HarmonizedCode;
    }

    /**
     * @param Weight|null $weight
     * @return Commodity
     */
    public function setWeight(Weight $weight = null)
    {
        $this->Weight = $weight;

        return $this;
    }

    /**
     * @return Weight|null
     */
    public function getWeight()
    {
        return $this->Weight;
    }

    /**
     * @param integer|null $quantity
     * @return Commodity
     */
    public function setQuantity($quantity)
    {
        $this->Quantity = $quantity;

        return $this;
    }

    /**
     * @return integer|null
     */
    public function getQuantity()
    {
        return $this->Quantity;
    }

    /**
     * @param string|null $quantityUnits
     * @return Commodity
     */
    public function setQuantityUnits($quantityUnits)
    {
        $this->QuantityUnits = $quantityUnits;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getQuantityUnits()
    {
        return $this->QuantityUnits;
    }

    /**
     * @param Measure[] $additionalMeasures
     * @return Commodity
     */
    public function setAdditionalMeasures(array $additionalMeasures = array())
    {
        $this->AdditionalMeasures = $additionalMeasures;

        return $this;
    }

    /**
     * @return Measure[]
     */
    public function getAdditionalMeasures()
    {
        return $this->AdditionalMeasures;
    }

    /**
     * @param Money|null $unitPrice
     * @return Commodity
     */
    public function setUnitPrice(Money $unitPrice = null)
    {
        $this->UnitPrice = $unitPrice;

        return $this;
    }

    /**
     * @return Money|null
     */
    public function getUnitPrice()
    {
        return $this->UnitPrice;
    }

    /**
     * @param Money|null $customsValue
     * @return Commodity
     */
    public function setCustomsValue(Money $customsValue = null)
    {
        $this->CustomsValue = $customsValue;

        return $this;
    }

    /**
     * @return Money|null
     */
    public function getCustomsValue()
    {
        return $this->CustomsValue;
    }

    /**
     * @param EdtExciseCondition[] $exciseConditions
     * @return Commodity
     */
    public function setExciseConditions(array $exciseConditions = array())
    {
        $this->ExciseConditions = $exciseConditions;

        return $this;
    }

    /**
     * @return EdtExciseCondition[]
     */
    public function getExciseConditions()
    {
        return $this->ExciseConditions;
    }

    /**
     * @param string|null $exportLicenseNumber
     * @return Commodity
     */
    public function setExportLicenseNumber($exportLicenseNumber)
    {
        $this->ExportLicenseNumber = $exportLicenseNumber;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getExportLicenseNumber()
    {
        return $this->ExportLicenseNumber;
    }

    /**
     * @param string|null $exportLicenseExpirationDate
     * @return Commodity
     */
    public function setExportLicenseExpirationDate($exportLicenseExpirationDate)
    {
        $this->ExportLicenseExpirationDate = $exportLicenseExpirationDate;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getExportLicenseExpirationDate()
    {
        return $this->ExportLicenseExpirationDate;
    }

    /**
     * @param string|null $cIMarksAndNumbers
     * @return Commodity
     */
    public function setCIMarksAndNumbers($cIMarksAndNumbers)
    {
        $this->CIMarksAndNumbers = $cIMarksAndNumbers;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getCIMarksAndNumbers()
    {
        return $this->CIMarksAndNumbers;
    }

    /**
     * @param NaftaCommodityDetail|null $naftaDetail
     * @return Commodity
     */
    public function setNaftaDetail(NaftaCommodityDetail $naftaDetail = null)
    {
        $this->NaftaDetail = $naftaDetail;

        return $this;
    }

    /**
     * @return NaftaCommodityDetail|null
     */
    public function getNaftaDetail()
    {
        return $this->NaftaDetail;
    }


}

