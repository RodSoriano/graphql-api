<?php

namespace Database\Factories;

use App\Models\TechnicalReview;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<TechnicalReview>
 */
class TechnicalReviewFactory extends Factory
{
    public function definition(): array
    {
        return [
            'route_id' => fake()->numberBetween(1, 100),
            'leaded_by' => fake()->name(),
            'club' => fake()->company(),
            'reviewed_at' => fake()->date(),
            'description' => fake()->sentence(),
            'detail' => [],
        ];
    }
}
