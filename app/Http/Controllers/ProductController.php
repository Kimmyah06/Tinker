<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    //view data to the dashboard table
    public function pass()
    {
        $data = Product::all();
        return view('dashboard', ['products' => $data]);
    }
    // update
    public function update(Request $request)
    {

        $product_number = $request->product_number;
        $product = Product::findOrFail($product_number);
        $product->product_name = $request->product_name;
        $product->quantity = $request->quantity;
        $product->description = $request->description;
        $product->price = $request->price;

        // Insert a new record to the database
        $product->save();

        // Redirects user to the previous page
        return back();
    }

    //add
    public function add(Request $request)
    {
        // Retrieve all inputs from the request and validate it
        $fields = $request->validate([
            'product_name' => ['required'],
            'quantity' => ['required'],
            'price' => ['required'],
            'description' => ['required'],
        ]);
        $product = new Product;

        // Set input values
        $product->product_name = $fields['product_name'];
        $product->quantity = $fields['quantity'];
        $product->description = $fields['description'];
        $product->price = $fields['price'];

        // Insert a new record to the database
        $product->save();

        // Redirects user to the previous page
        return back();
    }

    // delete
    public function delete(Request $request)
    {

        // Looks for an id in the database 
        $product_number = $request->product_number;
        $product = Product::findOrFail($product_number);

        // Deletes the matched record from the database
        $product->delete();

        // Redirects user to the previous page
        return back();
    }
}
