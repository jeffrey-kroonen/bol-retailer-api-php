<?php

namespace JeffreyKroonen\BolRetailer\Generated\Model;

class CreateReturnRequest
{
    /**
     * The id for the order item. One order can have multiple order items, but the list can only take one item.
     *
     * @var string
     */
    protected $orderItemId;
    /**
     * The quantity of items returned.
     *
     * @var int
     */
    protected $quantityReturned;
    /**
     * The handling result requested by the retailer.
     *
     * @var string
     */
    protected $handlingResult;
    /**
     * The id for the order item. One order can have multiple order items, but the list can only take one item.
     *
     * @return string
     */
    public function getOrderItemId() : string
    {
        return $this->orderItemId;
    }
    /**
     * The id for the order item. One order can have multiple order items, but the list can only take one item.
     *
     * @param string $orderItemId
     *
     * @return self
     */
    public function setOrderItemId(string $orderItemId) : self
    {
        $this->orderItemId = $orderItemId;
        return $this;
    }
    /**
     * The quantity of items returned.
     *
     * @return int
     */
    public function getQuantityReturned() : int
    {
        return $this->quantityReturned;
    }
    /**
     * The quantity of items returned.
     *
     * @param int $quantityReturned
     *
     * @return self
     */
    public function setQuantityReturned(int $quantityReturned) : self
    {
        $this->quantityReturned = $quantityReturned;
        return $this;
    }
    /**
     * The handling result requested by the retailer.
     *
     * @return string
     */
    public function getHandlingResult() : string
    {
        return $this->handlingResult;
    }
    /**
     * The handling result requested by the retailer.
     *
     * @param string $handlingResult
     *
     * @return self
     */
    public function setHandlingResult(string $handlingResult) : self
    {
        $this->handlingResult = $handlingResult;
        return $this;
    }
}