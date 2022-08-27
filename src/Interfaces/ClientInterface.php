<?php

declare(strict_types=1);

namespace JeffreyKroonen\BolRetailer\Interfaces;

use JeffreyKroonen\BolRetailer\Endpoints\Orders;
use JeffreyKroonen\BolRetailer\Endpoints\Returns;
use JeffreyKroonen\BolRetailer\Endpoints\Subscriptions;
use JeffreyKroonen\BolRetailer\Utilities\Auth;

interface ClientInterface
{
    public function setAuth(Auth $auth): self;
    public function isAuthenticated(): bool;
    public function authenticate(): self;
    public function orders(): Orders;
    public function returns(): Returns;
    public function subscriptions(): Subscriptions;
}
