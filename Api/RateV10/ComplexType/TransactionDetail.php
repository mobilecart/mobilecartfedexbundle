<?php

namespace MobileCart\FedexBundle\Api\RateV10\ComplexType;

use MobileCart\FedexBundle\Api\RateV10\SimpleType;

/**
 * Descriptive data for this customer transaction. The TransactionDetail from the request is 
 * echoed back to the caller in the corresponding reply. 
 *
 *
 */
class TransactionDetail extends ComplexTypeAbstract
{
    const CLASS_NAME = 'TransactionDetail';

    /**
     * Free form text to be echoed back in the reply. Used to match requests and replies. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $CustomerTransactionId
     */
    protected $CustomerTransactionId;

    /**
     * Governs data payload language/translations (contrasted with ClientDetail.localization, 
     * which governs Notification.localizedMessage language selection). 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var Localization|null $Localization
     */
    protected $Localization;


    /**
     * @param string|null $customerTransactionId
     * @return TransactionDetail
     */
    public function setCustomerTransactionId($customerTransactionId)
    {
        $this->CustomerTransactionId = $customerTransactionId;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getCustomerTransactionId()
    {
        return $this->CustomerTransactionId;
    }

    /**
     * @param Localization|null $localization
     * @return TransactionDetail
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

