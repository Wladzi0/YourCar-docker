<?php

namespace App\Enum;

enum PowerEnum: string
{
    case LessThan100 = '100-<';

    case Between100And150 = '100-150';

    case Between150And200 = '150-200';

    case Between200And300 = '200-300';

    case MoreThan300 = '300->';
}
