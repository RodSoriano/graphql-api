<?php

namespace App\GraphQL\Queries;

use App\Models\Crag;
use Illuminate\Database\Eloquent\Collection;

final class Crags
{
    public function __invoke(mixed $_, array $args): Collection
    {
        $query = Crag::query();

        if ($args['id']) {
            $query->where('id',  $args['id']);
        }

        return $query->get();
    }
}
