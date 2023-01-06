<?php

declare(strict_types=1);

namespace JeffreyKroonen\BolRetailer\Interfaces;

interface ResponseInterface
{
    public function header(?string $header = null): ?string;
    public function headers(): array;
    public function json(): array;
    public function statusCode(): int;
}
