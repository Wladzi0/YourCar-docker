<?php

namespace App\DTO;

use App\Entity\User;
use App\Enum\CarBodyTypeEnum;
use App\Enum\DetailedFuelConsumptionEnum;
use App\Enum\TuningEnum;

class UserSettingDTO
{
    public ?string $preferLanguage = null;

    public ?CarBodyTypeEnum $carType = null;

    public ?TuningEnum $tuning = null;

    public ?DetailedFuelConsumptionEnum $fuelConsumption = null;

    public function __construct(
        private readonly User $user
    ) {
    }

    public function updateUserPreferences(): void
    {
        $this->user->getPreference();
    }
}
