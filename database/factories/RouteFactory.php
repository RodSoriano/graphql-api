<?php

namespace Database\Factories;

use App\Enum\RouteType;
use App\Models\Route;
use App\Models\Area;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Route>
 */
class RouteFactory extends Factory
{
    use JsonData;

    public function definition(): array
    {
        return [
            'area_id' => Area::inRandomOrder()->first(),
            'name' => fake()->streetSuffix(),
            'grade' => fake()->randomFloat(),
            'type' => fake()->randomElement(RouteType::values()),
            'quick_draw_count' => fake()->numberBetween(1, 15),
            'length' => fake()->randomDigitNot(0),
            'setters' => fake()->name(),
            'first_ascend' => fake()->name(),
            'bolted_at' => fake()->dateTimeThisCentury(),
            'description' => fake()->sentence(),
            'detail' => json_encode($this->createKeyValue()),
        ];
    }
}
