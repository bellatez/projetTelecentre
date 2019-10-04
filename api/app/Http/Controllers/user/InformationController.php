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
                        ->get();

		return response()->json($infoByPriority);
    }
}
