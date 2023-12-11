<?php

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

Route::get('/pendaftaran_page', function(){
    return view('mahasiswa.daftar_kp');
});

Route::get('/login_page', function(){
    return view('login');
});

Route::get('/email_pembayaran', function(){
    return view('email.app_pembayaran');
});

Route::get('/tambah_tempat_kp_page', function(){
    return view('mahasiswa.pengajuan_tempat_kp');
});

Route::get('/app_pembayaran_page', function(){
    return view('admin.app_pembayaran');
});

Route::get('/bimbingan_m', function(){
    return view('mahasiswa.bimbingan_mahasiswa');
});

Route::get('/laporan_m', function(){
    return view('mahasiswa.laporan_mahasiswa');
});

Route::get('/l_kegiatan_kp', function(){
    return view('admin.list_kegiatan_kp');
});

Route::get('/l_dosen_pembimbing', function(){
    return view('admin.list_dosen_pembimbing');
});

Route::get('/l_mahasiswa', function(){
    return view('admin.list_mahasiswa');
});
