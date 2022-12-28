<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call(CragSeeder::class, false, ['quantity' => 5]);

        $this->call([
            AreaSeeder::class,
            RouteSeeder::class,
        ]);
    }
}
