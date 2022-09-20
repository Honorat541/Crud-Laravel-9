<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BureauController;
use App\Http\Controllers\EmployeController;
use App\Http\Controllers\DirectionController;
use App\Http\Controllers\InterphoneController;


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
    return view('welcome');
});

Route::resource('Bureau',BureauController::class);
Route::resource('Direction',DirectionController::class);
Route::resource('Employe',EmployeController::class);
Route::resource('Interphone',InterphoneController::class);




