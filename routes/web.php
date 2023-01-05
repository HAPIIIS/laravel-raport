<?php

use App\Http\Controllers\ArchiveController;
use App\Http\Controllers\HarianController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\NilaiController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TahfidzController;
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

Route::get('/', [LoginController::class, 'index']);

Route::get('/home', [HomeController::class, 'index']);

Route::get('/tahfidz', [TahfidzController::class, 'show']);

Route::get('/harian', [HarianController::class, 'show']);

Route::get('/profile', [ProfileController::class, 'show']);

Route::get('/archive', [ArchiveController::class, 'show']);


