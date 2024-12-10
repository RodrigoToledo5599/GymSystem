<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Employee;
use App\Events\UserLogged;


class AuthController extends Controller
{
    public function AuthFuncionario(Request $request){
        $guard = "employee";
        $credentials = $request->only('email','password');

        if (Auth::guard($guard)->attempt($credentials)) {
            $user = Auth::guard($guard)->user();
            $token = $user->createToken('AppToken')->plainTextToken;
            // UserLogged::dispatch();
            return response(["token" => $token],201);
        }
        return response("DENIED", 403);
    }
}
