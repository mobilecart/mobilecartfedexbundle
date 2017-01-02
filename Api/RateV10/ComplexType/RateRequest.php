<?php

namespace MobileCart\FedexBundle\Api\RateV10\ComplexType;

use MobileCart\FedexBundle\Api\RateV10\SimpleType;

/**
 * Descriptive data sent to FedEx by a customer in order to rate a package/shipment. 
 *
 *
 */
class RateRequest extends ComplexTypeAbstract
{
    const CLASS_NAME = 'RateRequest';

    /**
     * Descriptive data to be used in authentication of the sender's identity (and right to 
     * use FedEx web services). 
     * minOccurs = 1
     * maxOccurs = 1
     *
     * @var WebAuthenticationDetail $WebAuthenticationDetail
     */
    protected $WebAuthenticationDetail;

    /**
     * Descriptive data identifying the client submitting the transaction. 
     * minOccurs = 1
     * maxOccurs = 1
     *
     * @var ClientDetail $ClientDetail
     */
    protected $ClientDetail;

    /**
     * Descriptive data for this customer transaction. The TransactionDetail from the request 
     * is echoed back to the caller in the corresponding reply. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var TransactionDetail|null $TransactionDetail
     */
    protected $TransactionDetail;

    /**
     * Identifies the version/level of a service operation expected by a caller (in each request) 
     * and performed by the callee (in each reply). 
     * minOccurs = 1
     * maxOccurs = 1
     *
     * @var VersionId $Version
     */
    protected $Version;

    /**
     * Allows the caller to specify that the transit time and commit data are to be returned 
     * in the reply. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var boolean|null $ReturnTransitAndCommit
     */
    protected $ReturnTransitAndCommit;

    /**
     * Candidate carriers for rate-shopping use case. This field is only considered if requestedShipment/serviceType 
     * is omitted. 
     * minOccurs = 0
     * maxOccurs = unbounded
     *
     * @var SimpleType\CarrierCodeType[] $CarrierCodes
     */
    protected $CarrierCodes = array();

    /**
     * Contains zero or more service options whose combinations are to be considered when replying 
     * with available services. 
     * minOccurs = 0
     * maxOccurs = unbounded
     *
     * @var SimpleType\ServiceOptionType[] $VariableOptions
     */
    protected $VariableOptions = array();

    /**
     * The shipment for which a rate quote (or rate-shopping comparison) is desired. 
     * minOccurs = 1
     * maxOccurs = 1
     *
     * @var RequestedShipment $RequestedShipment
     */
    protected $RequestedShipment;


    /**
     * @param WebAuthenticationDetail $webAuthenticationDetail
     * @return RateRequest
     */
    public function setWebAuthenticationDetail(WebAuthenticationDetail $webAuthenticationDetail)
    {
        $this->WebAuthenticationDetail = $webAuthenticationDetail;

        return $this;
    }

    /**
     * @return WebAuthenticationDetail
     */
    public function getWebAuthenticationDetail()
    {
        return $this->WebAuthenticationDetail;
    }

    /**
     * @param ClientDetail $clientDetail
     * @return RateRequest
     */
    public function setClientDetail(ClientDetail $clientDetail)
    {
        $this->ClientDetail = $clientDetail;

        return $this;
    }

    /**
     * @return ClientDetail
     */
    public function getClientDetail()
    {
        return $this->ClientDetail;
    }

    /**
     * @param TransactionDetail|null $transactionDetail
     * @return RateRequest
     */
    public function setTransactionDetail(TransactionDetail $transactionDetail = null)
    {
        $this->TransactionDetail = $transactionDetail;

        return $this;
    }

    /**
     * @return TransactionDetail|null
     */
    public function getTransactionDetail()
    {
        return $this->TransactionDetail;
    }

    /**
     * @param VersionId $version
     * @return RateRequest
     */
    public function setVersion(VersionId $version)
    {
        $this->Version = $version;

        return $this;
    }

    /**
     * @return VersionId
     */
    public function getVersion()
    {
        return $this->Version;
    }

    /**
     * @param boolean|null $returnTransitAndCommit
     * @return RateRequest
     */
    public function setReturnTransitAndCommit($returnTransitAndCommit)
    {
        $this->ReturnTransitAndCommit = $returnTransitAndCommit;

        return $this;
    }

    /**
     * @return boolean|null
     */
    public function getReturnTransitAndCommit()
    {
        return $this->ReturnTransitAndCommit;
    }

    /**
     * @param SimpleType\CarrierCodeType[] $carrierCodes
     * @return RateRequest
     */
    public function setCarrierCodes(array $carrierCodes = array())
    {
        $this->CarrierCodes = $carrierCodes;

        return $this;
    }

    /**
     * @return SimpleType\CarrierCodeType[]
     */
    public function getCarrierCodes()
    {
        return $this->CarrierCodes;
    }

    /**
     * @param SimpleType\ServiceOptionType[] $variableOptions
     * @return RateRequest
     */
    public function setVariableOptions(array $variableOptions = array())
    {
        $this->VariableOptions = $variableOptions;

        return $this;
    }

    /**
     * @return SimpleType\ServiceOptionType[]
     */
    public function getVariableOptions()
    {
        return $this->VariableOptions;
    }

    /**
     * @param RequestedShipment $requestedShipment
     * @return RateRequest
     */
    public function setRequestedShipment(RequestedShipment $requestedShipment)
    {
        $this->RequestedShipment = $requestedShipment;

        return $this;
    }

    /**
     * @return RequestedShipment
     */
    public function getRequestedShipment()
    {
        return $this->RequestedShipment;
    }


}

