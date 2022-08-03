<?php

namespace JeffreyKroonen\BolRetailer\Generated\Model;

class UpdateOfferStockRequest
{
    /**
     * The amount of stock available for the specified product present in the retailers warehouse. Note: this should not be the FBB stock! Defaults to 0.
     *
     * @var int
     */
    protected $amount;
    /**
     * Configures whether the retailer manages the stock levels or that bol.com should calculate the corrected stock based on actual open orders. In case the configuration is set to 'false', all open orders are used to calculate the corrected stock. In case the configuration is set to 'true', only orders that are placed after the last offer update are taken into account.
     *
     * @var bool
     */
    protected $managedByRetailer;
    /**
     * The amount of stock available for the specified product present in the retailers warehouse. Note: this should not be the FBB stock! Defaults to 0.
     *
     * @return int
     */
    public function getAmount() : int
    {
        return $this->amount;
    }
    /**
     * The amount of stock available for the specified product present in the retailers warehouse. Note: this should not be the FBB stock! Defaults to 0.
     *
     * @param int $amount
     *
     * @return self
     */
    public function setAmount(int $amount) : self
    {
        $this->amount = $amount;
        return $this;
    }
    /**
     * Configures whether the retailer manages the stock levels or that bol.com should calculate the corrected stock based on actual open orders. In case the configuration is set to 'false', all open orders are used to calculate the corrected stock. In case the configuration is set to 'true', only orders that are placed after the last offer update are taken into account.
     *
     * @return bool
     */
    public function getManagedByRetailer() : bool
    {
        return $this->managedByRetailer;
    }
    /**
     * Configures whether the retailer manages the stock levels or that bol.com should calculate the corrected stock based on actual open orders. In case the configuration is set to 'false', all open orders are used to calculate the corrected stock. In case the configuration is set to 'true', only orders that are placed after the last offer update are taken into account.
     *
     * @param bool $managedByRetailer
     *
     * @return self
     */
    public function setManagedByRetailer(bool $managedByRetailer) : self
    {
        $this->managedByRetailer = $managedByRetailer;
        return $this;
    }
}