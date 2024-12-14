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
Route::post('/login-user',[Login::class,'authUser']);



Route::middleware('auth:sanctum')->get('/users',[AccountsList::class,'render'])->name('users');



Route::middleware('auth:sanctum')->get('/entrance',[EntranceControll::class,'render']);
Route::middleware('auth:sanctum')->get('/entranceday',[EntranceControll::class,'renderDay']);
Route::middleware('auth:sanctum')->get('/entranceinterval',[EntranceControll::class,'renderInterval']);