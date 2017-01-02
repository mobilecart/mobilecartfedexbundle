<?php

namespace MobileCart\FedexBundle\Api\RateV10\ComplexType;

use MobileCart\FedexBundle\Api\RateV10\SimpleType;

/**
 * Country specific details of an International shipment. 
 *
 *
 */
class ExportDetail extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ExportDetail';

    /**
     * Specifies which filing option is being exercised by the customer.
                Required 
     * for non-document shipments originating in Canada destined for any country other than 
     * Canada, the United States, Puerto Rico or the U.S. Virgin Islands. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\B13AFilingOptionType|null $B13AFilingOption
     */
    protected $B13AFilingOption;

    /**
     * General field for exporting-country-specific export data (e.g. B13A for CA, FTSR Exemption 
     * or AES Citation for US). 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $ExportComplianceStatement
     */
    protected $ExportComplianceStatement;

    /**
     * This field is applicable only to Canada export non-document shipments of any value to 
     * any destination. No special characters allowed. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $PermitNumber
     */
    protected $PermitNumber;

    /**
     * Department of Commerce/Department of State information about this shipment. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var DestinationControlDetail|null $DestinationControlDetail
     */
    protected $DestinationControlDetail;


    /**
     * @param SimpleType\B13AFilingOptionType|null $b13AFilingOption
     * @return ExportDetail
     */
    public function setB13AFilingOption(SimpleType\B13AFilingOptionType $b13AFilingOption = null)
    {
        $this->B13AFilingOption = $b13AFilingOption;

        return $this;
    }

    /**
     * @return SimpleType\B13AFilingOptionType|null
     */
    public function getB13AFilingOption()
    {
        return $this->B13AFilingOption;
    }

    /**
     * @param string|null $exportComplianceStatement
     * @return ExportDetail
     */
    public function setExportComplianceStatement($exportComplianceStatement)
    {
        $this->ExportComplianceStatement = $exportComplianceStatement;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getExportComplianceStatement()
    {
        return $this->ExportComplianceStatement;
    }

    /**
     * @param string|null $permitNumber
     * @return ExportDetail
     */
    public function setPermitNumber($permitNumber)
    {
        $this->PermitNumber = $permitNumber;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getPermitNumber()
    {
        return $this->PermitNumber;
    }

    /**
     * @param DestinationControlDetail|null $destinationControlDetail
     * @return ExportDetail
     */
    public function setDestinationControlDetail(DestinationControlDetail $destinationControlDetail = null)
    {
        $this->DestinationControlDetail = $destinationControlDetail;

        return $this;
    }

    /**
     * @return DestinationControlDetail|null
     */
    public function getDestinationControlDetail()
    {
        return $this->DestinationControlDetail;
    }


}

