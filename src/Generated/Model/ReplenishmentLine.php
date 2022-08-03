<?php

namespace JeffreyKroonen\BolRetailer\Generated\Model;

class ReplenishmentLine
{
    /**
     * The EAN number associated with this product.
     *
     * @var string
     */
    protected $ean;
    /**
     * The state of the line indicating whether this line was announced within this replenishment.
     *
     * @var string
     */
    protected $lineState;
    /**
     * The amount of announced quantity for this replenishment line.
     *
     * @var int
     */
    protected $quantityAnnounced;
    /**
     * The amount of received quantity for this replenishment line.
     *
     * @var int
     */
    protected $quantityReceived;
    /**
     * The amount of quantity that is still in progress at the warehouse for this replenishment line.
     *
     * @var int
     */
    protected $quantityInProgress;
    /**
     * The quantity within this shipment line that has a graded (unsalable) state.
     *
     * @var int
     */
    protected $quantityWithGradedState;
    /**
     * The quantity within this shipment line that has a regular (salable) state.
     *
     * @var int
     */
    protected $quantityWithRegularState;
    /**
     * The EAN number associated with this product.
     *
     * @return string
     */
    public function getEan() : string
    {
        return $this->ean;
    }
    /**
     * The EAN number associated with this product.
     *
     * @param string $ean
     *
     * @return self
     */
    public function setEan(string $ean) : self
    {
        $this->ean = $ean;
        return $this;
    }
    /**
     * The state of the line indicating whether this line was announced within this replenishment.
     *
     * @return string
     */
    public function getLineState() : string
    {
        return $this->lineState;
    }
    /**
     * The state of the line indicating whether this line was announced within this replenishment.
     *
     * @param string $lineState
     *
     * @return self
     */
    public function setLineState(string $lineState) : self
    {
        $this->lineState = $lineState;
        return $this;
    }
    /**
     * The amount of announced quantity for this replenishment line.
     *
     * @return int
     */
    public function getQuantityAnnounced() : int
    {
        return $this->quantityAnnounced;
    }
    /**
     * The amount of announced quantity for this replenishment line.
     *
     * @param int $quantityAnnounced
     *
     * @return self
     */
    public function setQuantityAnnounced(int $quantityAnnounced) : self
    {
        $this->quantityAnnounced = $quantityAnnounced;
        return $this;
    }
    /**
     * The amount of received quantity for this replenishment line.
     *
     * @return int
     */
    public function getQuantityReceived() : int
    {
        return $this->quantityReceived;
    }
    /**
     * The amount of received quantity for this replenishment line.
     *
     * @param int $quantityReceived
     *
     * @return self
     */
    public function setQuantityReceived(int $quantityReceived) : self
    {
        $this->quantityReceived = $quantityReceived;
        return $this;
    }
    /**
     * The amount of quantity that is still in progress at the warehouse for this replenishment line.
     *
     * @return int
     */
    public function getQuantityInProgress() : int
    {
        return $this->quantityInProgress;
    }
    /**
     * The amount of quantity that is still in progress at the warehouse for this replenishment line.
     *
     * @param int $quantityInProgress
     *
     * @return self
     */
    public function setQuantityInProgress(int $quantityInProgress) : self
    {
        $this->quantityInProgress = $quantityInProgress;
        return $this;
    }
    /**
     * The quantity within this shipment line that has a graded (unsalable) state.
     *
     * @return int
     */
    public function getQuantityWithGradedState() : int
    {
        return $this->quantityWithGradedState;
    }
    /**
     * The quantity within this shipment line that has a graded (unsalable) state.
     *
     * @param int $quantityWithGradedState
     *
     * @return self
     */
    public function setQuantityWithGradedState(int $quantityWithGradedState) : self
    {
        $this->quantityWithGradedState = $quantityWithGradedState;
        return $this;
    }
    /**
     * The quantity within this shipment line that has a regular (salable) state.
     *
     * @return int
     */
    public function getQuantityWithRegularState() : int
    {
        return $this->quantityWithRegularState;
    }
    /**
     * The quantity within this shipment line that has a regular (salable) state.
     *
     * @param int $quantityWithRegularState
     *
     * @return self
     */
    public function setQuantityWithRegularState(int $quantityWithRegularState) : self
    {
        $this->quantityWithRegularState = $quantityWithRegularState;
        return $this;
    }
}