<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Information\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
    	$products = Product::all();
    }

    public function create(Request $request)
    {
        
    	$products = Product::create([
    		'product_name' => $request->input('product_name'),
    		'description' => $request->input('description'),
    		'content' => $request->input('content'),
    		'start' => $startDate,
            'end' => $endDate,
    		'priority' => $request->input('priority'),
    		'media' => $request->input('media'),
    		// 'posted_by' => Auth::user()->id
    		'posted_by' => 1
    	]);

    	return response()->json($products);
    }
}
