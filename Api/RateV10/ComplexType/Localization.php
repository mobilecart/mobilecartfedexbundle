<?php

namespace MobileCart\FedexBundle\Api\RateV10\ComplexType;

use MobileCart\FedexBundle\Api\RateV10\SimpleType;

/**
 * Identifies the representation of human-readable text. 
 *
 *
 */
class Localization extends ComplexTypeAbstract
{
    const CLASS_NAME = 'Localization';

    /**
     * Two-letter code for language (e.g. EN, FR, etc.) 
     * minOccurs = 1
     * maxOccurs = 1
     *
     * @var string $LanguageCode
     */
    protected $LanguageCode;

    /**
     * Two-letter code for the region (e.g. us, ca, etc..). 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $LocaleCode
     */
    protected $LocaleCode;


    /**
     * @param string $languageCode
     * @return Localization
     */
    public function setLanguageCode($languageCode)
    {
        $this->LanguageCode = $languageCode;

        return $this;
    }

    /**
     * @return string
     */
    public function getLanguageCode()
    {
        return $this->LanguageCode;
    }

    /**
     * @param string|null $localeCode
     * @return Localization
     */
    public function setLocaleCode($localeCode)
    {
        $this->LocaleCode = $localeCode;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getLocaleCode()
    {
        return $this->LocaleCode;
    }


}

