<?php

namespace Database\Seeders;

use App\Models\Route;
use App\Models\TechnicalReview;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Seeder;

class RouteSeeder extends Seeder
{
    public function run(int $quantity = 20): void
    {
        $routes = Route::factory($quantity)->hasComments(1)->create();

        $this->reviewsCreator($routes, $quantity);
    }

    private function reviewsCreator(Collection $routes, int $quantity): void
    {
        TechnicalReview::factory($quantity)
            ->recycle($routes)
            ->create();
    }
}
