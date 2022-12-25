<?php

namespace Database\Factories;

use App\Models\Area;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Area>
 */
class AreaFactory extends Factory
{
    public function definition(): array
    {
        return [
            'crag_id' => fake()->randomDigit(),
            'name' => fake()->streetSuffix(),
            'location' => fake()->streetAddress(),
            'route_count' => fake()->numberBetween(1, 10),
            'description' => fake()->sentence(),
            'detail' => 'json_string',
        ];
    }
}
