<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PembayaranKpController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RefRoleController;
use App\Http\Controllers\RefProdiController;
use App\Http\Controllers\MstDosenController;
use App\Http\Controllers\MstMahasiswaController;
use App\Http\Controllers\TrsPendaftaranKpController;
use App\Http\Controllers\TrsPembayaranKpController;
use App\Http\Controllers\TrsDosenPembimbingController;
use App\Http\Controllers\TrsBimbinganKpController;
use App\Http\Controllers\TrsPengajuanTkpController;
use App\Http\Controllers\TrsUploadLaporanController;

use App\Http\Controllers\MstMediaController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get('/getListUser', [UserController::class, 'GetListJSON']);

Route::post('/upload', [UserController::class, 'Upload']);

Route::get('/user/get/{id}', [UserController::class, 'Get']);

Route::post('/user/create', [UserController::class, 'Create']);

Route::put('/user/update/{id}', [UserController::class, 'Update']);

Route::delete('/user/delete/{id}', [RefRoleController::class, 'Delete']);

Route::put('/refRole/update/{id}', [RefRoleController::class, 'Update']);

Route::post('/refRole/create', [RefRoleController::class, 'Create']);

Route::get('/refRole/get/{id}', [RefRoleController::class, 'Get']);

Route::get('/refRole/getList/{id}/{is_active}', [RefRoleController::class, 'GetList']);

Route::delete('/refRole/delete/{id}', [RefRoleController::class, 'Delete']);

Route::put('/refProdi/update/{id}', [RefProdiController::class, 'Update']);

Route::post('/refProdi/create', [RefProdiController::class, 'Create']);

Route::get('/refProdi/get/{id}', [RefProdiController::class, 'Get']);

Route::delete('/refProdi/delete/{id}', [RefProdiController::class, 'Delete']);

Route::put('/mstDosen/update/{id}', [MstDosenController::class, 'Update']);

Route::post('/mstDosen/create', [MstDosenController::class, 'Create']);

Route::get('/mstDosen/get/{id}', [MstDosenController::class, 'Get']);

Route::delete('/mstDosen/delete/{id}', [MstDosenController::class, 'Delete']);

Route::put('/mstMahasiswa/update/{id}', [MstMahasiswaController::class, 'Update']);

Route::post('/mstMahasiswa/create', [MstMahasiswaController::class, 'Create']);

Route::get('/mstMahasiswa/get/{id}', [MstMahasiswaController::class, 'Get']);

Route::delete('/mstMahasiswa/delete/{id}', [MstMahasiswaController::class, 'Delete']);

Route::put('/trsPendaftaranKp/update/{id}', [TrsPendaftaranKpController::class, 'Update']);

Route::post('/trsPendaftaranKp/create', [TrsPendaftaranKpController::class, 'Create']);

Route::get('/trsPendaftaranKp/get/{id}', [TrsPendaftaranKpController::class, 'Get']);

Route::delete('/trsPendaftaranKp/delete/{id}', [TrsPendaftaranKpController::class, 'Delete']);

Route::get('/trsPembayaranKp/verifikasi/{id}', [TrsPembayaranKpController::class, 'verifikasi']);

Route::post('/trsPembayaranKp/uploadBPembayaran', [TrsPembayaranKpController::class, 'UploadBPembayaran']);

Route::post('/trsPembayaranKp/approve', [TrsPembayaranKpController::class, 'Approve']);

Route::post('/trsDosenPembimbing/PDosenPembimbing', [TrsDosenPembimbingController::class, 'PDosenPembimbing']);

Route::post('/trsBimbinganKp/create', [TrsBimbinganKpController::class, 'Create']);

Route::post('/trsBimbinganKp/approve', [TrsBimbinganKpController::class, 'Approve']);

Route::post('/trsPengajuanTkp/create', [TrsPengajuanTkpController::class, 'Create']);

Route::post('/trsUploadLaporan/uploadPembayaran', [TrsUploadLaporanController::class, 'UploadLaporan']);

Route::post('/trsUploadLaporan/approve', [TrsUploadLaporanController::class, 'Approve']);
