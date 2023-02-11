<?php

namespace App\GraphQL\Queries;

use App\Models\Crag;
use Illuminate\Database\Eloquent\Collection;

final class Crags
{
    public function __invoke(mixed $_, array $args): Collection
    {
        $query = [];

        if ($args['id']) {
            $query['id'] = $args['id'];
        }

        return Crag::where($query)->get();
    }
}
