<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Orders extends Controller
{

    public function show()
    {
        $products = [
            ['name' => 'Mobile',
                'model' => 'Samsung 3000',
                "price" => '200',
                'quantity' => '5'],
            ['name' => 'Laptop',
                'model' => 'Lenovo 200',
                'price' => '300',
                'quantity' => '8'],
            ['name' => 'Tablet',
                'model' => 'Apple 10',
                'price' => '500',
                'quantity' => '3'],
            ['name' => 'Camera',
                'model' => 'Canon R5',
                'price' => '1000',
                'quantity' => '6']
        ];


        return view('shop.orders', ['products' => $products]);
    }

}
