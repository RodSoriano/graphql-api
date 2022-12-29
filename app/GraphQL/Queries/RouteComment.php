<?php

namespace App\GraphQL\Queries;

use App\Models\Route;
use Illuminate\Database\Eloquent\Collection;

final class RouteComment
{
    public function __invoke(mixed $rootValue, array $args): Collection
    {
        return Route::find($args['id'])->comments;
    }
}
