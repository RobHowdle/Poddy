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
            'name' => "Original Chapter",
            'description' => "The original Chapter",
            'logo_path' => $this->faker->imageUrl($width = 640, $height = 480),
            'logo_thin_path' => $this->faker->imageUrl($width = 640, $height = 480),

            'name' => "Irish Chapter",
            'description' => "The Irish Chapter",
            'logo_path' => $this->faker->imageUrl($width = 640, $height = 480),
            'logo_thin_path' => $this->faker->imageUrl($width = 640, $height = 480),


            'name' => "Liverpool Chapter",
            'description' => "The Liverpool Chapter",
            'logo_path' => $this->faker->imageUrl($width = 640, $height = 480),
            'logo_thin_path' => $this->faker->imageUrl($width = 640, $height = 480),

            'name' => "Cumbria Chapter",
            'description' => "The Cumbria Chapter",
            'logo_path' => $this->faker->imageUrl($width = 640, $height = 480),
            'logo_thin_path' => $this->faker->imageUrl($width = 640, $height = 480),

        ];
    }
}