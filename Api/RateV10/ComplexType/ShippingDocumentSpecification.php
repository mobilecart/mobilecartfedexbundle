<?php

namespace MobileCart\FedexBundle\Api\RateV10\ComplexType;

use MobileCart\FedexBundle\Api\RateV10\SimpleType;

/**
 * Contains all data required for additional (non-label) shipping documents to be produced 
 * in conjunction with a specific shipment. 
 *
 *
 */
class ShippingDocumentSpecification extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ShippingDocumentSpecification';

    /**
     * Indicates the types of shipping documents requested by the shipper. 
     * minOccurs = 0
     * maxOccurs = unbounded
     *
     * @var SimpleType\RequestedShippingDocumentType[] $ShippingDocumentTypes
     */
    protected $ShippingDocumentTypes = array();

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var CertificateOfOriginDetail|null $CertificateOfOrigin
     */
    protected $CertificateOfOrigin;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var CommercialInvoiceDetail|null $CommercialInvoiceDetail
     */
    protected $CommercialInvoiceDetail;

    /**
     * Specifies the production of each package-level custom document (the same specification 
     * is used for all packages). 
     * minOccurs = 0
     * maxOccurs = unbounded
     *
     * @var CustomDocumentDetail[] $CustomPackageDocumentDetail
     */
    protected $CustomPackageDocumentDetail = array();

    /**
     * Specifies the production of a shipment-level custom document. 
     * minOccurs = 0
     * maxOccurs = unbounded
     *
     * @var CustomDocumentDetail[] $CustomShipmentDocumentDetail
     */
    protected $CustomShipmentDocumentDetail = array();

    /**
     * Details pertaining to the GAA. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var GeneralAgencyAgreementDetail|null $GeneralAgencyAgreementDetail
     */
    protected $GeneralAgencyAgreementDetail;

    /**
     * Details pertaining to NAFTA COO. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var NaftaCertificateOfOriginDetail|null $NaftaCertificateOfOriginDetail
     */
    protected $NaftaCertificateOfOriginDetail;

    /**
     * Specifies the production of the OP-900 document for hazardous materials packages. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var Op900Detail|null $Op900Detail
     */
    protected $Op900Detail;


    /**
     * @param SimpleType\RequestedShippingDocumentType[] $shippingDocumentTypes
     * @return ShippingDocumentSpecification
     */
    public function setShippingDocumentTypes(array $shippingDocumentTypes = array())
    {
        $this->ShippingDocumentTypes = $shippingDocumentTypes;

        return $this;
    }

    /**
     * @return SimpleType\RequestedShippingDocumentType[]
     */
    public function getShippingDocumentTypes()
    {
        return $this->ShippingDocumentTypes;
    }

    /**
     * @param CertificateOfOriginDetail|null $certificateOfOrigin
     * @return ShippingDocumentSpecification
     */
    public function setCertificateOfOrigin(CertificateOfOriginDetail $certificateOfOrigin = null)
    {
        $this->CertificateOfOrigin = $certificateOfOrigin;

        return $this;
    }

    /**
     * @return CertificateOfOriginDetail|null
     */
    public function getCertificateOfOrigin()
    {
        return $this->CertificateOfOrigin;
    }

    /**
     * @param CommercialInvoiceDetail|null $commercialInvoiceDetail
     * @return ShippingDocumentSpecification
     */
    public function setCommercialInvoiceDetail(CommercialInvoiceDetail $commercialInvoiceDetail = null)
    {
        $this->CommercialInvoiceDetail = $commercialInvoiceDetail;

        return $this;
    }

    /**
     * @return CommercialInvoiceDetail|null
     */
    public function getCommercialInvoiceDetail()
    {
        return $this->CommercialInvoiceDetail;
    }

    /**
     * @param CustomDocumentDetail[] $customPackageDocumentDetail
     * @return ShippingDocumentSpecification
     */
    public function setCustomPackageDocumentDetail(array $customPackageDocumentDetail = array())
    {
        $this->CustomPackageDocumentDetail = $customPackageDocumentDetail;

        return $this;
    }

    /**
     * @return CustomDocumentDetail[]
     */
    public function getCustomPackageDocumentDetail()
    {
        return $this->CustomPackageDocumentDetail;
    }

    /**
     * @param CustomDocumentDetail[] $customShipmentDocumentDetail
     * @return ShippingDocumentSpecification
     */
    public function setCustomShipmentDocumentDetail(array $customShipmentDocumentDetail = array())
    {
        $this->CustomShipmentDocumentDetail = $customShipmentDocumentDetail;

        return $this;
    }

    /**
     * @return CustomDocumentDetail[]
     */
    public function getCustomShipmentDocumentDetail()
    {
        return $this->CustomShipmentDocumentDetail;
    }

    /**
     * @param GeneralAgencyAgreementDetail|null $generalAgencyAgreementDetail
     * @return ShippingDocumentSpecification
     */
    public function setGeneralAgencyAgreementDetail(GeneralAgencyAgreementDetail $generalAgencyAgreementDetail = null)
    {
        $this->GeneralAgencyAgreementDetail = $generalAgencyAgreementDetail;

        return $this;
    }

    /**
     * @return GeneralAgencyAgreementDetail|null
     */
    public function getGeneralAgencyAgreementDetail()
    {
        return $this->GeneralAgencyAgreementDetail;
    }

    /**
     * @param NaftaCertificateOfOriginDetail|null $naftaCertificateOfOriginDetail
     * @return ShippingDocumentSpecification
     */
    public function setNaftaCertificateOfOriginDetail(NaftaCertificateOfOriginDetail $naftaCertificateOfOriginDetail = null)
    {
        $this->NaftaCertificateOfOriginDetail = $naftaCertificateOfOriginDetail;

        return $this;
    }

    /**
     * @return NaftaCertificateOfOriginDetail|null
     */
    public function getNaftaCertificateOfOriginDetail()
    {
        return $this->NaftaCertificateOfOriginDetail;
    }

    /**
     * @param Op900Detail|null $op900Detail
     * @return ShippingDocumentSpecification
     */
    public function setOp900Detail(Op900Detail $op900Detail = null)
    {
        $this->Op900Detail = $op900Detail;

        return $this;
    }

    /**
     * @return Op900Detail|null
     */
    public function getOp900Detail()
    {
        return $this->Op900Detail;
    }


}

