<?php

namespace App\GraphQL\Queries;

use App\Models\Crag;
use Illuminate\Database\Eloquent\Collection;

final class CragAreas
{
    public function __invoke(mixed $_, array $args): Collection
    {
        return Crag::cragAreas()->where('crag_id', $args['id'])->get();
    }
}
