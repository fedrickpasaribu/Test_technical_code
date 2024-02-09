<?php

use App\Http\Controllers\SegitigaController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::post('/triangle/hitung',[SegitigaController::class,'hitung']);
Route::post('/ganjil/hitung',[SegitigaController::class,'hitungGanjil']);
Route::post('/genap/hitung',[SegitigaController::class,'hitungGenap']);