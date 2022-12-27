<?php

declare(strict_types=1);

namespace JeffreyKroonen\BolRetailer\Interfaces;

use JeffreyKroonen\BolRetailer\Generated\Model\ProcessStatus;

interface ProcessStatusesInterface
{
    public function processStatusById(string $id): ProcessStatus;
}
