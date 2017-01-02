<?php

namespace MobileCart\FedexBundle\Api\RateV10\ComplexType;

use MobileCart\FedexBundle\Api\RateV10\SimpleType;

/**
 * Customer-provided specifications for handling individual commodities. 
 *
 *
 */
class HazardousCommodityOptionDetail extends ComplexTypeAbstract
{
    const CLASS_NAME = 'HazardousCommodityOptionDetail';

    /**
     * Specifies how the customer wishes the label text to be handled for this commodity in 
     * this package. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\HazardousCommodityLabelTextOptionType|null $LabelTextOption
     */
    protected $LabelTextOption;

    /**
     * Text used in labeling the commodity under control of the labelTextOption field. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $CustomerSuppliedLabelText
     */
    protected $CustomerSuppliedLabelText;


    /**
     * @param SimpleType\HazardousCommodityLabelTextOptionType|null $labelTextOption
     * @return HazardousCommodityOptionDetail
     */
    public function setLabelTextOption(SimpleType\HazardousCommodityLabelTextOptionType $labelTextOption = null)
    {
        $this->LabelTextOption = $labelTextOption;

        return $this;
    }

    /**
     * @return SimpleType\HazardousCommodityLabelTextOptionType|null
     */
    public function getLabelTextOption()
    {
        return $this->LabelTextOption;
    }

    /**
     * @param string|null $customerSuppliedLabelText
     * @return HazardousCommodityOptionDetail
     */
    public function setCustomerSuppliedLabelText($customerSuppliedLabelText)
    {
        $this->CustomerSuppliedLabelText = $customerSuppliedLabelText;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getCustomerSuppliedLabelText()
    {
        return $this->CustomerSuppliedLabelText;
    }


}

