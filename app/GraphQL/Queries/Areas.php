<?php

namespace App\GraphQL\Queries;

use App\Models\Area;
use Illuminate\Database\Eloquent\Collection;

final class Areas
{
    public function __invoke(mixed $_, array $args): Collection
    {
        $query = Area::query();

        if ($args['id']) {
            $query->where('id',  $args['id']);
        }

        return $query->get();
    }
}
