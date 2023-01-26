<?php

namespace App\GraphQL\Queries;

use App\Models\Area;
use Illuminate\Database\Eloquent\Collection;

final class AreaRoutes
{
    public function __invoke(mixed $_, array $args): Collection
    {
        return Area::areaRoutes()->where('area_id', $args['id'])->get();
    }
}
