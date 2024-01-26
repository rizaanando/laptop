<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class UserController extends Controller
{
    public function index()
    {
         // Retrieve all products from the database
         $users = User::all();
             // You can use $formattedPrice in your view or further processing
        return view('toko.adminpage.users', compact('users'));
    }

    public function create()
    {
        // Show the form to add a new product
        return view('toko.adminpage.tambahuser');
    }

    public function store(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'name'=> 'required',
            'username'=> 'required',
            'email'=> 'required',
            'password'=> 'required',
            'role'=> 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
        try {
            $users = new User([
                'name'=> $request->name,
                'username'=> $request->username,
                'email'=> $request->email,
                'password'=> $request->password,
                'role'=> $request->role,
                'image' => $request->image,
            ]);
    
            // Check if file exists
            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $filename = $file->getClientOriginalName();
                $file->storeAs('public/storage/product', $filename);
    
                // Save the image path to the product model
                $users->image = 'storage/product/' . $filename;
            }
    
            $users->save();
    
            return redirect()->route('productsindex')->with('success', 'Product added successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Failed to add product. ' . $e->getMessage());
        }
    }


    public function edit($id)
    {
        try {
            // Retrieve product details by ID
            $users = User::findOrFail($id);

            // Show the form to edit the product with product details
            return view('toko.adminpage.edituser', compact('users'));
        } catch (\Exception $e) {
            return redirect()->route('toko.adminpage.users')->with('error', 'Product not found.');
        }
    }

    public function update(Request $request, $id)
    {
        // Validate the incoming request
        $request->validate([
            'name'=> 'required',
            'username'=> 'required',
            'email'=> 'required',
            'password'=> 'required',
            'role'=> 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        try {
            // Update product details in the database
            $users = User::findOrFail($id);

            $users->update([
            'name'=> $request->name,
            'username'=> $request->username,
            'email'=> $request->email,
            'password'=> $request->password,
            'role'=> $request->role,
            'image' => $request->image,
              
            ]);

            // Check if file exists
            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $filename = $file->getClientOriginalName();
                $file->storeAs('public/storage/product', $filename);

                // Save the new image path to the product model
                $users->image = 'storage/product/' . $filename;
                $users->save();
            }

            // Redirect to the product list page with a success message
            return redirect()->route('toko.adminpage.users')->with('success', 'users updated successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Failed to update users. ' . $e->getMessage());
        }
    }
    
    public function destroy($id)
    {
        try {
            // Attempt to delete product from the database by ID
            $user = User::find($id);
            $user->delete();
    
            // Redirect to the product list page with a success message
            return redirect()->route('toko.adminpage.users')->with('success', 'Product deleted successfully.');
        } catch (\Exception $e) {
            // If an exception occurs, redirect back with an error message
            return redirect()->route('toko.adminpage.users')->with('error', 'Failed to delete product. ' . $e->getMessage());
        }
    }
}    
