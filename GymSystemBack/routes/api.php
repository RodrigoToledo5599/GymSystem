<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ShowAllClients;
use App\Http\Controllers\ClientController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('/login',[AuthController::class,'AuthFuncionario']);
Route::post('/create_account',[ClientController::class,'CreateAccount']);
Route::middleware('auth:sanctum')->post('/test',function(){
    return "boa man chegou aq";
});

Route::middleware('auth:sanctum')->get('list_users',[ShowAllClients::class,'ListAllClients']);




