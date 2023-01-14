<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\NilaiController;
use App\Http\Controllers\HarianController;
use App\Http\Controllers\ArchiveController;
use App\Http\Controllers\MatematikaController;
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

// Nilai
Route::get('/nilai/matematika', [MatematikaController::class, 'show']);
Route::post('/nilai/matematika/tambah', [MatematikaController::class, 'store'])->name('input.mtk');
Route::get('/nilai/matematika/{id}/edit',[MatematikaController::class,'edit']);
Route::post('/nilai/matematika/update/{id}',[MatematikaController::class,'update']);
Route::get('/nilai/matematika/{id}/hapus', [MatematikaController::class,'hapus']);

Route::get('/profile', [ProfileController::class, 'show']);

// Module Archive
Route::get('/archive', [ArchiveController::class, 'show'])->name('index.data'); //nampilin data
Route::post('/archive', [ArchiveController::class, 'index'])->name('input.data'); //input data archive
Route::get('/archive/{id}/edit',[ArchiveController::class,'edit']);
Route::post('/archive/update/{id}',[ArchiveController::class,'update']);
Route::get('/archive/{id}/hapus', [ArchiveController::class,'hapus']);