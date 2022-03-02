<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Identifier;

class IdentifierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $names = [
            'EAN-13',
            'EAN-8',
            'ISBN',
            'UPC-E'
        ];

        foreach ($names as $name) {
            if (!Identifier::where('name', $name)->exists()) {
                Identifier::create([
                    'name' => $name
                ]);

            }
        }
    }
}
