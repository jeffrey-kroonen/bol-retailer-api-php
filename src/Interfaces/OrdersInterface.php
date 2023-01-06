<?php

declare(strict_types=1);

namespace JeffreyKroonen\BolRetailer\Interfaces;

use JeffreyKroonen\BolRetailer\Enums\FulfilmentTypes;
use JeffreyKroonen\BolRetailer\Enums\Orders\StatusTypes;
use JeffreyKroonen\BolRetailer\Generated\Model\Order;
use JeffreyKroonen\BolRetailer\Utilities\Paginate;

interface OrdersInterface
{
    public function orders(int $page, FulfilmentTypes $fulfillmentMethod, StatusTypes $status): Paginate;
    public function orderById(string $id): Order;
}
