<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Information\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
    	$products = Product::orderBy('created_at', 'desc')->get();
        return response()->json($products);
    }

    public function create(Request $request)
    {
        $filename = "";
        if ($request->hasFile('media')) {
            $media = $request->file('media');

            $filename = time().'.'.$media->getClientOriginalExtension();

            $location = public_path('/images/commerce/');

            // Image::make($media)->resize(600, 600)->save($location);
            $media->move($location, $filename);

        } else {
            $filename = 'marche.png';
           
        }
        
    	$products = Product::create([
    		'product_name' => $request->input('product_name'),
    		'description' => $request->input('description'),
    		'price' => $request->input('price'),
    		'quantity' => $request->input('quantity'),
    		'contact' => $request->input('contact'),
    		'media' => app('url')->asset('/images/commerce/').'/'.$filename,
    		// 'posted_by' => Auth::user()->id
    		'posted_by' => 1
    	]);

    	return response()->json($products);
    }
}
