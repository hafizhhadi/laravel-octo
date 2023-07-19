<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Rating>
 */
class RatingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    public function definition()
    {
        return [
            'user_id' => $this->faker->numberBetween(1, 2),
            'movie_id' => $this->faker->numberBetween(1,10),
            'description' => $this->faker->realText(20),
            'rating' => $this->faker->numberBetween(1, 10),
        ];
    }
}
