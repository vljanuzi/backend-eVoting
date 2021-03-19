<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use App\Users;



class AuthController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'email'=> 'required',
            'password'=> 'required|string'

        ]);

        $credentials = request(['email','password']);

        if(!Auth::attempt($credentials))
        {
            return response()->json(['message'=>'Unauthorized'], 401);
        }
        $user = $request->user();
        $tokenResult=$User->createToken('Personal Access Token');
        $token=$tokenResult->token;
        $token->expires_at=Carbon::now()->addWeeks(1);
        $token->save();


        return response() -> json(['data'=>[
'user'=> Auth::user(),
'access_token' =>$tokenResult->accessToken,
'token_type'=>'Bearer',
'expires_at' =>Carbon::parse($tokenResult->token->expires_at)->toDateTimeString()

        ]]);

    }
}
