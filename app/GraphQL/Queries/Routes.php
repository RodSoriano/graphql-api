<?php

namespace App\GraphQL\Queries;

use App\Models\Route;
use Illuminate\Database\Eloquent\Collection;

final class Routes
{
    public function __invoke(mixed $_, array $args): Collection|Route
    {
        $query = [];

        if ($args['id']) {
            $query['id'] = $args['id'];
        }

        if ($args['grade']) {
            $query['grade'] = $args['grade'];
        }

        if ($args['quick_draws']) {
            $query['quick_draw_count'] = $args['quick_draws'];
        }

        if ($args['type']) {
            $query['type'] = $args['type'];
        }

        return Route::where($query)->get();
    }
}
