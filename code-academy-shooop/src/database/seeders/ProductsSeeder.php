<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;
use \App\Models\Product;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::factory()->state(new Sequence(
            ['name' => 'Camera'],
            ['name' => 'Laptop'],
            ['name' => 'Tablet']
        ))->count(20)->create();
    }
}
