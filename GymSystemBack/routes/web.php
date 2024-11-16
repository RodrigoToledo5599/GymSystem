<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ClientController;
use App\Livewire\Login;



Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/',[Login::class,'render']);

Route::get('/test', function (){
    return view('livewire.counter');
});

Route::get('/list',[ClientController::class, 'ClientsViewPage']);