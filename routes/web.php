<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PegawaiController;


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
Route::get('/surkel', [PegawaiController::class, 'index']);
Route::get('/surkel/tambah', [PegawaiController::class, 'tambah']);
Route::post('/surkel/store', [PegawaiController::class, 'store']);
Route::get('/surkel/edit/{id}', [PegawaiController::class, 'edit']);
Route::put('/surkel/update/{id}', [PegawaiController::class, 'update']);
Route::get('/surkel/hapus/{id}', [PegawaiController::class, 'delete']);
// Route::get('/pegawai', 'PegawaiController@index');
Route::get('/', function () {
    return view('welcome');
});
