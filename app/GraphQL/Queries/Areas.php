<?php

namespace App\GraphQL\Queries;

use App\Models\Area;
use Illuminate\Database\Eloquent\Collection;

final class Areas
{
    public function __invoke(mixed $_, array $args): Collection
    {
        $query = [];

        if ($args['id']) {
            $query['id'] = $args['id'];
        }

        return Area::where($query)->get();
    }
}
