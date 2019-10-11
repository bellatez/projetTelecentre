<?php

namespace App\Http\Controllers\library\epreuves;

use Illuminate\Http\Request;
use App\Epreuve;
use App\Examens;
use App\Matieres;
use App\Avoir_exam_mat;
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
        $matieres = DB::table('matieres')
                    ->join('avoir_exam_mats', function ($join) {
                        $join->on('avoir_exam_mats.matiere_id', '=', 'matieres.id');
                    })
                    ->where('avoir_exam_mats.examen_id', $id)
                    ->select('matieres.id', 'matieres.title')
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
