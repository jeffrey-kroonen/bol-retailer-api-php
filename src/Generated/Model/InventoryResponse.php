<?php

namespace JeffreyKroonen\BolRetailer\Generated\Model;

class InventoryResponse
{
    /**
     * 
     *
     * @var object[]
     */
    protected $inventory;
    /**
     * 
     *
     * @return object[]
     */
    public function getInventory() : array
    {
        return $this->inventory;
    }
    /**
     * 
     *
     * @param object[] $inventory
     *
     * @return self
     */
    public function setInventory(array $inventory) : self
    {
        $this->inventory = $inventory;
        return $this;
    }
}