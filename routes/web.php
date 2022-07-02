<?php

use Illuminate\Support\Facades\Route;
use App\Models\Mahasiswa;
use App\Http\Controllers\MahasiswaController;

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

Route::get('/mahasiswa',[MahasiswaController::class,'index']);
Route::get('/mahasiswa/create',[MahasiswaController::class,'create']);
Route::post('/mahasiswa/store',[MahasiswaController::class,'store']);
Route::get('/mahasiswa/{id}/edit',[MahasiswaController::class,'edit']);
Route::put('/mahasiswa/{id}',[MahasiswaController::class,'update']);
Route::delete('/mahasiswa/{id}',[MahasiswaController::class,'destroy']);