<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TbBarangController;
use App\Http\Controllers\TbSopirController;
use App\Http\Controllers\CobaController;

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
    return view('open/welcome');
});

Route::get('/main', function () {
    return view('open/main');
});

Route::get('/gudang',function(){
    return view('side/gudang');
});

Route::get('/motif',function(){
    return view('side/motif');
});

Route::get('/barang_in',function(){
    return view('side/barang_in');
});

Route::get('/stok',function(){
    return view('side/stok');
});

Route::get('/cek_stok',function(){
    return view('side/cek_stok');
});

Route::get('/kualitas',function(){
    return view('side/kualitas');
});

Route::get('/barang_out',function(){
    return view('side/barang_out');
});

Route::get('/outlet',function(){
    return view('side/outlet');
});

Route::get('/report',function(){
    return view('side/report');
});

Route::get('/sopir',function(){
    return view('side/sopir');
});

Route::get('/transportasi',function(){
    return view('side/transportasi');
});

Route::get('/tujuan',function(){
    return view('side/tujuan');
});

Route::get('/shipping',function(){
    return view('side/shipping');
});


Route::get('/user',function(){
    return view('side/user');
});

Route::get('/pegawai',function(){
    return view('side/pegawai');
});

Route::get('/dashboard',[TbBarangController::class,'barang'])->name('dashboard');

Route::get('/tambah_barang',[TbBarangController::class,'tambah_barang'])->name('tambah_barang');
Route::post('/insert_barang',[TbBarangController::class,'insert_barang'])->name('insert_barang');

Route::get('/tampil_barang/{id_barang}',[TbBarangController::class,'tampil_barang'])->name('tampil_barang');
Route::post('/update_barang/{id_barang}',[TbBarangController::class,'update_barang'])->name('update_barang');

Route::get('/delete_barang/{id_barang}',[TbBarangController::class,'delete_barang'])->name('delete_barang');

// Route::get('/sopir',[TbSopirController::class,'supir'])->name('sopir');

Route::get('/shipping',[TbSopirController::class,'supir'])->name('outlet');

// Route::get('/coba',[CobaController::class,'index']);
// Route::get('/cobaEdit/{id}',[CobaController::class,'tampil_barang']);