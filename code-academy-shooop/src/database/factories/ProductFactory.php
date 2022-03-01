<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Category;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->words(rand(2, 3), TRUE),
            'model' => $this->faker->words(rand(2, 3), TRUE),
            'price' => $this->faker->randomNumber(3),
            'category_id' => Category::inRandomOrder()->first()->id,
            'identifier' => $this->faker->ean13(),
            'active' => rand(0, 1),
        ];
    }
}
