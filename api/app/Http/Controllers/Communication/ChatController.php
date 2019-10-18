<?php

namespace App\Http\Controllers\Communication;
use App\Http\Controllers\Controller;
use App\Models\Communication\Chat;
use App\User;
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
    public function create()
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

       Chat::create([
           'sender_id' => $request->input('sender_id'),
           'receiver_id' => $request->input('receiver_id'),
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
      $message = Chat::where('receiver_id', $id)
           ->where('sender_id', 1)
           ->Orwhere('sender_id', $id)
           ->where('receiver_id', 1)
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
