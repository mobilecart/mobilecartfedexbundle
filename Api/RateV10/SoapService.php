<?php

namespace MobileCart\FedexBundle\Api\RateV10;

use RuntimeException;
use SoapFault;
use SoapClient as BaseSoapClient;
use InvalidArgumentException;
use MobileCart\FedexBundle\Api\RateV10\ComplexType\RateReply;
use MobileCart\FedexBundle\Api\RateV10\ComplexType\RateRequest;

/**
 * Fedex Soap Service
 *
 */
class SoapService
{
    /**
     * @var BaseSoapClient
     */
    protected $soapClient;

    /**
     * @var array
     */
    private static $classMaps = [
        'AdditionalLabelsType' => 'MobileCart\FedexBundle\Api\RateV10\SimpleType\AdditionalLabelsType',
        'B13AFilingOptionType' => 'MobileCart\FedexBundle\Api\RateV10\SimpleType\B13AFilingOptionType',
        'BarcodeSymbologyType' => 'MobileCart\FedexBundle\Api\RateV10\SimpleType\BarcodeSymbologyType',
        'CarrierCodeType' => 'MobileCart\FedexBundle\Api\RateV10\SimpleType\CarrierCodeType',
        'ChargeBasisLevelType' => 'MobileCart\FedexBundle\Api\RateV10\SimpleType\ChargeBasisLevelType',
        'ClearanceBrokerageType' => 'MobileCart\FedexBundle\Api\RateV10\SimpleType\ClearanceBrokerageType',
        'CodAddTransportationChargeBasisType' => 'MobileCart\FedexBundle\Api\RateV10\SimpleType\CodAddTransportationChargeBasisType',
        'CodCollectionType' => 'MobileCart\FedexBundle\Api\RateV10\SimpleType\CodCollectionType',
        'CodReturnReferenceIndicatorType' => 'MobileCart\FedexBundle\Api\RateV10\SimpleType\CodReturnReferenceIndicatorType',
        'CommitmentDelayType' => 'MobileCart\FedexBundle\Api\RateV10\SimpleType\CommitmentDelayType',
        'CustomDeliveryWindowType' => 'MobileCart\FedexBundle\Api\RateV10\SimpleType\CustomDeliveryWindowType',
        'CustomLabelCoordinateUnits' => 'MobileCart\FedexBundle\Api\RateV10\SimpleType\CustomLabelCoordinateUnits',
        'CustomerImageUsageType' => 'MobileCart\FedexBundle\Api\RateV10\SimpleType\CustomerImageUsageType',
        'CustomerReferenceType' => 'MobileCart\FedexBundle\Api\RateV10\SimpleType\CustomerReferenceType',
        'DangerousGoodsAccessibilityType' => 'MobileCart\FedexBundle\Api\RateV10\SimpleType\DangerousGoodsAccessibilityType',
        'DayOfWeekType' => 'MobileCart\FedexBundle\Api\RateV10\SimpleType\DayOfWeekType',
        'DelayLevelType' => 'MobileCart\FedexBundle\Api\RateV10\SimpleType\DelayLevelType',
        'DelayPointType' => 'MobileCart\FedexBundle\Api\RateV10\SimpleType\DelayPointType',
        'DestinationControlStatementType' => 'MobileCart\FedexBundle\Api\RateV10\SimpleType\DestinationControlStatementType',
        'DistanceUnits' => 'MobileCart\FedexBundle\Api\RateV10\SimpleType\DistanceUnits',
        'DocTabContentType' => 'MobileCart\FedexBundle\Api\RateV10\SimpleType\DocTabContentType',
        'DocTabZoneJustificationType' => 'MobileCart\FedexBundle\Api\RateV10\SimpleType\DocTabZoneJustificationType',
        'DropoffType' => 'MobileCart\FedexBundle\Api\RateV10\SimpleType\DropoffType',
        'EMailNotificationEventType' => 'MobileCart\FedexBundle\Api\RateV10\SimpleType\EMailNotificationEventType',
        'EMailNotificationFormatType' => 'MobileCart\FedexBundle\Api\RateV10\SimpleType\EMailNotificationFormatType',
        'EMailNotificationRecipientType' => 'MobileCart\FedexBundle\Api\RateV10\SimpleType\EMailNotificationRecipientType',
        'EdtRequestType' => 'MobileCart\FedexBundle\Api\RateV10\SimpleType\EdtRequestType',
        'EdtTaxType' => 'MobileCart\FedexBundle\Api\RateV10\SimpleType\EdtTaxType',
        'ExpressRegionCode' => 'MobileCart\FedexBundle\Api\RateV10\SimpleType\ExpressRegionCode',
        'FedExLocationType' => 'MobileCart\FedexBundle\Api\RateV10\SimpleType\FedExLocationType',
        'FlatbedTrailerOption' => 'MobileCart\FedexBundle\Api\RateV10\SimpleType\FlatbedTrailerOption',
        'FreightAccountPaymentType' => 'MobileCart\FedexBundle\Api\RateV10\SimpleType\FreightAccountPaymentType',
        'FreightBaseChargeCalculationType' => 'MobileCart\FedexBundle\Api\RateV10\SimpleType\FreightBaseChargeCalculationType',
        'FreightChargeBasisType' => 'MobileCart\FedexBundle\Api\RateV10\SimpleType\FreightChargeBasisType',
        'FreightClassType' => 'MobileCart\FedexBundle\Api\RateV10\SimpleType\FreightClassType',
        'FreightGuaranteeType' => 'MobileCart\FedexBundle\Api\RateV10\SimpleType\FreightGuaranteeType',
        'FreightOnValueType' => 'MobileCart\FedexBundle\Api\RateV10\SimpleType\FreightOnValueType',
        'FreightServiceSchedulingType' => 'MobileCart\FedexBundle\Api\RateV10\SimpleType\FreightServiceSchedulingType',
        'FreightShipmentRoleType' => 'MobileCart\FedexBundle\Api\RateV10\SimpleType\FreightShipmentRoleType',
        'HazardousCommodityLabelTextOptionType' => 'MobileCart\FedexBundle\Api\RateV10\SimpleType\HazardousCommodityLabelTextOptionType',
        'HazardousCommodityOptionType' => 'MobileCart\FedexBundle\Api\RateV10\SimpleType\HazardousCommodityOptionType',
        'HazardousCommodityPackingGroupType' => 'MobileCart\FedexBundle\Api\RateV10\SimpleType\HazardousCommodityPackingGroupType',
        'HomeDeliveryPremiumType' => 'MobileCart\FedexBundle\Api\RateV10\SimpleType\HomeDeliveryPremiumType',
        'ImageId' => 'MobileCart\FedexBundle\Api\RateV10\SimpleType\ImageId',
        'InternationalDocumentContentType' => 'MobileCart\FedexBundle\Api\RateV10\SimpleType\InternationalDocumentContentType',
        'LabelFormatType' => 'MobileCart\FedexBundle\Api\RateV10\SimpleType\LabelFormatType',
        'LabelMaskableDataType' => 'MobileCart\FedexBundle\Api\RateV10\SimpleType\LabelMaskableDataType',
        'LabelPrintingOrientationType' => 'MobileCart\FedexBundle\Api\RateV10\SimpleType\LabelPrintingOrientationType',
        'LabelRotationType' => 'MobileCart\FedexBundle\Api\RateV10\SimpleType\LabelRotationType',
        'LabelStockType' => 'MobileCart\FedexBundle\Api\RateV10\SimpleType\LabelStockType',
        'LiabilityCoverageType' => 'MobileCart\FedexBundle\Api\RateV10\SimpleType\LiabilityCoverageType',
        'LinearUnits' => 'MobileCart\FedexBundle\Api\RateV10\SimpleType\LinearUnits',
        'MinimumChargeType' => 'MobileCart\FedexBundle\Api\RateV10\SimpleType\MinimumChargeType',
        'NaftaImporterSpecificationType' => 'MobileCart\FedexBundle\Api\RateV10\SimpleType\NaftaImporterSpecificationType',
        'NaftaNetCostMethodCode' => 'MobileCart\FedexBundle\Api\RateV10\SimpleType\NaftaNetCostMethodCode',
        'NaftaPreferenceCriterionCode' => 'MobileCart\FedexBundle\Api\RateV10\SimpleType\NaftaPreferenceCriterionCode',
        'NaftaProducerDeterminationCode' => 'MobileCart\FedexBundle\Api\RateV10\SimpleType\NaftaProducerDeterminationCode',
        'NaftaProducerSpecificationType' => 'MobileCart\FedexBundle\Api\RateV10\SimpleType\NaftaProducerSpecificationType',
        'NotificationSeverityType' => 'MobileCart\FedexBundle\Api\RateV10\SimpleType\NotificationSeverityType',
        'OversizeClassType' => 'MobileCart\FedexBundle\Api\RateV10\SimpleType\OversizeClassType',
        'PackageSpecialServiceType' => 'MobileCart\FedexBundle\Api\RateV10\SimpleType\PackageSpecialServiceType',
        'PackagingType' => 'MobileCart\FedexBundle\Api\RateV10\SimpleType\PackagingType',
        'PaymentType' => 'MobileCart\FedexBundle\Api\RateV10\SimpleType\PaymentType',
        'PendingShipmentType' => 'MobileCart\FedexBundle\Api\RateV10\SimpleType\PendingShipmentType',
        'PhysicalPackagingType' => 'MobileCart\FedexBundle\Api\RateV10\SimpleType\PhysicalPackagingType',
        'PickupRequestSourceType' => 'MobileCart\FedexBundle\Api\RateV10\SimpleType\PickupRequestSourceType',
        'PickupRequestType' => 'MobileCart\FedexBundle\Api\RateV10\SimpleType\PickupRequestType',
        'PricingCodeType' => 'MobileCart\FedexBundle\Api\RateV10\SimpleType\PricingCodeType',
        'PurposeOfShipmentType' => 'MobileCart\FedexBundle\Api\RateV10\SimpleType\PurposeOfShipmentType',
        'RateDimensionalDivisorType' => 'MobileCart\FedexBundle\Api\RateV10\SimpleType\RateDimensionalDivisorType',
        'RateDiscountType' => 'MobileCart\FedexBundle\Api\RateV10\SimpleType\RateDiscountType',
        'RateElementBasisType' => 'MobileCart\FedexBundle\Api\RateV10\SimpleType\RateElementBasisType',
        'RateRequestType' => 'MobileCart\FedexBundle\Api\RateV10\SimpleType\RateRequestType',
        'RateTypeBasisType' => 'MobileCart\FedexBundle\Api\RateV10\SimpleType\RateTypeBasisType',
        'RatedWeightMethod' => 'MobileCart\FedexBundle\Api\RateV10\SimpleType\RatedWeightMethod',
        'RebateType' => 'MobileCart\FedexBundle\Api\RateV10\SimpleType\RebateType',
        'RecipientCustomsIdType' => 'MobileCart\FedexBundle\Api\RateV10\SimpleType\RecipientCustomsIdType',
        'RegulatoryControlType' => 'MobileCart\FedexBundle\Api\RateV10\SimpleType\RegulatoryControlType',
        'RequestedShippingDocumentType' => 'MobileCart\FedexBundle\Api\RateV10\SimpleType\RequestedShippingDocumentType',
        'RequiredShippingDocumentType' => 'MobileCart\FedexBundle\Api\RateV10\SimpleType\RequiredShippingDocumentType',
        'ReturnEMailAllowedSpecialServiceType' => 'MobileCart\FedexBundle\Api\RateV10\SimpleType\ReturnEMailAllowedSpecialServiceType',
        'ReturnType' => 'MobileCart\FedexBundle\Api\RateV10\SimpleType\ReturnType',
        'ReturnedRateType' => 'MobileCart\FedexBundle\Api\RateV10\SimpleType\ReturnedRateType',
        'SecondaryBarcodeType' => 'MobileCart\FedexBundle\Api\RateV10\SimpleType\SecondaryBarcodeType',
        'ServiceOptionType' => 'MobileCart\FedexBundle\Api\RateV10\SimpleType\ServiceOptionType',
        'ServiceType' => 'MobileCart\FedexBundle\Api\RateV10\SimpleType\ServiceType',
        'ShipmentOnlyFieldsType' => 'MobileCart\FedexBundle\Api\RateV10\SimpleType\ShipmentOnlyFieldsType',
        'ShipmentSpecialServiceType' => 'MobileCart\FedexBundle\Api\RateV10\SimpleType\ShipmentSpecialServiceType',
        'ShippingDocumentDispositionType' => 'MobileCart\FedexBundle\Api\RateV10\SimpleType\ShippingDocumentDispositionType',
        'ShippingDocumentEMailGroupingType' => 'MobileCart\FedexBundle\Api\RateV10\SimpleType\ShippingDocumentEMailGroupingType',
        'ShippingDocumentGroupingType' => 'MobileCart\FedexBundle\Api\RateV10\SimpleType\ShippingDocumentGroupingType',
        'ShippingDocumentImageType' => 'MobileCart\FedexBundle\Api\RateV10\SimpleType\ShippingDocumentImageType',
        'ShippingDocumentStockType' => 'MobileCart\FedexBundle\Api\RateV10\SimpleType\ShippingDocumentStockType',
        'SignatureOptionType' => 'MobileCart\FedexBundle\Api\RateV10\SimpleType\SignatureOptionType',
        'SmartPostAncillaryEndorsementType' => 'MobileCart\FedexBundle\Api\RateV10\SimpleType\SmartPostAncillaryEndorsementType',
        'SmartPostIndiciaType' => 'MobileCart\FedexBundle\Api\RateV10\SimpleType\SmartPostIndiciaType',
        'SpecialRatingAppliedType' => 'MobileCart\FedexBundle\Api\RateV10\SimpleType\SpecialRatingAppliedType',
        'SurchargeLevelType' => 'MobileCart\FedexBundle\Api\RateV10\SimpleType\SurchargeLevelType',
        'SurchargeType' => 'MobileCart\FedexBundle\Api\RateV10\SimpleType\SurchargeType',
        'TaxType' => 'MobileCart\FedexBundle\Api\RateV10\SimpleType\TaxType',
        'TaxesOrMiscellaneousChargeType' => 'MobileCart\FedexBundle\Api\RateV10\SimpleType\TaxesOrMiscellaneousChargeType',
        'TermsOfSaleType' => 'MobileCart\FedexBundle\Api\RateV10\SimpleType\TermsOfSaleType',
        'TinType' => 'MobileCart\FedexBundle\Api\RateV10\SimpleType\TinType',
        'TrackingIdType' => 'MobileCart\FedexBundle\Api\RateV10\SimpleType\TrackingIdType',
        'TransitTimeType' => 'MobileCart\FedexBundle\Api\RateV10\SimpleType\TransitTimeType',
        'UploadDocumentIdProducer' => 'MobileCart\FedexBundle\Api\RateV10\SimpleType\UploadDocumentIdProducer',
        'UploadDocumentProducerType' => 'MobileCart\FedexBundle\Api\RateV10\SimpleType\UploadDocumentProducerType',
        'UploadDocumentType' => 'MobileCart\FedexBundle\Api\RateV10\SimpleType\UploadDocumentType',
        'VolumeUnits' => 'MobileCart\FedexBundle\Api\RateV10\SimpleType\VolumeUnits',
        'WeightUnits' => 'MobileCart\FedexBundle\Api\RateV10\SimpleType\WeightUnits',
        'AdditionalLabelsDetail' => 'MobileCart\FedexBundle\Api\RateV10\ComplexType\AdditionalLabelsDetail',
        'Address' => 'MobileCart\FedexBundle\Api\RateV10\ComplexType\Address',
        'CertificateOfOriginDetail' => 'MobileCart\FedexBundle\Api\RateV10\ComplexType\CertificateOfOriginDetail',
        'ClientDetail' => 'MobileCart\FedexBundle\Api\RateV10\ComplexType\ClientDetail',
        'CodAddTransportationChargesDetail' => 'MobileCart\FedexBundle\Api\RateV10\ComplexType\CodAddTransportationChargesDetail',
        'CodDetail' => 'MobileCart\FedexBundle\Api\RateV10\ComplexType\CodDetail',
        'CommercialInvoice' => 'MobileCart\FedexBundle\Api\RateV10\ComplexType\CommercialInvoice',
        'CommercialInvoiceDetail' => 'MobileCart\FedexBundle\Api\RateV10\ComplexType\CommercialInvoiceDetail',
        'CommitDetail' => 'MobileCart\FedexBundle\Api\RateV10\ComplexType\CommitDetail',
        'Commodity' => 'MobileCart\FedexBundle\Api\RateV10\ComplexType\Commodity',
        'ConfigurableLabelReferenceEntry' => 'MobileCart\FedexBundle\Api\RateV10\ComplexType\ConfigurableLabelReferenceEntry',
        'Contact' => 'MobileCart\FedexBundle\Api\RateV10\ComplexType\Contact',
        'ContactAndAddress' => 'MobileCart\FedexBundle\Api\RateV10\ComplexType\ContactAndAddress',
        'ContentRecord' => 'MobileCart\FedexBundle\Api\RateV10\ComplexType\ContentRecord',
        'CurrencyExchangeRate' => 'MobileCart\FedexBundle\Api\RateV10\ComplexType\CurrencyExchangeRate',
        'CustomDeliveryWindowDetail' => 'MobileCart\FedexBundle\Api\RateV10\ComplexType\CustomDeliveryWindowDetail',
        'CustomDocumentDetail' => 'MobileCart\FedexBundle\Api\RateV10\ComplexType\CustomDocumentDetail',
        'CustomLabelBarcodeEntry' => 'MobileCart\FedexBundle\Api\RateV10\ComplexType\CustomLabelBarcodeEntry',
        'CustomLabelBoxEntry' => 'MobileCart\FedexBundle\Api\RateV10\ComplexType\CustomLabelBoxEntry',
        'CustomLabelDetail' => 'MobileCart\FedexBundle\Api\RateV10\ComplexType\CustomLabelDetail',
        'CustomLabelGraphicEntry' => 'MobileCart\FedexBundle\Api\RateV10\ComplexType\CustomLabelGraphicEntry',
        'CustomLabelPosition' => 'MobileCart\FedexBundle\Api\RateV10\ComplexType\CustomLabelPosition',
        'CustomLabelTextEntry' => 'MobileCart\FedexBundle\Api\RateV10\ComplexType\CustomLabelTextEntry',
        'CustomerImageUsage' => 'MobileCart\FedexBundle\Api\RateV10\ComplexType\CustomerImageUsage',
        'CustomerReference' => 'MobileCart\FedexBundle\Api\RateV10\ComplexType\CustomerReference',
        'CustomerSpecifiedLabelDetail' => 'MobileCart\FedexBundle\Api\RateV10\ComplexType\CustomerSpecifiedLabelDetail',
        'CustomsClearanceDetail' => 'MobileCart\FedexBundle\Api\RateV10\ComplexType\CustomsClearanceDetail',
        'DangerousGoodsDetail' => 'MobileCart\FedexBundle\Api\RateV10\ComplexType\DangerousGoodsDetail',
        'DateRange' => 'MobileCart\FedexBundle\Api\RateV10\ComplexType\DateRange',
        'DelayDetail' => 'MobileCart\FedexBundle\Api\RateV10\ComplexType\DelayDetail',
        'DestinationControlDetail' => 'MobileCart\FedexBundle\Api\RateV10\ComplexType\DestinationControlDetail',
        'Dimensions' => 'MobileCart\FedexBundle\Api\RateV10\ComplexType\Dimensions',
        'Distance' => 'MobileCart\FedexBundle\Api\RateV10\ComplexType\Distance',
        'DocTabContent' => 'MobileCart\FedexBundle\Api\RateV10\ComplexType\DocTabContent',
        'DocTabContentBarcoded' => 'MobileCart\FedexBundle\Api\RateV10\ComplexType\DocTabContentBarcoded',
        'DocTabContentZone001' => 'MobileCart\FedexBundle\Api\RateV10\ComplexType\DocTabContentZone001',
        'DocTabZoneSpecification' => 'MobileCart\FedexBundle\Api\RateV10\ComplexType\DocTabZoneSpecification',
        'EMailLabelDetail' => 'MobileCart\FedexBundle\Api\RateV10\ComplexType\EMailLabelDetail',
        'EMailNotificationDetail' => 'MobileCart\FedexBundle\Api\RateV10\ComplexType\EMailNotificationDetail',
        'EMailNotificationRecipient' => 'MobileCart\FedexBundle\Api\RateV10\ComplexType\EMailNotificationRecipient',
        'EdtCommodityTax' => 'MobileCart\FedexBundle\Api\RateV10\ComplexType\EdtCommodityTax',
        'EdtExciseCondition' => 'MobileCart\FedexBundle\Api\RateV10\ComplexType\EdtExciseCondition',
        'EdtTaxDetail' => 'MobileCart\FedexBundle\Api\RateV10\ComplexType\EdtTaxDetail',
        'EtdDetail' => 'MobileCart\FedexBundle\Api\RateV10\ComplexType\EtdDetail',
        'ExportDetail' => 'MobileCart\FedexBundle\Api\RateV10\ComplexType\ExportDetail',
        'ExpressFreightDetail' => 'MobileCart\FedexBundle\Api\RateV10\ComplexType\ExpressFreightDetail',
        'ExpressFreightDetailContact' => 'MobileCart\FedexBundle\Api\RateV10\ComplexType\ExpressFreightDetailContact',
        'FlatbedTrailerDetail' => 'MobileCart\FedexBundle\Api\RateV10\ComplexType\FlatbedTrailerDetail',
        'FreightBaseCharge' => 'MobileCart\FedexBundle\Api\RateV10\ComplexType\FreightBaseCharge',
        'FreightCommitDetail' => 'MobileCart\FedexBundle\Api\RateV10\ComplexType\FreightCommitDetail',
        'FreightGuaranteeDetail' => 'MobileCart\FedexBundle\Api\RateV10\ComplexType\FreightGuaranteeDetail',
        'FreightRateDetail' => 'MobileCart\FedexBundle\Api\RateV10\ComplexType\FreightRateDetail',
        'FreightRateNotation' => 'MobileCart\FedexBundle\Api\RateV10\ComplexType\FreightRateNotation',
        'FreightServiceCenterDetail' => 'MobileCart\FedexBundle\Api\RateV10\ComplexType\FreightServiceCenterDetail',
        'FreightShipmentDetail' => 'MobileCart\FedexBundle\Api\RateV10\ComplexType\FreightShipmentDetail',
        'FreightShipmentLineItem' => 'MobileCart\FedexBundle\Api\RateV10\ComplexType\FreightShipmentLineItem',
        'FreightSpecialServicePayment' => 'MobileCart\FedexBundle\Api\RateV10\ComplexType\FreightSpecialServicePayment',
        'GeneralAgencyAgreementDetail' => 'MobileCart\FedexBundle\Api\RateV10\ComplexType\GeneralAgencyAgreementDetail',
        'HazardousCommodityContent' => 'MobileCart\FedexBundle\Api\RateV10\ComplexType\HazardousCommodityContent',
        'HazardousCommodityDescription' => 'MobileCart\FedexBundle\Api\RateV10\ComplexType\HazardousCommodityDescription',
        'HazardousCommodityOptionDetail' => 'MobileCart\FedexBundle\Api\RateV10\ComplexType\HazardousCommodityOptionDetail',
        'HazardousCommodityPackagingDetail' => 'MobileCart\FedexBundle\Api\RateV10\ComplexType\HazardousCommodityPackagingDetail',
        'HazardousCommodityQuantityDetail' => 'MobileCart\FedexBundle\Api\RateV10\ComplexType\HazardousCommodityQuantityDetail',
        'HoldAtLocationDetail' => 'MobileCart\FedexBundle\Api\RateV10\ComplexType\HoldAtLocationDetail',
        'HomeDeliveryPremiumDetail' => 'MobileCart\FedexBundle\Api\RateV10\ComplexType\HomeDeliveryPremiumDetail',
        'LabelSpecification' => 'MobileCart\FedexBundle\Api\RateV10\ComplexType\LabelSpecification',
        'LiabilityCoverageDetail' => 'MobileCart\FedexBundle\Api\RateV10\ComplexType\LiabilityCoverageDetail',
        'LinearMeasure' => 'MobileCart\FedexBundle\Api\RateV10\ComplexType\LinearMeasure',
        'Localization' => 'MobileCart\FedexBundle\Api\RateV10\ComplexType\Localization',
        'Measure' => 'MobileCart\FedexBundle\Api\RateV10\ComplexType\Measure',
        'Money' => 'MobileCart\FedexBundle\Api\RateV10\ComplexType\Money',
        'NaftaCertificateOfOriginDetail' => 'MobileCart\FedexBundle\Api\RateV10\ComplexType\NaftaCertificateOfOriginDetail',
        'NaftaCommodityDetail' => 'MobileCart\FedexBundle\Api\RateV10\ComplexType\NaftaCommodityDetail',
        'NaftaProducer' => 'MobileCart\FedexBundle\Api\RateV10\ComplexType\NaftaProducer',
        'Notification' => 'MobileCart\FedexBundle\Api\RateV10\ComplexType\Notification',
        'NotificationParameter' => 'MobileCart\FedexBundle\Api\RateV10\ComplexType\NotificationParameter',
        'Op900Detail' => 'MobileCart\FedexBundle\Api\RateV10\ComplexType\Op900Detail',
        'PackageRateDetail' => 'MobileCart\FedexBundle\Api\RateV10\ComplexType\PackageRateDetail',
        'PackageSpecialServicesRequested' => 'MobileCart\FedexBundle\Api\RateV10\ComplexType\PackageSpecialServicesRequested',
        'Party' => 'MobileCart\FedexBundle\Api\RateV10\ComplexType\Party',
        'Payment' => 'MobileCart\FedexBundle\Api\RateV10\ComplexType\Payment',
        'Payor' => 'MobileCart\FedexBundle\Api\RateV10\ComplexType\Payor',
        'PendingShipmentDetail' => 'MobileCart\FedexBundle\Api\RateV10\ComplexType\PendingShipmentDetail',
        'PickupDetail' => 'MobileCart\FedexBundle\Api\RateV10\ComplexType\PickupDetail',
        'PriorityAlertDetail' => 'MobileCart\FedexBundle\Api\RateV10\ComplexType\PriorityAlertDetail',
        'RateDiscount' => 'MobileCart\FedexBundle\Api\RateV10\ComplexType\RateDiscount',
        'RateReply' => 'MobileCart\FedexBundle\Api\RateV10\ComplexType\RateReply',
        'RateReplyDetail' => 'MobileCart\FedexBundle\Api\RateV10\ComplexType\RateReplyDetail',
        'RateRequest' => 'MobileCart\FedexBundle\Api\RateV10\ComplexType\RateRequest',
        'RatedPackageDetail' => 'MobileCart\FedexBundle\Api\RateV10\ComplexType\RatedPackageDetail',
        'RatedShipmentDetail' => 'MobileCart\FedexBundle\Api\RateV10\ComplexType\RatedShipmentDetail',
        'Rebate' => 'MobileCart\FedexBundle\Api\RateV10\ComplexType\Rebate',
        'RecipientCustomsId' => 'MobileCart\FedexBundle\Api\RateV10\ComplexType\RecipientCustomsId',
        'RequestedPackageLineItem' => 'MobileCart\FedexBundle\Api\RateV10\ComplexType\RequestedPackageLineItem',
        'RequestedShipment' => 'MobileCart\FedexBundle\Api\RateV10\ComplexType\RequestedShipment',
        'ReturnEMailDetail' => 'MobileCart\FedexBundle\Api\RateV10\ComplexType\ReturnEMailDetail',
        'ReturnShipmentDetail' => 'MobileCart\FedexBundle\Api\RateV10\ComplexType\ReturnShipmentDetail',
        'Rma' => 'MobileCart\FedexBundle\Api\RateV10\ComplexType\Rma',
        'ServiceSubOptionDetail' => 'MobileCart\FedexBundle\Api\RateV10\ComplexType\ServiceSubOptionDetail',
        'ShipmentDryIceDetail' => 'MobileCart\FedexBundle\Api\RateV10\ComplexType\ShipmentDryIceDetail',
        'ShipmentLegRateDetail' => 'MobileCart\FedexBundle\Api\RateV10\ComplexType\ShipmentLegRateDetail',
        'ShipmentRateDetail' => 'MobileCart\FedexBundle\Api\RateV10\ComplexType\ShipmentRateDetail',
        'ShipmentSpecialServicesRequested' => 'MobileCart\FedexBundle\Api\RateV10\ComplexType\ShipmentSpecialServicesRequested',
        'ShippingDocumentDispositionDetail' => 'MobileCart\FedexBundle\Api\RateV10\ComplexType\ShippingDocumentDispositionDetail',
        'ShippingDocumentEMailDetail' => 'MobileCart\FedexBundle\Api\RateV10\ComplexType\ShippingDocumentEMailDetail',
        'ShippingDocumentEMailRecipient' => 'MobileCart\FedexBundle\Api\RateV10\ComplexType\ShippingDocumentEMailRecipient',
        'ShippingDocumentFormat' => 'MobileCart\FedexBundle\Api\RateV10\ComplexType\ShippingDocumentFormat',
        'ShippingDocumentPrintDetail' => 'MobileCart\FedexBundle\Api\RateV10\ComplexType\ShippingDocumentPrintDetail',
        'ShippingDocumentSpecification' => 'MobileCart\FedexBundle\Api\RateV10\ComplexType\ShippingDocumentSpecification',
        'SignatureOptionDetail' => 'MobileCart\FedexBundle\Api\RateV10\ComplexType\SignatureOptionDetail',
        'SmartPostShipmentDetail' => 'MobileCart\FedexBundle\Api\RateV10\ComplexType\SmartPostShipmentDetail',
        'Surcharge' => 'MobileCart\FedexBundle\Api\RateV10\ComplexType\Surcharge',
        'Tax' => 'MobileCart\FedexBundle\Api\RateV10\ComplexType\Tax',
        'TaxpayerIdentification' => 'MobileCart\FedexBundle\Api\RateV10\ComplexType\TaxpayerIdentification',
        'TrackingId' => 'MobileCart\FedexBundle\Api\RateV10\ComplexType\TrackingId',
        'TransactionDetail' => 'MobileCart\FedexBundle\Api\RateV10\ComplexType\TransactionDetail',
        'UploadDocumentDetail' => 'MobileCart\FedexBundle\Api\RateV10\ComplexType\UploadDocumentDetail',
        'UploadDocumentReferenceDetail' => 'MobileCart\FedexBundle\Api\RateV10\ComplexType\UploadDocumentReferenceDetail',
        'VariableHandlingChargeDetail' => 'MobileCart\FedexBundle\Api\RateV10\ComplexType\VariableHandlingChargeDetail',
        'VariableHandlingCharges' => 'MobileCart\FedexBundle\Api\RateV10\ComplexType\VariableHandlingCharges',
        'Volume' => 'MobileCart\FedexBundle\Api\RateV10\ComplexType\Volume',
        'Weight' => 'MobileCart\FedexBundle\Api\RateV10\ComplexType\Weight',
        'WebAuthenticationDetail' => 'MobileCart\FedexBundle\Api\RateV10\ComplexType\WebAuthenticationDetail',
        'WebAuthenticationCredential' => 'MobileCart\FedexBundle\Api\RateV10\ComplexType\WebAuthenticationCredential',
        'VersionId' => 'MobileCart\FedexBundle\Api\RateV10\ComplexType\VersionId',
    ];


    public function __construct($soapClientClassName, $wsdl, array $options = array())
    {
        if (!empty(self::$classMaps)) {
            foreach(self::$classMaps as $key => $value) {
                if(!isset($options['classmap'][$key])) {
                    $options['classmap'][$key] = $value;
                }
            }
        }
        $this->soapClient = new $soapClientClassName($wsdl, $options);
        if (!$this->soapClient instanceof BaseSoapClient) {
            throw new InvalidArgumentException(sprintf('%s class must implement SoapClient', $soapClientClassName));
        }
    }

    /**
     * Returns the SoapClient instance
     *
     * @return BaseSoapClient
     */
    public function getSoapClient()
    {
        return $this->soapClient;
    }

    /**
     * @param RateRequest $RateRequest
     * @return RateReply
     */
    public function getRates(RateRequest $RateRequest)
    {
        return $this->getSoapClient()->getRates($RateRequest->toArray());
    }


}

