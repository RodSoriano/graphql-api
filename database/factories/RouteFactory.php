<?php

namespace Database\Factories;

use App\Models\Route;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Route>
 */
class RouteFactory extends Factory
{
    public function definition(): array
    {
        return [
            'area_id' => fake()->randomDigit(),
            'name' => fake()->streetSuffix(),
            'grade' => fake()->randomFloat(),
            'quick_draw_count' => fake()->randomDigit(),
            'length' => fake()->randomDigitNot(0),
            'setters' => [
                fake()->name(),
                fake()->name(),
            ],
            'first_ascend' => fake()->name(),
            'bolted_at' => fake()->dateTimeThisCentury(),
            'description' => fake()->sentence(),
            'detail' => [],
        ];
    }
}
