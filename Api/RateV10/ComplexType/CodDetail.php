<?php

namespace MobileCart\FedexBundle\Api\RateV10\ComplexType;

use MobileCart\FedexBundle\Api\RateV10\SimpleType;

/**
 * Descriptive data required for a FedEx COD (Collect-On-Delivery) shipment. 
 *
 *
 */
class CodDetail extends ComplexTypeAbstract
{
    const CLASS_NAME = 'CodDetail';

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var Money|null $CodCollectionAmount
     */
    protected $CodCollectionAmount;

    /**
     * Specifies the details of the charges are to be added to the COD collect amount. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var CodAddTransportationChargesDetail|null $AddTransportationChargesDetail
     */
    protected $AddTransportationChargesDetail;

    /**
     * Identifies the type of funds FedEx should collect upon package delivery 
     * minOccurs = 1
     * maxOccurs = 1
     *
     * @var SimpleType\CodCollectionType $CollectionType
     */
    protected $CollectionType;

    /**
     * For Express this is the descriptive data that is used for the recipient of the FedEx 
     * Letter containing the COD payment. For Ground this is the descriptive data for the party 
     * to receive the payment that prints the COD receipt. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var Party|null $CodRecipient
     */
    protected $CodRecipient;

    /**
     * Indicates which type of reference information to include on the COD return shipping 
     * label. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\CodReturnReferenceIndicatorType|null $ReferenceIndicator
     */
    protected $ReferenceIndicator;


    /**
     * @param Money|null $codCollectionAmount
     * @return CodDetail
     */
    public function setCodCollectionAmount(Money $codCollectionAmount = null)
    {
        $this->CodCollectionAmount = $codCollectionAmount;

        return $this;
    }

    /**
     * @return Money|null
     */
    public function getCodCollectionAmount()
    {
        return $this->CodCollectionAmount;
    }

    /**
     * @param CodAddTransportationChargesDetail|null $addTransportationChargesDetail
     * @return CodDetail
     */
    public function setAddTransportationChargesDetail(CodAddTransportationChargesDetail $addTransportationChargesDetail = null)
    {
        $this->AddTransportationChargesDetail = $addTransportationChargesDetail;

        return $this;
    }

    /**
     * @return CodAddTransportationChargesDetail|null
     */
    public function getAddTransportationChargesDetail()
    {
        return $this->AddTransportationChargesDetail;
    }

    /**
     * @param SimpleType\CodCollectionType $collectionType
     * @return CodDetail
     */
    public function setCollectionType(SimpleType\CodCollectionType $collectionType)
    {
        $this->CollectionType = $collectionType;

        return $this;
    }

    /**
     * @return SimpleType\CodCollectionType
     */
    public function getCollectionType()
    {
        return $this->CollectionType;
    }

    /**
     * @param Party|null $codRecipient
     * @return CodDetail
     */
    public function setCodRecipient(Party $codRecipient = null)
    {
        $this->CodRecipient = $codRecipient;

        return $this;
    }

    /**
     * @return Party|null
     */
    public function getCodRecipient()
    {
        return $this->CodRecipient;
    }

    /**
     * @param SimpleType\CodReturnReferenceIndicatorType|null $referenceIndicator
     * @return CodDetail
     */
    public function setReferenceIndicator(SimpleType\CodReturnReferenceIndicatorType $referenceIndicator = null)
    {
        $this->ReferenceIndicator = $referenceIndicator;

        return $this;
    }

    /**
     * @return SimpleType\CodReturnReferenceIndicatorType|null
     */
    public function getReferenceIndicator()
    {
        return $this->ReferenceIndicator;
    }


}

