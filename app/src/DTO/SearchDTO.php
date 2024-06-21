<?php

declare(strict_types=1);

namespace App\DTO;

use App\Enum\CarSizeEnum;
use App\Enum\DrivingPurposeEnum;
use App\Enum\EngineLifeEnum;
use App\Enum\FuelConsumptionEnum;

class SearchDTO
{
    public ?string $country = null;

    public ?DrivingPurposeEnum $purpose = null;

    public ?FuelConsumptionEnum $fuelConsumption = null;

    public ?CarSizeEnum $size = null;

    public ?EngineLifeEnum $engineLife = null;
}
