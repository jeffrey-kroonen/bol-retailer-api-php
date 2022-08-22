<?php

declare(strict_types=1);

namespace JeffreyKroonen\BolRetailer\Interfaces;

use JeffreyKroonen\BolRetailer\Enums\Orders\FulfilmentMethods;
use JeffreyKroonen\BolRetailer\Utilities\Paginate;

interface ReturnsInterface
{
    public function returns(int $page, bool $handled, FulfilmentMethods $fulfillmentMethod): Paginate;
}
