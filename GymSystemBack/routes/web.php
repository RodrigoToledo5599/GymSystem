<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ClientController;
use App\Livewire\Login;
use App\Livewire\AccountsList;
use App\Livewire\EntranceControll;



Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/',[Login::class,'render']);
Route::get('/users',[AccountsList::class,'render']);
Route::get('/entrance',[EntranceControll::class,'render']);