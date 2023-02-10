<?php

namespace App\GraphQL\Queries;

use App\Models\Route;
use Illuminate\Database\Eloquent\Collection;

final class Routes
{
    public function __invoke(mixed $_, array $args): Collection|Route
    {
        if ($args['id']) {
            return Route::where('id', $args['id'])->get();
        }

        return Route::all();
    }
}
