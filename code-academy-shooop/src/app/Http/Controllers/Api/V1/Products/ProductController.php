<?php

namespace App\Http\Controllers\Api\V1\Products;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateProductRequest;
use App\Models;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request)
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

        return response()->json(compact('products'));
    }

    public function create(CreateProductRequest $request)
    {
        $validated = $request->validated();

        $product = Models\Product::create($validated);

        if ($product) {
            $response = ['name' => 'Product created successfully'];
        } else {
            $response = ['name' => 'Whooops! It was mistake, please try again'];
        }

        return response()->json(compact('response'));
    }
}
