<?php

namespace App\Enum;

enum DetailedFuelConsumptionEnum: string
{
    case LessThan6 = '6<';
    case Between6And8 = '6-8';
    case Between8And10 = '8-10';
    case GreaterThan10 = '>10';
}
