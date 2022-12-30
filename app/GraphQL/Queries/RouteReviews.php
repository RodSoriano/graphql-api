<?php

namespace App\GraphQL\Queries;

use App\Models\Route;
use Illuminate\Database\Eloquent\Collection;

final class RouteReviews
{
    public function __invoke(mixed $_, array $args): Collection
    {
        return Route::find($args['id'])->technicalReviews;
    }
}
