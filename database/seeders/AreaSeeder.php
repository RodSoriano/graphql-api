<?php

namespace Database\Seeders;

use App\Models\Area;
use Illuminate\Database\Seeder;

class AreaSeeder extends Seeder
{
    public function run(int $quantity = 10): void
    {
        Area::factory($quantity)->hasComments(1)->create();
    }
}
