<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\BreakfastPageGallery;

class BreakfastPageGalleryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = BreakfastPageGallery::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'images' => $this->faker->text(),
            'title' => '{}',
        ];
    }
}