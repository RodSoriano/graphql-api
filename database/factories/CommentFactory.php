<?php

namespace Database\Factories;

use App\Models\Comment;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Comment>
 */
class CommentFactory extends Factory
{
    public function definition(): array
    {
        return [
            'commentable_type' => fake()->word(),
            'commentable_id' => fake()->randomNumber(),
            'comment' => fake()->sentence(),
        ];
    }
}
