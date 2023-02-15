<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace JeffreyKroonen\BolRetailer\Generated\Model;

class ReducedOrderItem
{
    /**
     * @var array
     */
    protected $initialized = [];

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * The id for the order item. One order can have multiple order items, but the list can only take one item.
     *
     * @var string
     */
    protected $orderItemId;
    /**
     * The EAN number associated with this product.
     *
     * @var string
     */
    protected $ean;
    /**
     * The fulfilment method. Fulfilled by the retailer (FBR) or fulfilled by bol.com (FBB).
     *
     * @var string
     */
    protected $fulfilmentMethod;
    /**
     * To filter on order status. You can filter on either all orders independent from their status, open orders (excluding shipped and cancelled orders), and shipped orders.
     *
     * @var string
     */
    protected $fulfilmentStatus;
    /**
     * Amount of ordered products for this order item id.
     *
     * @var int
     */
    protected $quantity;
    /**
     * Amount of shipped products for this order item id.
     *
     * @var int
     */
    protected $quantityShipped;
    /**
     * Amount of cancelled products for this order item id.
     *
     * @var int
     */
    protected $quantityCancelled;
    /**
     * Indicates whether the order was cancelled on request of the customer before the retailer has shipped it.
     *
     * @var bool
     */
    protected $cancellationRequest;
    /**
     * The date and time in ISO 8601 format when the orderItem was last changed.
     *
     * @var \DateTime
     */
    protected $latestChangedDateTime;

    /**
     * The id for the order item. One order can have multiple order items, but the list can only take one item.
     */
    public function getOrderItemId(): string
    {
        return $this->orderItemId;
    }

    /**
     * The id for the order item. One order can have multiple order items, but the list can only take one item.
     */
    public function setOrderItemId(string $orderItemId): self
    {
        $this->initialized['orderItemId'] = true;
        $this->orderItemId = $orderItemId;

        return $this;
    }

    /**
     * The EAN number associated with this product.
     */
    public function getEan(): string
    {
        return $this->ean;
    }

    /**
     * The EAN number associated with this product.
     */
    public function setEan(string $ean): self
    {
        $this->initialized['ean'] = true;
        $this->ean = $ean;

        return $this;
    }

    /**
     * The fulfilment method. Fulfilled by the retailer (FBR) or fulfilled by bol.com (FBB).
     */
    public function getFulfilmentMethod(): string
    {
        return $this->fulfilmentMethod;
    }

    /**
     * The fulfilment method. Fulfilled by the retailer (FBR) or fulfilled by bol.com (FBB).
     */
    public function setFulfilmentMethod(string $fulfilmentMethod): self
    {
        $this->initialized['fulfilmentMethod'] = true;
        $this->fulfilmentMethod = $fulfilmentMethod;

        return $this;
    }

    /**
     * To filter on order status. You can filter on either all orders independent from their status, open orders (excluding shipped and cancelled orders), and shipped orders.
     */
    public function getFulfilmentStatus(): string
    {
        return $this->fulfilmentStatus;
    }

    /**
     * To filter on order status. You can filter on either all orders independent from their status, open orders (excluding shipped and cancelled orders), and shipped orders.
     */
    public function setFulfilmentStatus(string $fulfilmentStatus): self
    {
        $this->initialized['fulfilmentStatus'] = true;
        $this->fulfilmentStatus = $fulfilmentStatus;

        return $this;
    }

    /**
     * Amount of ordered products for this order item id.
     */
    public function getQuantity(): int
    {
        return $this->quantity;
    }

    /**
     * Amount of ordered products for this order item id.
     */
    public function setQuantity(int $quantity): self
    {
        $this->initialized['quantity'] = true;
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Amount of shipped products for this order item id.
     */
    public function getQuantityShipped(): int
    {
        return $this->quantityShipped;
    }

    /**
     * Amount of shipped products for this order item id.
     */
    public function setQuantityShipped(int $quantityShipped): self
    {
        $this->initialized['quantityShipped'] = true;
        $this->quantityShipped = $quantityShipped;

        return $this;
    }

    /**
     * Amount of cancelled products for this order item id.
     */
    public function getQuantityCancelled(): int
    {
        return $this->quantityCancelled;
    }

    /**
     * Amount of cancelled products for this order item id.
     */
    public function setQuantityCancelled(int $quantityCancelled): self
    {
        $this->initialized['quantityCancelled'] = true;
        $this->quantityCancelled = $quantityCancelled;

        return $this;
    }

    /**
     * Indicates whether the order was cancelled on request of the customer before the retailer has shipped it.
     */
    public function getCancellationRequest(): bool
    {
        return $this->cancellationRequest;
    }

    /**
     * Indicates whether the order was cancelled on request of the customer before the retailer has shipped it.
     */
    public function setCancellationRequest(bool $cancellationRequest): self
    {
        $this->initialized['cancellationRequest'] = true;
        $this->cancellationRequest = $cancellationRequest;

        return $this;
    }

    /**
     * The date and time in ISO 8601 format when the orderItem was last changed.
     */
    public function getLatestChangedDateTime(): \DateTime
    {
        return $this->latestChangedDateTime;
    }

    /**
     * The date and time in ISO 8601 format when the orderItem was last changed.
     */
    public function setLatestChangedDateTime(\DateTime $latestChangedDateTime): self
    {
        $this->initialized['latestChangedDateTime'] = true;
        $this->latestChangedDateTime = $latestChangedDateTime;

        return $this;
    }
}
