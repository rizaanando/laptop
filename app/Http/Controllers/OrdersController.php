<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class OrdersController extends Controller
{
    public function index()
    {
        $orders = Product::all(); // Change $product to $orders
        return view('toko.adminpage.orders', compact('orders'));
    }
}
