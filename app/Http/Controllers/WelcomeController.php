<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class WelcomeController extends Controller
{
    public function index(){
        return view('welcome');
    }

    // store method
    public function store(Request $request){

        // validating request data
        $validatedData = $request->validate([
            'name' => ['required', 'string', 'max:20'],
            'price' => ['required', 'numeric'],
            'quantity' => ['required', 'numeric'],
        ]);
        
        $product = Product::create([
            'name' => $request['name'],
            'price' => $request['price'],
            'quantity' => $request['quantity']
        ]);

        // return redirect()->back();
        return view('welcome');
    }

    // get all products method
    public function getProductsList(){
        $products = Product::orderBy('created_at', 'desc')->get();

        return Response()->json($products);
    }

}
