<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Information\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
    	$products = Product::all();
        return response()->json($products);
    }

    public function create(Request $request)
    {
        
    	$products = Product::create([
    		'product_name' => $request->input('product_name'),
    		'description' => $request->input('description'),
    		'price' => $request->input('price'),
    		'quantity' => $request->input('quantity'),
    		'contact' => $request->input('contact'),
    		'media' => $request->input('media'),
    		// 'posted_by' => Auth::user()->id
    		'posted_by' => 1
    	]);

    	return response()->json($products);
    }
}
