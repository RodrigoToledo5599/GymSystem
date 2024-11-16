<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\AccountsList;
use App\Livewire\Login;



Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/',[Login::class,'render']);

Route::get('/test', function (){
    return view('livewire.counter');
});

Route::get('/list',[AccountsList::class, 'render']);