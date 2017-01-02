<?php

namespace MobileCart\FedexBundle\Api\RateV10\ComplexType;

use MobileCart\FedexBundle\Api\RateV10\SimpleType;

/**
 *
 *
 */
class DateRange extends ComplexTypeAbstract
{
    const CLASS_NAME = 'DateRange';

    /**

     * minOccurs = 1
     * maxOccurs = 1
     *
     * @var string $Begins
     */
    protected $Begins;

    /**

     * minOccurs = 1
     * maxOccurs = 1
     *
     * @var string $Ends
     */
    protected $Ends;


    /**
     * @param string $begins
     * @return DateRange
     */
    public function setBegins($begins)
    {
        $this->Begins = $begins;

        return $this;
    }

    /**
     * @return string
     */
    public function getBegins()
    {
        return $this->Begins;
    }

    /**
     * @param string $ends
     * @return DateRange
     */
    public function setEnds($ends)
    {
        $this->Ends = $ends;

        return $this;
    }

    /**
     * @return string
     */
    public function getEnds()
    {
        return $this->Ends;
    }


}

