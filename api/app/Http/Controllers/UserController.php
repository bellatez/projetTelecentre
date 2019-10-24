<?php

namespace App\Http\Controllers;

use App\User;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class UserController extends Controller
{

	public function index()
    {
        $users = User::all();
        return response()->json($users);
    }

    //create new user
	public function registerUser(Request $request)
	{
		$request['password'] = app('hash')->make($request['password']);
		$user = User::create($request->all());
		return response()->json($user);
	}

	public function attemptLogin(Request $request)
    {
        $client_id = env('CLIENT_ID');
        $client_secret = env('CLIENT_SECRET');
        $username = $request->input('contact');
        $password = $request->input('password');

        $guzzle = new Client;
        $response = $guzzle->post('http://localhost:8000/oauth/token', [
            'form_params' => [
                'grant_type' => 'password',
                'client_id' => $client_id,
                'client_secret' => $client_secret,
                'username' => $username,
                'password' => $password,
                'scope' => '*',
            ],
        ]);
        $reply = json_decode($response->getBody(), true);
        $token = $reply['access_token'];
        // return redirect('/')->cookie('token', $token);
    }

    public function attemptLogout(Request $request)
    {
        $accessToken = $request->cookie('token');

        $client = new Client(['base_uri' => 'http://localhost:8000']);

        $headers = [
            'Authorization' => 'Bearer ' . $accessToken,
            'Accept'        => 'application/json',
        ];

        $response = $client->request('GET', 'logout', [
            'headers' => $headers
        ]);

        $status = $response->getStatusCode();

        if($status === 200)
        {
            return response('Logout successful', $status)->withCookie(Cookie::forget('token'));
        } else {
            return response('API Logout Failed', 500);
        }
    }
}
