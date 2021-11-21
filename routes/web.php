<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dana_puniaController;;
use App\Http\Controllers\Purnama_tilemController;
use App\Http\Controllers\Suka_dukaController;




/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('Landing-Page.welcome');
});

Route::resource('dana_punia', Dana_puniaController::class);
Route::resource('purnama_tilem', Purnama_tilemController::class);
Route::resource('suka_duka', Suka_dukaController::class);


Route::get('/userpurnama_tilem', function () {
    return view('Landing-Page.userpurnama_tilem');
});
Route::get('/usersuka_duka', function () {
    return view('Landing-Page.usersuka_duka');
});
Route::get('/userdana_punia', function () {
    return view('Landing-Page.userdana_punia');
});
Route::get('/totalkas', function () {
    return view('Landing-Page.totalkas');
});

Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth'])->name('dashboard');
require __DIR__.'/auth.php';
