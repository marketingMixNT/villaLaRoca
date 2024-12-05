<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\BreakfastPage;

class BreakfastPageFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = BreakfastPage::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'meta_title' => '{}',
            'meta_description' => '{}',
            'header_heading' => '{}',
            'banner' => $this->faker->text(),
            'heading' => '{}',
            'text' => '{}',
            'content' => '{}',
        ];
    }
}
