<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Category;
use App\Models\Identifier;
use App\Models\File;
use Illuminate\Support\Arr;

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
        $names = [
            0 => 'Camera',
            1 => 'Laptop',
            2 => 'Tablet',
        ];

        return [
            'name' => Arr::random($names),
            'model' => $this->faker->words(rand(2, 3), TRUE),
            'price' => $this->faker->randomNumber(3),
            'category_id' => Category::inRandomOrder()->first()->id,
            'identifier' => Identifier::inRandomOrder()->first()->id,
            'identifier_name' => $this->faker->ean13(),
            'file_id' => File::inRandomOrder()->first()->id,
            'active' => rand(0, 1)
        ];
    }
}

