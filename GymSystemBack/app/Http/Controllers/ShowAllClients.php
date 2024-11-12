<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ShowAllClients extends Controller
{
    public function ListAllClients(){
        return User::all();
    }
}