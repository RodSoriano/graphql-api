<?php

namespace App\GraphQL\Queries;

use App\Models\Route;
use Illuminate\Database\Eloquent\Collection;

final class Routes
{
    public function __invoke(mixed $_, array $args): Collection|Route
    {
        $data = null;

        if ($args['grade']) {
            $data = $this->gradeFilter($args);
        }

        if ($args['quick_draws']) {
            $data = $this->quickDrawFilter($args);
        }

        if ($args['type']) {
            $data = $this->typeFilter($args);
        }

        if ($data) {
            return $data;
        }

        return $this->modelOrCollection($args);
    }

    private function modelOrCollection(array $args): Collection|Route
    {
        if ($args['id']) {
            return Route::where('id', $args['id'])->get();
        }

        return Route::all();
    }

    private function gradeFilter(array $args): Collection|Route
    {
        if ($args['grade']) {
            return Route::where('grade', $args['grade'])->get();
        }
    }

    private function quickDrawFilter(array $args): Collection|Route
    {
        if ($args['quick_draws']) {
            return Route::where('quick_draw_count', $args['quick_draws'])
                ->get();
        }
    }

    private function typeFilter(array $args): Collection|Route
    {
        if ($args['type']) {
            return Route::where('type', $args['type'])->get();
        }
    }
}
