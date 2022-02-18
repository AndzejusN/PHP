<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Products extends Controller
{
    public function show()
    {
        $query = DB::table('products')->get();

        return view('shop.products', compact('query'));
    }
}
