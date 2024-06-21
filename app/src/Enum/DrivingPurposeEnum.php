<?php

namespace App\Enum;

enum DrivingPurposeEnum: string
{
    case City = 'For city driving';

    case LongDistance = 'For long distance driving';

    case Highway = 'For driving on the highway';

    case ForEveryday = 'Car for every day';
}
