<?php

namespace App\GraphQL\Queries;

use App\Models\Area;
use Illuminate\Database\Eloquent\Collection;

final class Areas
{
    public function __invoke(mixed $_, array $args): Collection|Area
    {
        if ($args['id']) {
            return Area::where('id', $args['id'])->get();
        }

        return Area::all();
    }
}
