<?php

namespace Database\Factories;

use App\Models\Area;
use App\Models\Crag;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Area>
 */
class AreaFactory extends Factory
{
    use JsonData;

    public function definition(): array
    {
        return [
            'crag_id' => Crag::inRandomOrder()->first(),
            'name' => fake()->streetSuffix(),
            'location' => fake()->streetAddress(),
            'route_count' => fake()->numberBetween(1, 10),
            'description' => fake()->sentence(),
            'detail' => json_encode($this->createKeyValue()),
        ];
    }
}
