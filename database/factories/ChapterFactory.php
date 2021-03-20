<?php

namespace Database\Factories;

use App\Models\Chapter;
use Illuminate\Database\Eloquent\Factories\Factory;

class ChapterFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Chapter::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->city . " Chapter",
            'description' => $this->faker->text($maxNbChars = 30),
            'logo_path' => $this->faker->imageUrl($width = 640, $height = 480),
            'logo_thin_path' => $this->faker->imageUrl($width = 640, $height = 480)
        ];
    }
}