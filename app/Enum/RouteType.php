<?php

namespace App\Enum;

enum RouteType: string
{
    case SPORT = 'SPORT';
    case CRACK = 'CRACK';
    case BIG_WALL = 'BIG_WALL';
    case MIXED = 'MIXED';
    case BOULDER = 'BOULDER';
    case HIGHBALL = 'HIGHBALL';
    case DEEP_WATER_SOLO = 'DEEP_WATER_SOLO';

    public static function values(): array
    {
        return array_map(function ($enum) {
            return $enum->value;
        }, self::cases());
    }
}
