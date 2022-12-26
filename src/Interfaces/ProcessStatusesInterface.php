<?php

namespace JeffreyKroonen\BolRetailer\Interfaces;

use JeffreyKroonen\BolRetailer\Generated\Model\ProcessStatus;

interface ProcessStatusesInterface
{
    public function processStatusById(string $id): ProcessStatus;
}
