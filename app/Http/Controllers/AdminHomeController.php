<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class AdminHomeController extends Controller
{
    public function index()
    {
        // Define $navsidebar or fetch it from the appropriate source
        $navsidebar = []; // You need to replace this with your actual data or logic

        return view('toko.adminpage.navsidebar', compact('navsidebar'));
    }
}