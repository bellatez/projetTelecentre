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
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
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
    }
}
