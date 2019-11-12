<?php

namespace App\Http\Controllers\library\livres;

use Illuminate\Http\Request;
use App\Models\Library\Authors;
use App\Models\Library\Categories;
use App\Models\Library\Books;
use Illuminate\Support\Facades\DB;

use App\Http\Controllers\Controller;
class BooksController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
      //

    $books = DB::table('authors')
        ->join('books', 'books.author_id', '=', 'authors.id')
        ->get();

    $categories = Categories::all();
    $authors = Authors::all();
    return response()->json(array('books' => $books, 'categories' => $categories, 'authors' => $authors));

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

      $this->validate($request, [
          'title' => 'required',
          'auteur_id' => 'required',
          'categorie_id' => 'required',
          'file_link' => 'required|file|max:5000'
      ]);

      if ($request->hasFile('file_link')) {
          # code... recuperer le nom du fichier
          $file_link = $request->file('file_link');

          $filenameWithExt = $file_link->getClientOriginalName();

          # recuperer le nom
          $fileName = pathinfo($filenameWithExt, PATHINFO_FILENAME);
          # recuperer l'extension
          $extension = $file_link->getClientOriginalExtension();
          #attribuer le nom a notre fichier
          $fileNameToStore = $fileName.'_'.time().'.'.$extension;
          #telecharge l'image
          $destination = public_path('/images/library/livres'); // destination du ficher dans public/storage/files/epreuves
          $file_link->move($destination, $fileNameToStore);
      }




      $book = new Books;

      $book->title = $request->title;
      if($request->isbn == ""){
          $book->isbn = "non dsponible";
      }else{
        $book->isbn = $request->isbn;
      }
      if($request->image_links == ""){
          $book->image_links = "pas de couvertues";
      }else{
          $book->image_links = $request->image_links;
      }
      if($request->comments == ""){
          $book->comments = "pas de commentaires";
      }else{
          $book->comments = $request->comments;
      }
      if ($book->edition_date == "") {
        // code...
          $book->edition_date = "non disponible";
      }else {
        // code...
        $book->edition_date = $request->edition_date;
      }

      $book->file_links = app('url')->asset('/images/library/livres').'/'.$fileNameToStore;
      $book->categorie_id = $request->categorie_id;
      $book->author_id = $request->auteur_id;
      $book->save();

      $books = Books::all();
      $categories = Categories::all();
      return response()->json(array('books' => $books, 'categories'=>$categories));
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
      $books = DB::table('books')
               ->where('id', '=', $id)
               ->delete();
      $msg = "Suprimes avec succes";
      return response()->json($msg);
  }
}
