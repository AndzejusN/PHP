<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Product;

class Orders extends Controller
{

    public function show(Request $request)
    {

        $information = new Order;
        $information->session_id = $request->session()->getId();
        $information->product_id = $request->id;

        $information->save();

        $sessions = $this->getSessions($request);

        $products = Product::get();

        return view('shop.orders', compact('products', 'sessions'));
    }

    public function delete(Request $request)
    {
        $product_id = $request->id;
        $query = Order::where('product_id', $product_id);
        $query->delete();

        $sessions = $this->getSessions($request);

        return view('shop.orders', compact('sessions'));
    }

    public function get(Request $request)
    {
        $sessions = $this->getSessions($request);

        return view('shop.orders', compact('sessions'));
    }

    protected function getSessions(Request $request)
    {
        $session_id = $request->session()->getId();
        $query = Order::where('session_id', $session_id);

        return $query->get();
    }
}
