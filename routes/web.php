<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\pasiencontroller; 
use App\Http\Controllers\doktercontroller; 
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
    return view('index');
});

Route::get('index', function () {
    return view('index');
});

// data dokter
Route::get('dokter',[doktercontroller::class,'readdokter']);
Route::get('dokter/tambah',[doktercontroller::class,'tambahdokter']);
Route::post('dokter/tambah/simpan',[doktercontroller::class,'simpandokter']); 
Route::get('dokter/hapus/{id_dokter}',[Controller::class,'hapusbarang']);

//data pasien
Route::get('pasien',[pasiencontroller::class,'readpasien']);