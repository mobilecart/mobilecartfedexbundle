<?php

namespace MobileCart\FedexBundle\Api\RateV10\ComplexType;

use MobileCart\FedexBundle\Api\RateV10\SimpleType;

/**
 * Two part authentication string used for the sender's identity 
 *
 *
 */
class WebAuthenticationCredential extends ComplexTypeAbstract
{
    const CLASS_NAME = 'WebAuthenticationCredential';

    /**
     * Identifying part of authentication credential. This value is provided by FedEx after 
     * registration 
     * minOccurs = 1
     * maxOccurs = 1
     *
     * @var string $Key
     */
    protected $Key;

    /**
     * Secret part of authentication key. This value is provided by FedEx after registration. 
     * 
     * minOccurs = 1
     * maxOccurs = 1
     *
     * @var string $Password
     */
    protected $Password;


    /**
     * @param string $key
     * @return WebAuthenticationCredential
     */
    public function setKey($key)
    {
        $this->Key = $key;

        return $this;
    }

    /**
     * @return string
     */
    public function getKey()
    {
        return $this->Key;
    }

    /**
     * @param string $password
     * @return WebAuthenticationCredential
     */
    public function setPassword($password)
    {
        $this->Password = $password;

        return $this;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->Password;
    }


}

