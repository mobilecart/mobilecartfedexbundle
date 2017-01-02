<?php

namespace MobileCart\FedexBundle\Api\RateV10\ComplexType;

use MobileCart\FedexBundle\Api\RateV10\SimpleType;

/**
 * Details specific to an Express freight shipment. 
 *
 *
 */
class ExpressFreightDetail extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ExpressFreightDetail';

    /**
     * Indicates whether or nor a packing list is enclosed. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var boolean|null $PackingListEnclosed
     */
    protected $PackingListEnclosed;

    /**
     * Total shipment pieces.
                ie. 3 boxes and 3 pallets of 100 pieces each 
     * = Shippers Load and Count of 303.
                Applicable to International Priority 
     * Freight and International Economy Freight.
                Values must be in the range 
     * of 1 - 99999 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var integer|null $ShippersLoadAndCount
     */
    protected $ShippersLoadAndCount;

    /**
     * Required for International Freight shipping. Values must be 8- 12 characters in length. 
     * 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $BookingConfirmationNumber
     */
    protected $BookingConfirmationNumber;

    /**
     * Currently not supported. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var boolean|null $ReferenceLabelRequested
     */
    protected $ReferenceLabelRequested;

    /**
     * Currently not supported. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var ExpressFreightDetailContact|null $BeforeDeliveryContact
     */
    protected $BeforeDeliveryContact;

    /**
     * Currently not supported. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var ExpressFreightDetailContact|null $UndeliverableContact
     */
    protected $UndeliverableContact;


    /**
     * @param boolean|null $packingListEnclosed
     * @return ExpressFreightDetail
     */
    public function setPackingListEnclosed($packingListEnclosed)
    {
        $this->PackingListEnclosed = $packingListEnclosed;

        return $this;
    }

    /**
     * @return boolean|null
     */
    public function getPackingListEnclosed()
    {
        return $this->PackingListEnclosed;
    }

    /**
     * @param integer|null $shippersLoadAndCount
     * @return ExpressFreightDetail
     */
    public function setShippersLoadAndCount($shippersLoadAndCount)
    {
        $this->ShippersLoadAndCount = $shippersLoadAndCount;

        return $this;
    }

    /**
     * @return integer|null
     */
    public function getShippersLoadAndCount()
    {
        return $this->ShippersLoadAndCount;
    }

    /**
     * @param string|null $bookingConfirmationNumber
     * @return ExpressFreightDetail
     */
    public function setBookingConfirmationNumber($bookingConfirmationNumber)
    {
        $this->BookingConfirmationNumber = $bookingConfirmationNumber;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getBookingConfirmationNumber()
    {
        return $this->BookingConfirmationNumber;
    }

    /**
     * @param boolean|null $referenceLabelRequested
     * @return ExpressFreightDetail
     */
    public function setReferenceLabelRequested($referenceLabelRequested)
    {
        $this->ReferenceLabelRequested = $referenceLabelRequested;

        return $this;
    }

    /**
     * @return boolean|null
     */
    public function getReferenceLabelRequested()
    {
        return $this->ReferenceLabelRequested;
    }

    /**
     * @param ExpressFreightDetailContact|null $beforeDeliveryContact
     * @return ExpressFreightDetail
     */
    public function setBeforeDeliveryContact(ExpressFreightDetailContact $beforeDeliveryContact = null)
    {
        $this->BeforeDeliveryContact = $beforeDeliveryContact;

        return $this;
    }

    /**
     * @return ExpressFreightDetailContact|null
     */
    public function getBeforeDeliveryContact()
    {
        return $this->BeforeDeliveryContact;
    }

    /**
     * @param ExpressFreightDetailContact|null $undeliverableContact
     * @return ExpressFreightDetail
     */
    public function setUndeliverableContact(ExpressFreightDetailContact $undeliverableContact = null)
    {
        $this->UndeliverableContact = $undeliverableContact;

        return $this;
    }

    /**
     * @return ExpressFreightDetailContact|null
     */
    public function getUndeliverableContact()
    {
        return $this->UndeliverableContact;
    }


}

