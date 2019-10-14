<?php

namespace App\Http\Controllers\Communication;

use App\Chat;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    /**
     * by : @claudelkros
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $users = User::where('id', '!=', 1)->get();

      return response()->json($users, 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      // get id_sender from Auth middleware
       // get id_receiver from the $id variable in the url

       $this->validate($request, [
           'content' => 'required |min:2'
       ]);

       Message::create([
           'id_sender' => $request->input('id_sender'),
           'id_receiver' => $request->input('id_receiver'),
           'content' => $request->input('content')
       ]);
       $error = "Méssage envoyé.";
       return response()->json($error, 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $message = Message::where('id_receiver', $id)
           ->where('id_sender', 1)
           ->Orwhere('id_sender', $id)
           ->where('id_receiver', 1)
           ->get();

      return response()->json($message, 200);
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
