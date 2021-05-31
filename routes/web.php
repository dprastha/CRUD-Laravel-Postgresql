<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\SuratMasukController;
use App\Http\Controllers\SuratKeluarController;


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

Route::get('/', [PegawaiController::class, 'index']);
// Route::get('/suratmasuk', [PegawaiController::class, 'index']);
// Route::get('/suratkeluar', [PegawaiController::class, 'index']);

Route::resource('pegawai', PegawaiController::class);
Route::resource('suratmasuk', SuratMasukController::class);
Route::resource('suratkeluar', SuratKeluarController::class);

Auth::routes();
