<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Employee;


class AuthController extends Controller
{
    public function AuthFuncionario(Request $request){
        $credentials = $request->only('email','password');

        if (Auth::guard('user')->attempt($credentials)) {
            $user = Auth::guard('user')->user();
            // return $user;
            $token = $user->createToken('AppToken')->plainTextToken;
            return $token;
        } else {
            return "not nice";
        }
    }
}
