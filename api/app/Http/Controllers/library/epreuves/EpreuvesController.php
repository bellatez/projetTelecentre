<?php

namespace App\Http\Controllers\library\epreuves;

use App\Models\Library\Epreuve;
use App\Models\Library\Examens;
use App\Models\Library\Matieres;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use App\Http\Controllers\Controller;

class EpreuvesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $epreuves = DB::table('examens')
                    ->join('epreuves', 'epreuves.examen_id', '=', 'examens.id')
                    ->get();
        $examins = DB::table('examens')
                    ->get();
        return response()->json(array('epreuves' => $epreuves , 'examens'=> $examins));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        $matiere = Matieres::all()->toArray();
        $examen = Examens::all()->toArray();

        return response()->json(array('matieres'=>$matiere, 'examens'=>$examen));
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

        $matiere = Matieres::all();
        $examen = Examens::all();


        $this->validate($request,[
            'status' => 'required',
            'titles' => 'required',
            'examen_id' => 'required',
            'serie' => 'required',
            'session' => 'required',
            'file_link' => 'required|file|max:10000'
        ]);

        // pour formater la session comme (juin 2016, novembre 2018,...)
        $mois = $request->mois;
        $annee = $request->annee;
        $session_num = $mois.' '.$annee;


        // gestion de fichiers pdf
        if ($request->hasFile('file_link')) {
            # code... recuperer le nom du fichier
            $file_link = $request->file('file_link');
            $filenameWithExt =   $file_link->getClientOriginalName();

            # recuperer le nom
            $fileName = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            # recuperer l'extension
            $extension =   $file_link->getClientOriginalExtension();
            #attribuer le nom a notre fichier
            $fileNameToStore = $fileName.'_'.time().'.'.$extension;
            #telecharge l'image
            $destination = public_path('/images/library/epreuves'); // destination du ficher dans public/storage/files/epreuves
            $file_link->move($destination, $fileNameToStore);
        }

        $epreuves = new Epreuve;

        $epreuves->title = $request->titles;
        $epreuves->status = $request->status;
        $epreuves->session =  $request->session;
        $epreuves->serie = $request->serie;
        $epreuves->comment = $request->comment;
        $epreuves->examen_id = $request->examen_id;
        $epreuves->matiere_id = $request->matiere_id;
        $epreuves->download_number = 0;
        $epreuves->file_link = app('url')->asset('/images/library/epreuves').'/'.$fileNameToStore;
        $epreuves->save();

        return response()->json(array('matieres'=>$matiere, 'examens'=>$examen));
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
        $epreuves = DB::table('epreuves')
                    // ->join('matieres', function ($join) {
                    //     $join->on('matieres.id', '=', 'epreuves.matiere_id');
                    // })
                    // ->join('examens', 'examens.id', '=', 'epreuves.examen_id')
                    ->where('id', $id)
                    ->get();
        return response()->json($epreuves);
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
