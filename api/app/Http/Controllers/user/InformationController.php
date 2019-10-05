<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Information\Information;
use Illuminate\Http\Request;

class InformationController extends Controller
{
    public function index()
    {
    	$info = Information::with('user', 'user.location', 'category')
                        ->orderBy('created_at', 'desc')
                        ->get();

		return response()->json($info);
    }

   	public function infoCat($priority)
   	{
   		$infoPriority = Information::with('user', 'user.location', 'category')
   						->where('priority', $priority)
                        ->orderBy('created_at', 'desc')
                        ->get();
   	}
}
