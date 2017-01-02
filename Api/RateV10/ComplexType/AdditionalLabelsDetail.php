<?php

namespace MobileCart\FedexBundle\Api\RateV10\ComplexType;

use MobileCart\FedexBundle\Api\RateV10\SimpleType;

/**
 * Specifies additional labels to be produced. All required labels for shipments will be produced 
 * without the need to request additional labels. These are only available as thermal labels. 
 * 
 *
 *
 */
class AdditionalLabelsDetail extends ComplexTypeAbstract
{
    const CLASS_NAME = 'AdditionalLabelsDetail';

    /**
     * The type of additional labels to return. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\AdditionalLabelsType|null $Type
     */
    protected $Type;

    /**
     * The number of this type label to return 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var integer|null $Count
     */
    protected $Count;


    /**
     * @param SimpleType\AdditionalLabelsType|null $type
     * @return AdditionalLabelsDetail
     */
    public function setType(SimpleType\AdditionalLabelsType $type = null)
    {
        $this->Type = $type;

        return $this;
    }

    /**
     * @return SimpleType\AdditionalLabelsType|null
     */
    public function getType()
    {
        return $this->Type;
    }

    /**
     * @param integer|null $count
     * @return AdditionalLabelsDetail
     */
    public function setCount($count)
    {
        $this->Count = $count;

        return $this;
    }

    /**
     * @return integer|null
     */
    public function getCount()
    {
        return $this->Count;
    }


}

