<?php

namespace MobileCart\FedexBundle\Api\RateV10\ComplexType;

use MobileCart\FedexBundle\Api\RateV10\SimpleType;

/**
 * Descriptive data for the client submitting a transaction. 
 *
 *
 */
class ClientDetail extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ClientDetail';

    /**
     * The FedEx account number associated with this transaction. 
     * minOccurs = 1
     * maxOccurs = 1
     *
     * @var string $AccountNumber
     */
    protected $AccountNumber;

    /**
     * This number is assigned by FedEx and identifies the unique device from which the request 
     * is originating 
     * minOccurs = 1
     * maxOccurs = 1
     *
     * @var string $MeterNumber
     */
    protected $MeterNumber;

    /**
     * Only used in transactions which require identification of the Fed Ex Office integrator. 
     * 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $IntegratorId
     */
    protected $IntegratorId;

    /**
     * Indicates the region from which the transaction is submitted. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\ExpressRegionCode|null $Region
     */
    protected $Region;

    /**
     * The language to be used for human-readable Notification.localizedMessages in responses 
     * to the request containing this ClientDetail object. Different requests from the same 
     * client may contain different Localization data. (Contrast with TransactionDetail.localization, 
     * which governs data payload language/translation.) 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var Localization|null $Localization
     */
    protected $Localization;


    /**
     * @param string $accountNumber
     * @return ClientDetail
     */
    public function setAccountNumber($accountNumber)
    {
        $this->AccountNumber = $accountNumber;

        return $this;
    }

    /**
     * @return string
     */
    public function getAccountNumber()
    {
        return $this->AccountNumber;
    }

    /**
     * @param string $meterNumber
     * @return ClientDetail
     */
    public function setMeterNumber($meterNumber)
    {
        $this->MeterNumber = $meterNumber;

        return $this;
    }

    /**
     * @return string
     */
    public function getMeterNumber()
    {
        return $this->MeterNumber;
    }

    /**
     * @param string|null $integratorId
     * @return ClientDetail
     */
    public function setIntegratorId($integratorId)
    {
        $this->IntegratorId = $integratorId;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getIntegratorId()
    {
        return $this->IntegratorId;
    }

    /**
     * @param SimpleType\ExpressRegionCode|null $region
     * @return ClientDetail
     */
    public function setRegion(SimpleType\ExpressRegionCode $region = null)
    {
        $this->Region = $region;

        return $this;
    }

    /**
     * @return SimpleType\ExpressRegionCode|null
     */
    public function getRegion()
    {
        return $this->Region;
    }

    /**
     * @param Localization|null $localization
     * @return ClientDetail
     */
    public function setLocalization(Localization $localization = null)
    {
        $this->Localization = $localization;

        return $this;
    }

    /**
     * @return Localization|null
     */
    public function getLocalization()
    {
        return $this->Localization;
    }


}

