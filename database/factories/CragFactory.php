<?php

namespace Database\Factories;

use App\Models\Crag;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Crag>
 */
class CragFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => fake()->streetSuffix(),
            'location' =>fake()->streetAddress(),
            'route_count' => fake()->numberBetween(1, 100),
            'get_here' => fake()->paragraph(),
            'description' => fake()->sentence(),
            'detail' => [],
        ];
    }
}
