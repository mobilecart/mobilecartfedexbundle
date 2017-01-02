<?php

namespace MobileCart\FedexBundle\Api\RateV10\ComplexType;

use MobileCart\FedexBundle\Api\RateV10\SimpleType;

/**
 * CommercialInvoice element is required for electronic upload of CI data. It will serve to 
 * create/transmit an Electronic Commercial Invoice through the FedEx Systems. Customers are 
 * responsible for printing their own Commercial Invoice.If you would likeFedEx to generate 
 * a Commercial Invoice and transmit it to Customs. for clearance purposes, you need to specify 
 * that in the ShippingDocumentSpecification element. If you would like a copy of the Commercial 
 * Invoice that FedEx generated returned to you in reply it needs to be specified in the ETDDetail/RequestedDocumentCopies 
 * element. Commercial Invoice support consists of maximum of 99 commodity line items. 
 *
 *
 */
class CommercialInvoice extends ComplexTypeAbstract
{
    const CLASS_NAME = 'CommercialInvoice';

    /**
     * Any comments that need to be communicated about this shipment. 
     * minOccurs = 0
     * maxOccurs = 99
     *
     * @var string[] $Comments
     */
    protected $Comments = array();

    /**
     * Any freight charges that are associated with this shipment. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var Money|null $FreightCharge
     */
    protected $FreightCharge;

    /**
     * Any taxes or miscellaneous charges(other than Freight charges or Insurance charges) 
     * that are associated with this shipment. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var Money|null $TaxesOrMiscellaneousCharge
     */
    protected $TaxesOrMiscellaneousCharge;

    /**
     * Specifies which kind of charge is being recorded in the preceding field. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\TaxesOrMiscellaneousChargeType|null $TaxesOrMiscellaneousChargeType
     */
    protected $TaxesOrMiscellaneousChargeType;

    /**
     * Any packing costs that are associated with this shipment. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var Money|null $PackingCosts
     */
    protected $PackingCosts;

    /**
     * Any handling costs that are associated with this shipment. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var Money|null $HandlingCosts
     */
    protected $HandlingCosts;

    /**
     * Free-form text. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $SpecialInstructions
     */
    protected $SpecialInstructions;

    /**
     * Free-form text. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $DeclarationStatment
     */
    protected $DeclarationStatment;

    /**
     * Free-form text. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $PaymentTerms
     */
    protected $PaymentTerms;

    /**
     * The reason for the shipment. Note: SOLD is not a valid purpose for a Proforma Invoice. 
     * 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\PurposeOfShipmentType|null $Purpose
     */
    protected $Purpose;

    /**
     * Customer assigned Invoice number 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $CustomerInvoiceNumber
     */
    protected $CustomerInvoiceNumber;

    /**
     * Name of the International Expert that completed the Commercial Invoice different from 
     * Sender. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $OriginatorName
     */
    protected $OriginatorName;

    /**
     * Required for dutiable international Express or Ground shipment. This field is not applicable 
     * to an international PIB(document) or a non-document which does not require a Commercial 
     * Invoice 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\TermsOfSaleType|null $TermsOfSale
     */
    protected $TermsOfSale;


