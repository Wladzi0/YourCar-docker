<?php

declare(strict_types=1);

namespace App\DTO;

use App\Entity\Car\Transmission;
use App\Enum\DetailedFuelConsumptionEnum;
use App\Enum\PowerEnum;
use App\Enum\TuningEnum;

class FilterDTO
{
    public ?DetailedFuelConsumptionEnum $consumption = null;

    public ?Transmission $transmission = null;

    public ?PowerEnum $power = null;

    public ?PowerEnum $age = null;

    public ?TuningEnum $tuning = null;
}
