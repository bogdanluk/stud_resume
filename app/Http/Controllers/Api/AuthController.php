<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request){
        $credentials = $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string|min:8',
        ]);

        if(Auth::attempt($credentials)){
            $token = $request->user()->createToken($request->user()->email)->plainTextToken;
            return response([
                'message' => __('messages.200'),
                'data' => [
                    'user' => $request->user(),
                    'token' => $token,
                ]
            ], 200);
        }

        return response([
            'message' => __('auth.failed')
        ], 401);
    }

    public function logout(Request $request){
        $request->user()->tokens()->delete();

        return response([
            'message' => __('auth.logout')
        ], 200);
    }
}
