<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function AuthFuncionario(Request $request){
        $credentials = $request->only('email','password');

        if (Auth::guard('employee')->attempt($credentials)) {
            return "nice";
        } else {
            return "not nice";
        }
    }
}
