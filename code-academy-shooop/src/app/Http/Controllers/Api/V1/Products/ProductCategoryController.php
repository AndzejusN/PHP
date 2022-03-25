<?php

namespace App\Http\Controllers\Api\V1\Products;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class ProductCategoryController extends Controller
{
    public function index(){
        $categories = Category::Orderby('id')->get();

        return response()->json(compact('categories'));

    }
}
