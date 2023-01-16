<?php

use App\Http\Controllers\ArabController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\NilaiController;
use App\Http\Controllers\HarianController;
use App\Http\Controllers\ArchiveController;
use App\Http\Controllers\MatematikaController;
use App\Http\Controllers\PknController;
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

Route::get('/',function(){
    return view('welcome');
});

Route::get('/login', [LoginController::class, 'index'])->name('login');

Route::get('/home', [HomeController::class, 'index']);

Route::get('/tahfidz', [TahfidzController::class, 'show']);

// Nilai Matematika
Route::get('/nilai/matematika', [MatematikaController::class, 'show']);
Route::post('/nilai/matematika/tambah', [MatematikaController::class, 'store'])->name('input.mtk');
Route::post('/nilai/matematika/import_excel', [MatematikaController::class, 'import']);
Route::get('/nilai/matematika/{id}/edit',[MatematikaController::class,'edit']);
Route::post('/nilai/matematika/update/{id}',[MatematikaController::class,'update']);
Route::get('/nilai/matematika/{id}/hapus', [MatematikaController::class,'hapus']);

Route::get('/nilai/bhs_arab', [ArabController::class, 'show']);
Route::post('/nilai/bhs_arab/tambah', [ArabController::class, 'store'])->name('input.arab');
Route::post('/nilai/bhs_arab/import_excel', [ArabController::class, 'import']);
Route::get('/nilai/bhs_arab/{id}/edit',[ArabController::class,'edit']);
Route::post('/nilai/bhs_arab/update/{id}',[ArabController::class,'update']);
Route::get('/nilai/bhs_arab/{id}/hapus', [ArabController::class,'hapus']);

Route::get('/nilai/pkn', [PknController::class, 'show']);
Route::post('/nilai/pkn/tambah', [PknController::class, 'store'])->name('input.pkn');
Route::post('/nilai/pkn/import_excel', [PknController::class, 'import']);
Route::get('/nilai/pkn/{id}/edit',[PknController::class,'edit']);
Route::post('/nilai/pkn/update/{id}',[PknController::class,'update']);
Route::get('/nilai/pkn/{id}/hapus', [PknController::class,'hapus']);

Route::get('/profile', [ProfileController::class, 'show']);

// Module Archive
Route::get('/archive', [ArchiveController::class, 'show'])->name('index.data'); //nampilin data
Route::post('/archive', [ArchiveController::class, 'index'])->name('input.data'); //input data archive
Route::get('/archive/{id}/edit',[ArchiveController::class,'edit']);
Route::post('/archive/update/{id}',[ArchiveController::class,'update']);
Route::get('/archive/{id}/hapus', [ArchiveController::class,'hapus']);