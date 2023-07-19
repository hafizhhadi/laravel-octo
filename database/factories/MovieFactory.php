<?php

namespace Database\Factories;

use App\Models\Movie;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Movie>
 */
class MovieFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Movie::class;

    protected $movies = [
        'The Shawshank Redemption',
        'The Lord of the Rings: The Return of the King',
        'Forrest Gump',
        'Fight Club',
        'Spider-Man: Across the Spider-Verse',
        'Inception',
        'The Matrix',
        'One Flew Over the Cuckoos Nest',
        'Seven Samurai',
        'Saving Private Ryan',
    ];

    public function definition()
    {
        return [
            'director_id' => $this->faker->numberBetween(1, 3),
            'title' => $this->faker->unique()->randomElement($this->movies),
            'description' => $this->faker->realText(100),
            'mpaa_rating' => 'PG-16',
            'length' => $this->faker->numberBetween(90, 120),
            'release' => $this->faker->dateTimeThisYear(),
        ];
    }
}
