<?php

namespace App\GraphQL\Queries;

use App\Models\Crag;
use Illuminate\Database\Eloquent\Collection;

final class Crags
{
    public function __invoke(mixed $_, array $args): Collection|Crag
    {
        if ($args['id']) {
            return Crag::where('id', $args['id'])->get();
        }

        return Crag::all();
    }
}
