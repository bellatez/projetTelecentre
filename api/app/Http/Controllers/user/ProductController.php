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
}
