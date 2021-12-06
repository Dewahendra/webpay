<?php

use App\Http\Controllers\API\Purnama_tilemController;
use App\Http\Controllers\API\Suka_dukaController;
use App\Http\Controllers\API\Dana_puniaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('login', [AuthController::class,'login']);

Route::resource('purnama_tilem', Purnama_tilemController::class);
Route::post('/purnama_tilem/{id}',[Purnama_tilemController::class,'update']);

Route::resource('suka_duka', Suka_dukaController::class);
Route::post('/suka_duka/{id}',[Suka_dukaController::class,'update']);

Route::resource('dana_punia', Dana_puniaController::class);
Route::post('/dana_punia/{id}',[Dana_puniaController::class,'update']);
