<?php

namespace JeffreyKroonen\BolRetailer\Generated\Model;

class Stock
{
    /**
     * The amount of stock available for the specified product present in the retailers warehouse. Note: this should not be the FBB stock! Defaults to 0.
     *
     * @var int
     */
    protected $amount;
    /**
     * The amount of order items in stock minus handled order items and minus open order items. As compared to the stock you sent us. When this reaches 0, your offer will not be for sale on the shop.
     *
     * @var int
     */
    protected $correctedStock;
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
     * The amount of order items in stock minus handled order items and minus open order items. As compared to the stock you sent us. When this reaches 0, your offer will not be for sale on the shop.
     *
     * @return int
     */
    public function getCorrectedStock() : int
    {
        return $this->correctedStock;
    }
    /**
     * The amount of order items in stock minus handled order items and minus open order items. As compared to the stock you sent us. When this reaches 0, your offer will not be for sale on the shop.
     *
     * @param int $correctedStock
     *
     * @return self
     */
    public function setCorrectedStock(int $correctedStock) : self
    {
        $this->correctedStock = $correctedStock;
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