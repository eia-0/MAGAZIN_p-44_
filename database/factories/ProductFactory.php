<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        return [
            "name" => fake()->word(),
            "price" => fake()->randomFloat(2, 1, 5000000),
            "description" => fake()->paragraph(),
            "count" => fake()->randomNumber(),
            "category_id" => Category::inRandomOrder()->first()->id  
        ];
    }
}
