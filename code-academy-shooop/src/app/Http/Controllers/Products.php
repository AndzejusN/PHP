<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;
use App\Models;

class Products extends Controller
{
    public function show(Request $request)
    {
        $query = Models\Product::orderBy('id');

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

        $view
            ->with('category_id', $request->category)
            ->with('active', $request->check)
            ->with('search_val', $request->search);

        return $view;
    }

    public function create(Request $request)
    {
        $categories = Models\Category::get();
        $view = view('shop.create', compact('categories'));
        $view->with('category_id', $request->category);

        return $view;
    }

    public function store(Request $request)
    {
        $rules = [
            'category_id' => ['required', 'exists:App\Models\Category,id'],
            'model' => 'required|max:30',
            'active' => 'required|numeric',
            'name' => 'required|max:50',
            'price' => 'required|numeric',
        ];

        $validated = $request->validate($rules);

        $product = Models\Product::create($validated);

        return view('shop.store', compact('product'));
    }
}
