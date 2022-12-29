<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\KonserController;
use App\Http\Controllers\TiketController;
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

Route::get('/', [HomeController::class, 'index']);
Route::get('/tiket/pesan/{id}', [TiketController::class, 'pesan']);
Route::get('/tiket/check_in/', [TiketController::class, 'check_in']);
Route::POST('/tiket/check_in_act/', [TiketController::class, 'check_in_act']);
Route::get('/tiket/tiket_anda/{id}', [TiketController::class, 'tiket_anda']);
Route::resource('/konser', KonserController::class);
Route::resource('/tiket', TiketController::class);
