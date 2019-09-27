<?php

namespace App\Http\Controllers\Information;

use App\Http\Controllers\Controller;
use App\Models\Information\Information;
use Illuminate\Http\Request;

class InformationController extends Controller
{
    public function index()
    {
    	$announcements = Information::all()->where('category', 2);
    	return response()->json($announcements);
    }

    public function createAnnouncement(Request $request)
    {
    	$announcements = Information::create([
    		'title' => $request->input('title'),
    		'category' => $request->input('category'),
    		'content' => $request->input('content'),
    		'date' => $request->input('date'),
    		'media' => $request->input('media'),
    		// 'posted_by' => Auth::user()->id
    		'posted_by' => 1
    	]);

    	return response()->json($announcements);
    }
}
