<?php

namespace MobileCart\FedexBundle\Api\RateV10\ComplexType;

use MobileCart\FedexBundle\Api\RateV10\SimpleType;

/**
 *
 *
 */
class ContentRecord extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ContentRecord';

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $PartNumber
     */
    protected $PartNumber;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $ItemNumber
     */
    protected $ItemNumber;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var integer|null $ReceivedQuantity
     */
    protected $ReceivedQuantity;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $Description
     */
    protected $Description;


    /**
     * @param string|null $partNumber
     * @return ContentRecord
     */
    public function setPartNumber($partNumber)
    {
        $this->PartNumber = $partNumber;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getPartNumber()
    {
        return $this->PartNumber;
    }

    /**
     * @param string|null $itemNumber
     * @return ContentRecord
     */
    public function setItemNumber($itemNumber)
    {
        $this->ItemNumber = $itemNumber;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getItemNumber()
    {
        return $this->ItemNumber;
    }

    /**
     * @param integer|null $receivedQuantity
     * @return ContentRecord
     */
    public function setReceivedQuantity($receivedQuantity)
    {
        $this->ReceivedQuantity = $receivedQuantity;

        return $this;
    }

    /**
     * @return integer|null
     */
    public function getReceivedQuantity()
    {
        return $this->ReceivedQuantity;
    }

    /**
     * @param string|null $description
     * @return ContentRecord
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


}

