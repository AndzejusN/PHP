<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models;

class Products extends Controller
{
    public function show(Request $request)
    {
        $query = Models\Product::orderBy('id');

//        where('active', true);

        if ($request->has('category') && is_numeric($request->category)) {
            $query->where('category_id', $request->category);
        }

        if ($request->has('check') && is_numeric($request->check)) {
            $query->where('active', $request->check);
        }

        if ($request->has('search') && is_string($request->search)) {
            $query->where('model', 'LIKE', '%' . $request->search . '%');
        }

        $products = $query->get();

        $categories = Models\Category::get();

        $view = view('shop.products', compact('products', 'categories'));

        $view->with('category_id', $request->category)->with('active', $request->check)->with('search_val', $request->search);

        return $view;
    }
}



