<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\NilaiController;
use App\Http\Controllers\HarianController;
use App\Http\Controllers\ArchiveController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TahfidzController;
use App\Models\ArchiveData;

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

Route::get('/', [LoginController::class, 'index'])->name('login');

Route::get('/home', [HomeController::class, 'index']);

Route::get('/tahfidz', [TahfidzController::class, 'show']);

Route::get('/harian', [HarianController::class, 'show']);

Route::get('/profile', [ProfileController::class, 'show']);

Route::get('/archive', [ArchiveController::class, 'show'])->name('index.data'); //nampilin data
Route::post('/archive', [ArchiveController::class, 'index'])->name('input.data'); //input data archive

Route::get('/archive/{id}/edit',[ArchiveController::class,'edit']);
Route::post('/archive/update/{id}',[ArchiveController::class,'update']);

Route::get('/archive/{id}/hapus', [ArchiveController::class,'hapus']);