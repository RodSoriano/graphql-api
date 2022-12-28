<?php

namespace Database\Factories;

use App\Models\TechnicalReview;
use App\Models\Route;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<TechnicalReview>
 */
class TechnicalReviewFactory extends Factory
{
    use JsonData;

    public function definition(): array
    {
        return [
            'route_id' => Route::inRandomOrder()->first(),
            'leaded_by' => fake()->name(),
            'club' => fake()->company(),
            'reviewed_at' => fake()->date(),
            'description' => fake()->sentence(),
            'detail' => json_encode($this->createKeyValue()),
        ];
    }
}
