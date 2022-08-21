<?php

declare(strict_types=1);

namespace JeffreyKroonen\BolRetailer\Interfaces;

use JeffreyKroonen\BolRetailer\Enums\Orders\FulfilmentMethods;
use JeffreyKroonen\BolRetailer\Enums\Orders\StatusTypes;
use JeffreyKroonen\BolRetailer\Generated\Model\Order;
use JeffreyKroonen\BolRetailer\Utilities\Paginate;

interface OrdersInterface
{
    public function orders(int $page, FulfilmentMethods $fulfillmentMethod, StatusTypes $status): Paginate;
    public function orderById(string $id): Order;
}
