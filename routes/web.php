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
Route::get('/kendaraan', [PegawaiController::class, 'index']);
Route::get('/kendaraan/tambah', [PegawaiController::class, 'tambah']);
Route::post('/kendaraan/store', [PegawaiController::class, 'store']);
Route::get('/kendaraan/edit/{id}', [PegawaiController::class, 'edit']);
Route::put('/kendaraan/update/{id}', [PegawaiController::class, 'update']);
Route::get('/kendaraan/hapus/{id}', [PegawaiController::class, 'delete']);
// Route::get('/pegawai', 'PegawaiController@index');
Route::get('/', function () {
    return view('welcome');
});
