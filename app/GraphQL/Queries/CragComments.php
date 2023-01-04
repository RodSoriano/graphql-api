<?php

namespace App\GraphQL\Queries;

use App\Models\Crag;
use Illuminate\Database\Eloquent\Collection;

final class CragComments
{
    public function __invoke(mixed $_, array $args): Collection
    {
        return Crag::find($args['id'])->comments->where('visible', true)->sortByDesc('created_at');
    }
}
