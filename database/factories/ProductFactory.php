<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Category;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "name" => $this->faker->title(),
            'description' => $this->faker->paragraph(),
            'author' => $this->faker->words(5, true),
            'price' => $this->faker->randomFloat(2, 0, 1000),
            'category_id' => Category::inRandomOrder()->first()->id // Potential issue if no categories exist
        ];
    }
}
