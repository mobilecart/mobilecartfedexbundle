<?php

namespace MobileCart\FedexBundle\Api\RateV10\ComplexType;

use MobileCart\FedexBundle\Api\RateV10\SimpleType;

/**
 * Used in authentication of the sender's identity. 
 *
 *
 */
class WebAuthenticationDetail extends ComplexTypeAbstract
{
    const CLASS_NAME = 'WebAuthenticationDetail';

    /**
     * Credential used to authenticate a specific software application. This value is provided 
     * by FedEx after registration. 
     * minOccurs = 1
     * maxOccurs = 1
     *
     * @var WebAuthenticationCredential $UserCredential
     */
    protected $UserCredential;


    /**
     * @param WebAuthenticationCredential $userCredential
     * @return WebAuthenticationDetail
     */
    public function setUserCredential(WebAuthenticationCredential $userCredential)
    {
        $this->UserCredential = $userCredential;

        return $this;
    }

    /**
     * @return WebAuthenticationCredential
     */
    public function getUserCredential()
    {
        return $this->UserCredential;
    }


}

