<?php

namespace App\Enum;

enum AgeEnum: string
{
    case LessThan2 = '2-<';
    case Between2And5 = '2-5';
    case Between5And10 = '5-10';
    case Between10And20 = '10-20';
    case MoreThan20 = '20->';
}
