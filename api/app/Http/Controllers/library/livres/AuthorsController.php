<?php

namespace App\Http\Controllers\library\livres;

use Illuminate\Http\Request;
use App\Models\Library\Authors;
use App\Models\Library\Categories;
use App\Models\Library\Books;

use Illuminate\Support\Facades\DB;

use App\Http\Controllers\Controller;
class AuthorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $auteur = Authors::all();
        return response()->json($auteur);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $categories = Categories::all();
        $authors = Authors::all();
        $books = Books::all();

        //$this->validate($request, [
        // 'title' => 'required',
        // ]);

        $aut = new Authors;



        $aut->name = $request->title;

        $aut->save();

        return response()->json(array('books' => $books, 'categories' => $categories, 'authors' => $authors));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        // $aut = DB::table('authors')
        //           ->where('id', $request->id)
        //           ->update(['name' => $request->name]);
        //
        // $aut->save();

        $categories = Categories::all();
        $authors = Authors::all();
        $books = Books::all();

        return response()->json(array('books' => $books, 'categories' => $categories, 'authors' => $authors));


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $books = DB::table('authors')
                 ->where('id', '=', $id)
                 ->delete();
        $msg = "Suprimes avec succes";
        return response()->json($msg);
    }
}
