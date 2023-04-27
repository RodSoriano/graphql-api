<?php

namespace App\GraphQL\Queries;

use App\Models\Route;
use Illuminate\Database\Eloquent\Collection;

final class Routes
{
    public function __invoke(mixed $_, array $args): Collection
    {
        $query = Route::query();

        if ($args['id']) {
            $query->where('id', $args['id']);
        }

        if ($args['grade']) {
            $query->where('grade', $args['grade']);
        }

        if ($args['quick_draws']) {
            $query->where('quick_draw_count', $args['quick_draws']);
        }

        if ($args['type']) {
            $query->where('type', $args['type']);
        }

        return $query->get();
    }
}
