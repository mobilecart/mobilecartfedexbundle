<?php

namespace MobileCart\FedexBundle\Api\RateV10\ComplexType;

use MobileCart\FedexBundle\Api\RateV10\SimpleType;

/**
 * Information about the Freight Service Centers associated with this shipment. 
 *
 *
 */
class FreightCommitDetail extends ComplexTypeAbstract
{
    const CLASS_NAME = 'FreightCommitDetail';

    /**
     * Information about the origin Freight Service Center. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var FreightServiceCenterDetail|null $OriginDetail
     */
    protected $OriginDetail;

    /**
     * Information about the destination Freight Service Center. 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var FreightServiceCenterDetail|null $DestinationDetail
     */
    protected $DestinationDetail;

    /**
     * The distance between the origin and destination FreightService Centers 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var Distance|null $TotalDistance
     */
    protected $TotalDistance;


    /**
     * @param FreightServiceCenterDetail|null $originDetail
     * @return FreightCommitDetail
     */
    public function setOriginDetail(FreightServiceCenterDetail $originDetail = null)
    {
        $this->OriginDetail = $originDetail;

        return $this;
    }

    /**
     * @return FreightServiceCenterDetail|null
     */
    public function getOriginDetail()
    {
        return $this->OriginDetail;
    }

    /**
     * @param FreightServiceCenterDetail|null $destinationDetail
     * @return FreightCommitDetail
     */
    public function setDestinationDetail(FreightServiceCenterDetail $destinationDetail = null)
    {
        $this->DestinationDetail = $destinationDetail;

        return $this;
    }

    /**
     * @return FreightServiceCenterDetail|null
     */
    public function getDestinationDetail()
    {
        return $this->DestinationDetail;
    }

    /**
     * @param Distance|null $totalDistance
     * @return FreightCommitDetail
     */
    public function setTotalDistance(Distance $totalDistance = null)
    {
        $this->TotalDistance = $totalDistance;

        return $this;
    }

    /**
     * @return Distance|null
     */
    public function getTotalDistance()
    {
        return $this->TotalDistance;
    }


}

