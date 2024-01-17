<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{
    public function index()
    {
         // Retrieve all products from the database
         $products = Product::all();

         // Accessor will automatically format the price when accessed
         foreach ($products as $product) {
             $formattedPrice = $product->price;
         }
             // You can use $formattedPrice in your view or further processing
        return view('toko.adminpage.products', compact('products'));
    }

    public function create()
    {
        // Show the form to add a new product
        return view('toko.adminpage.tambahproducts');
    }

    public function store(Request $request)
    {
        $request->validate([
            'product_name' => 'required',
            'description' => 'required',
            'product_type' => 'required',
            'product_id' => 'required',
            'color' => 'required',
            'price' => 'required|numeric',
            'stock' => 'required|integer',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
        try {
            $product = new Product([
                'product_name' => $request->product_name,
                'description' => $request->description,
                'product_type' => $request->product_type,
                'product_id' => $request->product_id,
                'color' => $request->color,
                'price' => $request->price,
                'stock' => $request->stock,
            ]);
    
            // Check if file exists
            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $filename = $file->getClientOriginalName();
                $file->storeAs('public/storage/product', $filename);
    
                // Save the image path to the product model
                $product->image = 'storage/product/' . $filename;
            }
    
            $product->save();
    
            return redirect()->route('productsindex')->with('success', 'Product added successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Failed to add product. ' . $e->getMessage());
        }
    }


    public function edit($id)
    {
        // Retrieve product details by ID
        $product = DB::table('products')->where('id', $id)->first();

        // Show the form to edit the product
        return view('toko.adminpage.editproducts', compact('product'));
    }

    public function update(Request $request, $id)
    {
        // Validate the incoming request
        $request->validate([
            'product_name' => 'required',
            'description' => 'required',
            'product_type' => 'required',
            'product_id' => 'required',
            'color' => 'required',
            'price' => 'required|numeric',
            'stock' => 'required|integer',
            'image' => 'required',
        ]);
    
        try {
            // Update product details in the database
            $product = Product::find($id);
            $product->update([
                'product_name' => $request->product_name,
                'description' => $request->description,
                'product_type' => $request->product_type,
                'product_id' => $request->product_id,
                'color' => $request->color,
                'price' => $request->price,
                'stock' => $request->stock,
                // Assuming 'image' is a string column
                'image' => $request->image,
            ]);
    
            // Redirect to the product list page with a success message
            return redirect()->route('toko.adminpage.products')->with('success', 'Product updated successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Failed to update product. ' . $e->getMessage());
        }
    }
    
    public function destroy($id)
    {
        try {
            // Attempt to delete product from the database by ID
            $product = Product::find($id);
            $product->delete();
    
            // Redirect to the product list page with a success message
            return redirect()->route('toko.adminpage.products')->with('success', 'Product deleted successfully.');
        } catch (\Exception $e) {
            // If an exception occurs, redirect back with an error message
            return redirect()->route('toko.adminpage.products')->with('error', 'Failed to delete product. ' . $e->getMessage());
        }
    }
}    