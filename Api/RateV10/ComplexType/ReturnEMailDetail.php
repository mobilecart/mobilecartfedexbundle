<?php

namespace MobileCart\FedexBundle\Api\RateV10\ComplexType;

use MobileCart\FedexBundle\Api\RateV10\SimpleType;

/**
 *
 *
 */
class ReturnEMailDetail extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ReturnEMailDetail';

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $MerchantPhoneNumber
     */
    protected $MerchantPhoneNumber;

    /**
     * Identifies the allowed (merchant-authorized) special services which may be selected 
     * when the subsequent shipment is created. Only services represented in EMailLabelAllowedSpecialServiceType 
     * will be controlled by this list. 
     * minOccurs = 0
     * maxOccurs = unbounded
     *
     * @var SimpleType\ReturnEMailAllowedSpecialServiceType[] $AllowedSpecialServices
     */
    protected $AllowedSpecialServices = array();


    /**
     * @param string|null $merchantPhoneNumber
     * @return ReturnEMailDetail
     */
    public function setMerchantPhoneNumber($merchantPhoneNumber)
    {
        $this->MerchantPhoneNumber = $merchantPhoneNumber;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getMerchantPhoneNumber()
    {
        return $this->MerchantPhoneNumber;
    }

    /**
     * @param SimpleType\ReturnEMailAllowedSpecialServiceType[] $allowedSpecialServices
     * @return ReturnEMailDetail
     */
    public function setAllowedSpecialServices(array $allowedSpecialServices = array())
    {
        $this->AllowedSpecialServices = $allowedSpecialServices;

        return $this;
    }

    /**
     * @return SimpleType\ReturnEMailAllowedSpecialServiceType[]
     */
    public function getAllowedSpecialServices()
    {
        return $this->AllowedSpecialServices;
    }


}

