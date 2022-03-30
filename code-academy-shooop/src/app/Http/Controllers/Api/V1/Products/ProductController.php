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

    public function create(CreateProductRequest $request, $id = null)
    {
        $validated = $request->validated();

        if ($id !== null) {
            $product = Models\Product::where('id', $id)->first();
        } else {
            $product = new Models\Product;
        }

        $product->fill($validated);

        $check = $product->save();

        if ($check) {
            $response = ['name' => 'Product created successfully'];
        }

        return response()->json(compact('response'));
    }

    public function find($id)
    {
        $product = Models\Product::where('id', $id)->get();

        return response()->json(compact('product'));
    }
}
