<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PembayaranKpController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RefRoleController;

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

Route::put('/refRole/update/{id}', [RefRoleController::class, 'Update']);

Route::post('/refRole/create', [RefRoleController::class, 'Create']);

Route::get('/refRole/get/{id}', [RefRoleController::class, 'Get']);

Route::get('/refRole/getList/{id}/{is_active}', [RefRoleController::class, 'GetList']);

Route::delete('/refRole/delete/{id}', [RefRoleController::class, 'Delete']);
