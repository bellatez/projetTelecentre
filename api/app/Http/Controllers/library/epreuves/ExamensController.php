<?php

namespace App\Http\Controllers\library\epreuves;

use Illuminate\Http\Request;
use App\Models\Library\Epreuve;
use App\Models\Library\Examens;
use App\Models\Library\Matieres;
use Illuminate\Support\Facades\DB;

use App\Http\Controllers\Controller;


class ExamensController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $examens = Examens::all();
        return response()->json($examens);

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
        //


      //$this->validate($request, [
          // 'title' => 'required',
      // ]);

      $exam = new Examens;

      $exam->titles = $request->titles;

      $exam->save();

      $examens = Examens::all();

      return response()->json($examens);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $examen = Examens::find($id);
        $matieres = DB::table('epreuves')
                    ->join('examens', 'examens.id', '=', 'epreuves.examen_id')
                    ->where('epreuves.examen_id', $id)
                    ->get();
        return response()->json($matieres);

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
      return response()->json('$matieres');

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
