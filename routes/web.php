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