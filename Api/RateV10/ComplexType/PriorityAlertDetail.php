<?php

namespace MobileCart\FedexBundle\Api\RateV10\ComplexType;

use MobileCart\FedexBundle\Api\RateV10\SimpleType;

/**
 * Currently not supported. 
 *
 *
 */
class PriorityAlertDetail extends ComplexTypeAbstract
{
    const CLASS_NAME = 'PriorityAlertDetail';

    /**

     * minOccurs = 0
     * maxOccurs = 3
     *
     * @var string[] $Content
     */
    protected $Content = array();


    /**
     * @param string[] $content
     * @return PriorityAlertDetail
     */
    public function setContent(array $content = array())
    {
        $this->Content = $content;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getContent()
    {
        return $this->Content;
    }


}

