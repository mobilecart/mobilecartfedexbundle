<?php

namespace MobileCart\FedexBundle\Api\RateV10\ComplexType;

use MobileCart\FedexBundle\Api\RateV10\SimpleType;

/**
 * Identifies the version/level of a service operation expected by a caller (in each request) 
 * and performed by the callee (in each reply). 
 *
 *
 */
class VersionId extends ComplexTypeAbstract
{
    const CLASS_NAME = 'VersionId';

    /**
     * Identifies a system or sub-system which performs an operation. 
     * minOccurs = 1
     * maxOccurs = 1
     *
     * @var string $ServiceId
     */
    protected $ServiceId = 'crs';

    /**
     * Identifies the service business level. 
     * minOccurs = 1
     * maxOccurs = 1
     *
     * @var integer $Major
     */
    protected $Major = 10;

    /**
     * Identifies the service interface level. 
     * minOccurs = 1
     * maxOccurs = 1
     *
     * @var integer $Intermediate
     */
    protected $Intermediate = 0;

    /**
     * Identifies the service code level. 
     * minOccurs = 1
     * maxOccurs = 1
     *
     * @var integer $Minor
     */
    protected $Minor = 0;


    /**
     * @param string $serviceId
     * @return VersionId
     */
    public function setServiceId($serviceId)
    {
        $this->ServiceId = $serviceId;

        return $this;
    }

    /**
     * @return string
     */
    public function getServiceId()
    {
        return $this->ServiceId;
    }

    /**
     * @param integer $major
     * @return VersionId
     */
    public function setMajor($major)
    {
        $this->Major = $major;

        return $this;
    }

    /**
     * @return integer
     */
    public function getMajor()
    {
        return $this->Major;
    }

    /**
     * @param integer $intermediate
     * @return VersionId
     */
    public function setIntermediate($intermediate)
    {
        $this->Intermediate = $intermediate;

        return $this;
    }

    /**
     * @return integer
     */
    public function getIntermediate()
    {
        return $this->Intermediate;
    }

    /**
     * @param integer $minor
     * @return VersionId
     */
    public function setMinor($minor)
    {
        $this->Minor = $minor;

        return $this;
    }

    /**
     * @return integer
     */
    public function getMinor()
    {
        return $this->Minor;
    }


}

