<?php

use Illuminate\Support\Facades\Route;

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

use App\Http\Controllers\MahasiswaController;

Route::get('/mahasiswa',[MahasiswaController::class, 'index']);
Route::post('/mahasiswa', [\App\Http\Controllers\MahasiswaController::class, 'create']);
Route::get('/mahasiswa/{id}/edit', [MahasiswaController::class, 'edit']);
Route::post('/mahasiswa/{id}/update', [\App\Http\Controllers\MahasiswaController::class, 'update']);
Route::get('/mahasiswa/{id}/delete', [MahasiswaController::class, 'delete']);


