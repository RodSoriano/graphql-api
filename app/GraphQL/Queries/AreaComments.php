<?php

namespace App\GraphQL\Queries;

use App\Models\Area;
use Illuminate\Database\Eloquent\Collection;

final class AreaComments
{
    public function __invoke(mixed $_, array $args): Collection
    {
        return Area::find($args['id'])->comments->where('visible', true)->sortByDesc('created_at');
    }
}