    /**
     * @param string[] $comments
     * @return CommercialInvoice
     */
    public function setComments(array $comments = array())
    {
        $this->Comments = $comments;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getComments()
    {
        return $this->Comments;
    }

    /**
     * @param Money|null $freightCharge
     * @return CommercialInvoice
     */
    public function setFreightCharge(Money $freightCharge = null)
    {
        $this->FreightCharge = $freightCharge;

        return $this;
    }

    /**
     * @return Money|null
     */
    public function getFreightCharge()
    {
        return $this->FreightCharge;
    }

    /**
     * @param Money|null $taxesOrMiscellaneousCharge
     * @return CommercialInvoice
     */
    public function setTaxesOrMiscellaneousCharge(Money $taxesOrMiscellaneousCharge = null)
    {
        $this->TaxesOrMiscellaneousCharge = $taxesOrMiscellaneousCharge;

        return $this;
    }

    /**
     * @return Money|null
     */
    public function getTaxesOrMiscellaneousCharge()
    {
        return $this->TaxesOrMiscellaneousCharge;
    }

    /**
     * @param SimpleType\TaxesOrMiscellaneousChargeType|null $taxesOrMiscellaneousChargeType
     * @return CommercialInvoice
     */
    public function setTaxesOrMiscellaneousChargeType(SimpleType\TaxesOrMiscellaneousChargeType $taxesOrMiscellaneousChargeType = null)
    {
        $this->TaxesOrMiscellaneousChargeType = $taxesOrMiscellaneousChargeType;

        return $this;
    }

    /**
     * @return SimpleType\TaxesOrMiscellaneousChargeType|null
     */
    public function getTaxesOrMiscellaneousChargeType()
    {
        return $this->TaxesOrMiscellaneousChargeType;
    }

    /**
     * @param Money|null $packingCosts
     * @return CommercialInvoice
     */
    public function setPackingCosts(Money $packingCosts = null)
    {
        $this->PackingCosts = $packingCosts;

        return $this;
    }

    /**
     * @return Money|null
     */
    public function getPackingCosts()
    {
        return $this->PackingCosts;
    }

    /**
     * @param Money|null $handlingCosts
     * @return CommercialInvoice
     */
    public function setHandlingCosts(Money $handlingCosts = null)
    {
        $this->HandlingCosts = $handlingCosts;

        return $this;
    }

    /**
     * @return Money|null
     */
    public function getHandlingCosts()
    {
        return $this->HandlingCosts;
    }

    /**
     * @param string|null $specialInstructions
     * @return CommercialInvoice
     */
    public function setSpecialInstructions($specialInstructions)
    {
        $this->SpecialInstructions = $specialInstructions;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getSpecialInstructions()
    {
        return $this->SpecialInstructions;
    }

    /**
     * @param string|null $declarationStatment
     * @return CommercialInvoice
     */
    public function setDeclarationStatment($declarationStatment)
    {
        $this->DeclarationStatment = $declarationStatment;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getDeclarationStatment()
    {
        return $this->DeclarationStatment;
    }

    /**
     * @param string|null $paymentTerms
     * @return CommercialInvoice
     */
    public function setPaymentTerms($paymentTerms)
    {
        $this->PaymentTerms = $paymentTerms;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getPaymentTerms()
    {
        return $this->PaymentTerms;
    }

    /**
     * @param SimpleType\PurposeOfShipmentType|null $purpose
     * @return CommercialInvoice
     */
    public function setPurpose(SimpleType\PurposeOfShipmentType $purpose = null)
    {
        $this->Purpose = $purpose;

        return $this;
    }

    /**
     * @return SimpleType\PurposeOfShipmentType|null
     */
    public function getPurpose()
    {
        return $this->Purpose;
    }

    /**
     * @param string|null $customerInvoiceNumber
     * @return CommercialInvoice
     */
    public function setCustomerInvoiceNumber($customerInvoiceNumber)
    {
        $this->CustomerInvoiceNumber = $customerInvoiceNumber;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getCustomerInvoiceNumber()
    {
        return $this->CustomerInvoiceNumber;
    }

    /**
     * @param string|null $originatorName
     * @return CommercialInvoice
     */
    public function setOriginatorName($originatorName)
    {
        $this->OriginatorName = $originatorName;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getOriginatorName()
    {
        return $this->OriginatorName;
    }

    /**
     * @param SimpleType\TermsOfSaleType|null $termsOfSale
     * @return CommercialInvoice
     */
    public function setTermsOfSale(SimpleType\TermsOfSaleType $termsOfSale = null)
    {
        $this->TermsOfSale = $termsOfSale;

        return $this;
    }

    /**
     * @return SimpleType\TermsOfSaleType|null
     */
    public function getTermsOfSale()
    {
        return $this->TermsOfSale;
    }


}

