<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Information\Information;
use App\Models\Information\Product;
use App\Books;
use App\User;

class DashboardController extends Controller
{
    public function index()
    {
    	$users = User::all()->count();
    	$announcements = Information::all()->count();
    	$books = Books::all()->count();
    	$admin = User::where('role', '!=' ,'0')->count();
    	$commerce = Product::all()->count();

    	return array(
    		'users' => $users, 
    		'announcement'=> $announcements, 
    		'books' => $books, 
    		'admin'=> $admin, 
    		'commerce' => $commerce
    	);
    }
}
