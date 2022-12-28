<?php

namespace Database\Seeders;

use App\Models\Crag;
use Illuminate\Database\Seeder;

class CragSeeder extends Seeder
{
    public function run(int $quantity = 1): void
    {
        Crag::factory($quantity)->hasComments(1)->create();
    }
}
