<?php

namespace App\Enum;

enum RouteType: string
{
    case SPORT = 'Sport';
    case CRACK = 'Crack';
    case BIG_WALL = 'Big Wall';
    case MIXED = 'Mixed';
    case BOULDER = 'Boulder';
    case HIGHBALL = 'Highball';
    case DEEP_WATER_SOLO = 'Deep Water Solo';

    public static function values(): array
    {
        return array_map(function ($enum) {
            return $enum->value;
        }, self::cases());
    }
}
