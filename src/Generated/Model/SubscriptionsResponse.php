<?php

namespace JeffreyKroonen\BolRetailer\Generated\Model;

class SubscriptionsResponse
{
    /**
     * 
     *
     * @var object[]
     */
    protected $subscriptions;
    /**
     * 
     *
     * @return object[]
     */
    public function getSubscriptions() : array
    {
        return $this->subscriptions;
    }
    /**
     * 
     *
     * @param object[] $subscriptions
     *
     * @return self
     */
    public function setSubscriptions(array $subscriptions) : self
    {
        $this->subscriptions = $subscriptions;
        return $this;
    }
}