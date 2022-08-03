<?php

namespace JeffreyKroonen\BolRetailer\Generated\Model;

class HandoverDetails
{
    /**
     * Indicates if you can use this label without receiving a strike if you handover before the latestHandoverDateTime. If this field is 'false' you can still buy and use this label but it will have negative consequences on your performance score because the order will be delivered too early or too late.
     *
     * @var bool
     */
    protected $meetsCustomerExpectation;
    /**
     * The date and time at which the parcel must ultimately be at the transporter to make sure your parcel is delivered on time. If you handover after this date you will receive a strike because you order will be delivered too late.
     *
     * @var \DateTime
     */
    protected $latestHandoverDateTime;
    /**
     * The type of collection for this parcel.
     *
     * @var string
     */
    protected $collectionMethod;
    /**
     * Indicates if you can use this label without receiving a strike if you handover before the latestHandoverDateTime. If this field is 'false' you can still buy and use this label but it will have negative consequences on your performance score because the order will be delivered too early or too late.
     *
     * @return bool
     */
    public function getMeetsCustomerExpectation() : bool
    {
        return $this->meetsCustomerExpectation;
    }
    /**
     * Indicates if you can use this label without receiving a strike if you handover before the latestHandoverDateTime. If this field is 'false' you can still buy and use this label but it will have negative consequences on your performance score because the order will be delivered too early or too late.
     *
     * @param bool $meetsCustomerExpectation
     *
     * @return self
     */
    public function setMeetsCustomerExpectation(bool $meetsCustomerExpectation) : self
    {
        $this->meetsCustomerExpectation = $meetsCustomerExpectation;
        return $this;
    }
    /**
     * The date and time at which the parcel must ultimately be at the transporter to make sure your parcel is delivered on time. If you handover after this date you will receive a strike because you order will be delivered too late.
     *
     * @return \DateTime
     */
    public function getLatestHandoverDateTime() : \DateTime
    {
        return $this->latestHandoverDateTime;
    }
    /**
     * The date and time at which the parcel must ultimately be at the transporter to make sure your parcel is delivered on time. If you handover after this date you will receive a strike because you order will be delivered too late.
     *
     * @param \DateTime $latestHandoverDateTime
     *
     * @return self
     */
    public function setLatestHandoverDateTime(\DateTime $latestHandoverDateTime) : self
    {
        $this->latestHandoverDateTime = $latestHandoverDateTime;
        return $this;
    }
    /**
     * The type of collection for this parcel.
     *
     * @return string
     */
    public function getCollectionMethod() : string
    {
        return $this->collectionMethod;
    }
    /**
     * The type of collection for this parcel.
     *
     * @param string $collectionMethod
     *
     * @return self
     */
    public function setCollectionMethod(string $collectionMethod) : self
    {
        $this->collectionMethod = $collectionMethod;
        return $this;
    }
}