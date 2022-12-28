<?php

namespace Database\Seeders;

use App\Models\Route;
use Illuminate\Database\Seeder;

class RouteSeeder extends Seeder
{
    public function run(int $quantity = 20): void
    {
        Route::factory($quantity)->hasComments(1)->create();
    }
}
