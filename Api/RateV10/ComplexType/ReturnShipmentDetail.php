<?php

namespace MobileCart\FedexBundle\Api\RateV10\ComplexType;

use MobileCart\FedexBundle\Api\RateV10\SimpleType;

/**
 * Information relating to a return shipment. 
 *
 *
 */
class ReturnShipmentDetail extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ReturnShipmentDetail';

    /**
     * The type of return shipment that is being requested. At present the only type of retrun 
     * shipment that is supported is PRINT_RETURN_LABEL. With this option you can print a return 
     * label to insert into the box of an outbound shipment. This option can not be used to 
     * print an outbound label. 
     * minOccurs = 1
     * maxOccurs = 1
     *
     * @var SimpleType\ReturnType $ReturnType
     */
    protected $ReturnType;

    /**
     * Return Merchant Authorization 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var Rma|null $Rma
     */
    protected $Rma;

    /**
     * Specific information about the delivery of the email and options for the shipment. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var ReturnEMailDetail|null $ReturnEMailDetail
     */
    protected $ReturnEMailDetail;


    /**
     * @param SimpleType\ReturnType $returnType
     * @return ReturnShipmentDetail
     */
    public function setReturnType(SimpleType\ReturnType $returnType)
    {
        $this->ReturnType = $returnType;

        return $this;
    }

    /**
     * @return SimpleType\ReturnType
     */
    public function getReturnType()
    {
        return $this->ReturnType;
    }

    /**
     * @param Rma|null $rma
     * @return ReturnShipmentDetail
     */
    public function setRma(Rma $rma = null)
    {
        $this->Rma = $rma;

        return $this;
    }

    /**
     * @return Rma|null
     */
    public function getRma()
    {
        return $this->Rma;
    }

    /**
     * @param ReturnEMailDetail|null $returnEMailDetail
     * @return ReturnShipmentDetail
     */
    public function setReturnEMailDetail(ReturnEMailDetail $returnEMailDetail = null)
    {
        $this->ReturnEMailDetail = $returnEMailDetail;

        return $this;
    }

    /**
     * @return ReturnEMailDetail|null
     */
    public function getReturnEMailDetail()
    {
        return $this->ReturnEMailDetail;
    }


}

