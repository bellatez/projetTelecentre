<?php

namespace App\Http\Controllers\Information;

use App\Http\Controllers\Controller;
use App\Models\Information\Info_Cat;
use App\Models\Information\Information;
use Illuminate\Http\Request;

class InformationController extends Controller
{
    public function index()
    {
    	$announcements = Information::with('user', 'user.location', 'category')
                        ->orderBy('created_at', 'desc')
                        ->get();
    	return response()->json($announcements);
    }

    public function getCategory()
    {
        $category = Info_Cat::all();
        return response()->json($category);
    }

    public function create(Request $request)
    {
        if($request->input('start') && $request->input('start')){
            $startDate = date("Y-m-d H:i:s",strtotime($request->input('start')));
            $endDate = date("Y-m-d H:i:s",strtotime($request->input('end')));
        }
        else{
            $startDate = null;
            $endDate = null;
        }

        $filename = "";
        if ($request->hasFile('media')) {
            $media = $request->file('media');

            $filename = time().'.'.$media->getClientOriginalExtension();

            $location = public_path('/images/announcement/');

            // Image::make($media)->resize(600, 600)->save($location);
            $media->move($location, $filename);

        } else {
            $filename = 'default.jpg';
           
        }

    	$announcements = Information::create([
    		'title' => $request->input('title'),
    		'category' => $request->input('category'),
    		'content' => $request->input('content'),
            'venue' => $request->input('venue'),
    		'start' => $startDate,
            'end' => $endDate,
    		'priority' => $request->input('priority'),
    		'media' => app('url')->asset('/images/announcement/').'/'.$filename,
    		// 'posted_by' => Auth::user()->id
    		'posted_by' => 1
    	]);

    	return response()->json($announcements);
    }

    public function view($id)
    {
        $info_data = Information::with('user', 'user.location', 'category')->find($id);
        return response()->json($info_data);
    }


    public function edit($id)
    {
        $info_data = Information::find($id);
        return response()->json($info_data);
    }



    public function update(Request $request, $id)
    {
        $information = Information::FindorFail($id);
        if($request->input('start') && $request->input('start')){
            $startDate = date("Y-m-d H:i:s",strtotime($request->input('start')));
            $endDate = date("Y-m-d H:i:s",strtotime($request->input('end')));
        }
        else{
            $startDate = null;
            $endDate = null;
        }

	    $information->title = $request->input('title');
	    $information->category = $request->input('category');
	    $information->content = $request->input('content');
        $information->venue = $request->input('venue');
	    $information->start = $startDate;
        $information->end = $endDate;
	    $information->priority = $request->input('priority');
	    $information->media = $request->input('media');
        $information->posted_by = 1;
		// 'posted_by' => Auth::user()->id

        $information->save();


    	return response()->json($information);
    }

    public function Destroy($id)
    {
    	Information::find($id)->delete();
    }


    /*
    Add a vue to show the price input field if the category is an advertisement or just create another migration for advertisement of products. It can also be done in such a way that everything is stored on one table but different forms are used. e.g. title=productname, content=productdescription, no priority and add the price option
    */
}
