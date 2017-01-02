<?php

namespace MobileCart\FedexBundle\Api\RateV10\ComplexType;

use MobileCart\FedexBundle\Api\RateV10\SimpleType;

/**
 * This class rationalizes RequestedPackage and RequestedPackageSummary from previous interfaces. 
 * The way in which it is uses within a RequestedShipment depends on the RequestedPackageDetailType 
 * value specified for that shipment. 
 *
 *
 */
class RequestedPackageLineItem extends ComplexTypeAbstract
{
    const CLASS_NAME = 'RequestedPackageLineItem';

    /**
     * Used only with INDIVIDUAL_PACKAGE, as a unique identifier of each requested package. 
     * 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var integer|null $SequenceNumber
     */
    protected $SequenceNumber;

    /**
     * Used only with PACKAGE_GROUPS, as a unique identifier of each group of identical packages. 
     * 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var integer|null $GroupNumber
     */
    protected $GroupNumber;

    /**
     * Used only with PACKAGE_GROUPS, as a count of packages within a group of identical packages. 
     * 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var integer|null $GroupPackageCount
     */
    protected $GroupPackageCount;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var VariableHandlingChargeDetail|null $VariableHandlingChargeDetail
     */
    protected $VariableHandlingChargeDetail;

    /**
     * Only used for INDIVIDUAL_PACKAGES and PACKAGE_GROUPS. Ignored for PACKAGE_SUMMARY, in 
     * which case totalInsuredValue and packageCount on the shipment will be used to determine 
     * this value. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var Money|null $InsuredValue
     */
    protected $InsuredValue;

    /**
     * Only used for INDIVIDUAL_PACKAGES and PACKAGE_GROUPS. Ignored for PACKAGE_SUMMARY, in 
     * which case totalweight and packageCount on the shipment will be used to determine this 
     * value. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var Weight|null $Weight
     */
    protected $Weight;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var Dimensions|null $Dimensions
     */
    protected $Dimensions;

    /**
     * Provides additional detail on how the customer has physically packaged this item. As 
     * of June 2009, required for packages moving under international and SmartPost services. 
     * 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\PhysicalPackagingType|null $PhysicalPackaging
     */
    protected $PhysicalPackaging;

    /**
     * Human-readable text describing the package. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $ItemDescription
     */
    protected $ItemDescription;

    /**

     * minOccurs = 0
     * maxOccurs = 3
     *
     * @var CustomerReference[] $CustomerReferences
     */
    protected $CustomerReferences = array();

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var PackageSpecialServicesRequested|null $SpecialServicesRequested
     */
    protected $SpecialServicesRequested;

    /**
     * Only used for INDIVIDUAL_PACKAGES and PACKAGE_GROUPS. 
     * minOccurs = 0
     * maxOccurs = unbounded
     *
     * @var ContentRecord[] $ContentRecords
     */
    protected $ContentRecords = array();


    /**
     * @param integer|null $sequenceNumber
     * @return RequestedPackageLineItem
     */
    public function setSequenceNumber($sequenceNumber)
    {
        $this->SequenceNumber = $sequenceNumber;

        return $this;
    }

    /**
     * @return integer|null
     */
    public function getSequenceNumber()
    {
        return $this->SequenceNumber;
    }

    /**
     * @param integer|null $groupNumber
     * @return RequestedPackageLineItem
     */
    public function setGroupNumber($groupNumber)
    {
        $this->GroupNumber = $groupNumber;

        return $this;
    }

    /**
     * @return integer|null
     */
    public function getGroupNumber()
    {
        return $this->GroupNumber;
    }

    /**
     * @param integer|null $groupPackageCount
     * @return RequestedPackageLineItem
     */
    public function setGroupPackageCount($groupPackageCount)
    {
        $this->GroupPackageCount = $groupPackageCount;

        return $this;
    }

    /**
     * @return integer|null
     */
    public function getGroupPackageCount()
    {
        return $this->GroupPackageCount;
    }

    /**
     * @param VariableHandlingChargeDetail|null $variableHandlingChargeDetail
     * @return RequestedPackageLineItem
     */
    public function setVariableHandlingChargeDetail(VariableHandlingChargeDetail $variableHandlingChargeDetail = null)
    {
        $this->VariableHandlingChargeDetail = $variableHandlingChargeDetail;

        return $this;
    }

    /**
     * @return VariableHandlingChargeDetail|null
     */
    public function getVariableHandlingChargeDetail()
    {
        return $this->VariableHandlingChargeDetail;
    }

    /**
     * @param Money|null $insuredValue
     * @return RequestedPackageLineItem
     */
    public function setInsuredValue(Money $insuredValue = null)
    {
        $this->InsuredValue = $insuredValue;

        return $this;
    }

    /**
     * @return Money|null
     */
    public function getInsuredValue()
    {
        return $this->InsuredValue;
    }

    /**
     * @param Weight|null $weight
     * @return RequestedPackageLineItem
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
     * @param Dimensions|null $dimensions
     * @return RequestedPackageLineItem
     */
    public function setDimensions(Dimensions $dimensions = null)
    {
        $this->Dimensions = $dimensions;

        return $this;
    }

    /**
     * @return Dimensions|null
     */
    public function getDimensions()
    {
        return $this->Dimensions;
    }

    /**
     * @param SimpleType\PhysicalPackagingType|null $physicalPackaging
     * @return RequestedPackageLineItem
     */
    public function setPhysicalPackaging(SimpleType\PhysicalPackagingType $physicalPackaging = null)
    {
        $this->PhysicalPackaging = $physicalPackaging;

        return $this;
    }

    /**
     * @return SimpleType\PhysicalPackagingType|null
     */
    public function getPhysicalPackaging()
    {
        return $this->PhysicalPackaging;
    }

    /**
     * @param string|null $itemDescription
     * @return RequestedPackageLineItem
     */
    public function setItemDescription($itemDescription)
    {
        $this->ItemDescription = $itemDescription;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getItemDescription()
    {
        return $this->ItemDescription;
    }

    /**
     * @param CustomerReference[] $customerReferences
     * @return RequestedPackageLineItem
     */
    public function setCustomerReferences(array $customerReferences = array())
    {
        $this->CustomerReferences = $customerReferences;

        return $this;
    }

    /**
     * @return CustomerReference[]
     */
    public function getCustomerReferences()
    {
        return $this->CustomerReferences;
    }

    /**
     * @param PackageSpecialServicesRequested|null $specialServicesRequested
     * @return RequestedPackageLineItem
     */
    public function setSpecialServicesRequested(PackageSpecialServicesRequested $specialServicesRequested = null)
    {
        $this->SpecialServicesRequested = $specialServicesRequested;

        return $this;
    }

    /**
     * @return PackageSpecialServicesRequested|null
     */
    public function getSpecialServicesRequested()
    {
        return $this->SpecialServicesRequested;
    }

    /**
     * @param ContentRecord[] $contentRecords
     * @return RequestedPackageLineItem
     */
    public function setContentRecords(array $contentRecords = array())
    {
        $this->ContentRecords = $contentRecords;

        return $this;
    }

    /**
     * @return ContentRecord[]
     */
    public function getContentRecords()
    {
        return $this->ContentRecords;
    }


}

