<?php

namespace Database\Factories;

use App\Models\Episode;
use Illuminate\Database\Eloquent\Factories\Factory;

class EpisodeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Episode::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'chapter_id' => $this->faker->numberBetween($min = 1, $max = 10),
            'user_id' => $this->faker->numberBetween($min = 1, $max = 10),
            'title' => $this->faker->sentence($nbWords = 5, $variableNbWords = true),
            'short_description' => $this->faker->sentence($nbWords = 8, $variableNbWords = true),
            'long_description' => $this->faker->text($maxNbChars = 50),
            'explicit' => $this->faker->boolean,
            'url' => $this->faker->url,
        ];
    }
}