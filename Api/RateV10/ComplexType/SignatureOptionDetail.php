<?php

namespace MobileCart\FedexBundle\Api\RateV10\ComplexType;

use MobileCart\FedexBundle\Api\RateV10\SimpleType;

/**
 * The descriptive data required for FedEx delivery signature services. 
 *
 *
 */
class SignatureOptionDetail extends ComplexTypeAbstract
{
    const CLASS_NAME = 'SignatureOptionDetail';

    /**
     * Identifies the delivery signature services option selected by the customer for this 
     * shipment. See OptionType for the list of valid values. 
     * minOccurs = 1
     * maxOccurs = 1
     *
     * @var SimpleType\SignatureOptionType $OptionType
     */
    protected $OptionType;

    /**
     * Identifies the delivery signature release authorization number. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $SignatureReleaseNumber
     */
    protected $SignatureReleaseNumber;


    /**
     * @param SimpleType\SignatureOptionType $optionType
     * @return SignatureOptionDetail
     */
    public function setOptionType(SimpleType\SignatureOptionType $optionType)
    {
        $this->OptionType = $optionType;

        return $this;
    }

    /**
     * @return SimpleType\SignatureOptionType
     */
    public function getOptionType()
    {
        return $this->OptionType;
    }

    /**
     * @param string|null $signatureReleaseNumber
     * @return SignatureOptionDetail
     */
    public function setSignatureReleaseNumber($signatureReleaseNumber)
    {
        $this->SignatureReleaseNumber = $signatureReleaseNumber;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getSignatureReleaseNumber()
    {
        return $this->SignatureReleaseNumber;
    }


}

