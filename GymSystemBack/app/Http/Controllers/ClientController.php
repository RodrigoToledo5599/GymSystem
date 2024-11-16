<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ClientController extends Controller
{
    public function CreateAccount(Request $request){
        $user = new User();
        // $user = $request->all();
        $user->name = $request['name'];
        $user->cpf = $request['cpf'];
        $user->email = $request['email'];
        $user->password = $request['password'];
        $user->paid = $request['paid'];
        // dd($user)->json();
        $user->save();
        
        return $user;
    }
}
