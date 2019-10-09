<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Information\Information;
use Illuminate\Http\Request;

class InformationController extends Controller
{
    public function index()
    {
    	$infoByPriority = Information::with('user', 'user.location', 'category')
                        ->orderBy('created_at', 'desc')
                        ->where('category', '3')
                        ->orwhere('category', '2')
                        ->get();

		return response()->json($infoByPriority);
    }

   	public function infoCat($priority)
   	{
   		$infoPriority = Information::with('user', 'user.location', 'category')
   						->where('priority', $priority)
                        ->orderBy('created_at', 'desc')
                        ->get();
   	}

    public function activities()
    {
        $activities = Information::with('user', 'user.location', 'category')
                      ->where('category', '1')
                      ->get();
        return response()->json($activities);
    }
}
