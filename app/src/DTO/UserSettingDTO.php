<?php

namespace App\DTO;

use App\Enum\CarTypeEnum;
use App\Enum\DetailedFuelConsumptionEnum;
use App\Enum\TuningEnum;

class UserSettingDTO
{
    public ?string $preferLanguage = null;

    public ?CarTypeEnum $carType = null;

    public ?TuningEnum $tuning = null;

    public ?DetailedFuelConsumptionEnum $fuelConsumption = null;
}
