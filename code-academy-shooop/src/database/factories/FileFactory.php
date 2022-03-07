<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\File>
 */
class FileFactory extends Factory
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
            'item_name' => Arr::random($names),
            'item_type' => 'png',
            'path' => 'storage/'
        ];
    }
}
