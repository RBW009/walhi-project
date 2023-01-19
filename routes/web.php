<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\BencanaController;
use App\Http\Controllers\LaporController;
use App\Http\Controllers\PsnController;
use App\Http\Controllers\WuipController;
use App\Http\Controllers\WalhiController;




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

// Controller Pantau Lingkungan (USER)
Route::get('/', [WalhiController::class, 'home']);
Route::get('/pLingkungan-INA', [WalhiController::class, 'PLingkunganINA']);
Route::get('/pLingkungan-EN', [WalhiController::class, 'PLingkunganEN']);
Route::get('/dashboard', [WalhiController::class, 'Dashboard']);
Route::get('/artikel', [WalhiController::class, 'Artikel']);
Route::get('/artikel/all', [WalhiController::class, 'AllArtikel']);
Route::get('/artikel/{id}', [WalhiController::class, 'DetailArtikel']);
Route::get('/lapor', [WalhiController::class, 'Lapor']);
Route::post('/add', [WalhiController::class, 'store']);
Route::get('/faq', [WalhiController::class, 'Faq']);
// Controller Pantau Lingkungan (Admin)
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout']);


Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/admin/dashboard', [DashboardController::class, 'index'])->middleware('auth');
Route::resource('/admin/artikel', ArtikelController::class)->middleware('auth');
Route::resource('/admin/datapeta/bencana', BencanaController::class)->middleware('auth');
Route::resource('/admin/datapeta/psn', PsnController::class)->middleware('auth');
Route::resource('/admin/datapeta/wuip', WuipController::class)->middleware('auth');
Route::resource('/admin/lapor', LaporController::class)->middleware('auth');