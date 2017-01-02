<?php

namespace MobileCart\FedexBundle\Api\RateV10\ComplexType;

use MobileCart\FedexBundle\Api\RateV10\SimpleType;

/**
 * Each occurrence of this class specifies a particular way in which a kind of shipping document 
 * is to be produced and provided. 
 *
 *
 */
class ShippingDocumentDispositionDetail extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ShippingDocumentDispositionDetail';

    /**
     * Values in this field specify how to create and return the document. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\ShippingDocumentDispositionType|null $DispositionType
     */
    protected $DispositionType;

    /**
     * Specifies how to organize all documents of this type. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\ShippingDocumentGroupingType|null $Grouping
     */
    protected $Grouping;

    /**
     * Specifies how to e-mail document images. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var ShippingDocumentEMailDetail|null $EMailDetail
     */
    protected $EMailDetail;

    /**
     * Specifies how a queued document is to be printed. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var ShippingDocumentPrintDetail|null $PrintDetail
     */
    protected $PrintDetail;


    /**
     * @param SimpleType\ShippingDocumentDispositionType|null $dispositionType
     * @return ShippingDocumentDispositionDetail
     */
    public function setDispositionType(SimpleType\ShippingDocumentDispositionType $dispositionType = null)
    {
        $this->DispositionType = $dispositionType;

        return $this;
    }

    /**
     * @return SimpleType\ShippingDocumentDispositionType|null
     */
    public function getDispositionType()
    {
        return $this->DispositionType;
    }

    /**
     * @param SimpleType\ShippingDocumentGroupingType|null $grouping
     * @return ShippingDocumentDispositionDetail
     */
    public function setGrouping(SimpleType\ShippingDocumentGroupingType $grouping = null)
    {
        $this->Grouping = $grouping;

        return $this;
    }

    /**
     * @return SimpleType\ShippingDocumentGroupingType|null
     */
    public function getGrouping()
    {
        return $this->Grouping;
    }

    /**
     * @param ShippingDocumentEMailDetail|null $eMailDetail
     * @return ShippingDocumentDispositionDetail
     */
    public function setEMailDetail(ShippingDocumentEMailDetail $eMailDetail = null)
    {
        $this->EMailDetail = $eMailDetail;

        return $this;
    }

    /**
     * @return ShippingDocumentEMailDetail|null
     */
    public function getEMailDetail()
    {
        return $this->EMailDetail;
    }

    /**
     * @param ShippingDocumentPrintDetail|null $printDetail
     * @return ShippingDocumentDispositionDetail
     */
    public function setPrintDetail(ShippingDocumentPrintDetail $printDetail = null)
    {
        $this->PrintDetail = $printDetail;

        return $this;
    }

    /**
     * @return ShippingDocumentPrintDetail|null
     */
    public function getPrintDetail()
    {
        return $this->PrintDetail;
    }


}

