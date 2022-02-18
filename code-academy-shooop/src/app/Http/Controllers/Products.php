<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Products extends Controller
{
    public function show()
    {
        $products = [
            ['name' => 'Mobile',
                'model' => 'Samsung 3000',
                "price" => '200'],
            ['name' => 'Laptop',
                'model' => 'Lenovo 200',
                'price' => '300'],
            ['name' => 'Tablet',
                'model' => 'Apple 10',
                'price' => '500'],
            ['name' => 'Camera',
                'model' => 'Canon R5',
                'price' => '1000']
        ];

        return view('shop.products', ['products' => $products]);
    }
}
