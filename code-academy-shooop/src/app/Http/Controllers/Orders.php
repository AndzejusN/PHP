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

        $orders = $this->getOrders($request);

        $products = Product::get();

        return view('shop.orders', compact('products', 'orders'));
    }

    public function delete(Request $request)
    {
        $product_id = $request->id;
        $query = Order::where('product_id', $product_id);
        $query->delete();

        $orders = $this->getOrders($request);

        return view('shop.orders', compact('orders'));

    }

    public function get(Request $request)
    {
        $orders = $this->getOrders($request);

        return view('shop.orders', compact('orders'));

    }

    protected function getOrders(Request $request)
    {
        $session_id = $request->session()->getId();
        $query = Order::where('session_id', $session_id);

        return $query->get();
    }
}
