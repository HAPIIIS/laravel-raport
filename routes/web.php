<?php

use App\Http\Controllers\ArabController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\NilaiController;
use App\Http\Controllers\HarianController;
use App\Http\Controllers\ArchiveController;
use App\Http\Controllers\InggrisController;
use App\Http\Controllers\IpaController;
use App\Http\Controllers\IpsController;
use App\Http\Controllers\MatematikaController;
use App\Http\Controllers\PaiController;
use App\Http\Controllers\PjokController;
use App\Http\Controllers\PknController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SbdpController;
use App\Http\Controllers\SundaController;
use App\Http\Controllers\TahfidzController;
use App\Http\Controllers\TikController;
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

Route::get('/nilai/arab', [ArabController::class, 'show']);
Route::post('/nilai/arab/tambah', [ArabController::class, 'store'])->name('input.arab');
Route::post('/nilai/arab/import_excel', [ArabController::class, 'import']);
Route::get('/nilai/arab/{id}/edit',[ArabController::class,'edit']);
Route::post('/nilai/arab/update/{id}',[ArabController::class,'update']);
Route::get('/nilai/arab/{id}/hapus', [ArabController::class,'hapus']);

Route::get('/nilai/pkn', [PknController::class, 'show']);
Route::post('/nilai/pkn/tambah', [PknController::class, 'store'])->name('input.pkn');
Route::post('/nilai/pkn/import_excel', [PknController::class, 'import']);
Route::get('/nilai/pkn/{id}/edit',[PknController::class,'edit']);
Route::post('/nilai/pkn/update/{id}',[PknController::class,'update']);
Route::get('/nilai/pkn/{id}/hapus', [PknController::class,'hapus']);

Route::get('/nilai/bhs_inggris', [InggrisController::class, 'show']);
Route::post('/nilai/bhs_inggris/tambah', [InggrisController::class, 'store'])->name('input.inggris');
Route::post('/nilai/bhs_inggris/import_excel', [InggrisController::class, 'import']);
Route::get('/nilai/bhs_inggris/{id}/edit',[InggrisController::class,'edit']);
Route::post('/nilai/bhs_inggris/update/{id}',[InggrisController::class,'update']);
Route::get('/nilai/bhs_inggris/{id}/hapus', [InggrisController::class,'hapus']);

Route::get('/nilai/ipa', [IpaController::class, 'show']);
Route::post('/nilai/ipa/tambah', [IpaController::class, 'store'])->name('input.ipa');
Route::post('/nilai/ipa/import_excel', [IpaController::class, 'import']);
Route::get('/nilai/ipa/{id}/edit',[IpaController::class,'edit']);
Route::post('/nilai/ipa/update/{id}',[IpaController::class,'update']);
Route::get('/nilai/ipa/{id}/hapus', [IpaController::class,'hapus']);

Route::get('/nilai/ips', [IpsController::class, 'show']);
Route::post('/nilai/ips/tambah', [IpsController::class, 'store'])->name('input.ips');
Route::post('/nilai/ips/import_excel', [IpsController::class, 'import']);
Route::get('/nilai/ips/{id}/edit',[IpsController::class,'edit']);
Route::post('/nilai/ips/update/{id}',[IpsController::class,'update']);
Route::get('/nilai/ips/{id}/hapus', [IpsController::class,'hapus']);

Route::get('/nilai/pai', [PaiController::class, 'show']);
Route::post('/nilai/pai/tambah', [PaiController::class, 'store'])->name('input.pai');
Route::post('/nilai/pai/import_excel', [PaiController::class, 'import']);
Route::get('/nilai/pai/{id}/edit',[PaiController::class,'edit']);
Route::post('/nilai/pai/update/{id}',[PaiController::class,'update']);
Route::get('/nilai/pai/{id}/hapus', [PaiController::class,'hapus']);

Route::get('/nilai/pjok', [PjokController::class, 'show']);
Route::post('/nilai/pjok/tambah', [PjokController::class, 'store'])->name('input.pjok');
Route::post('/nilai/pjok/import_excel', [PjokController::class, 'import']);
Route::get('/nilai/pjok/{id}/edit',[PjokController::class,'edit']);
Route::post('/nilai/pjok/update/{id}',[PjokController::class,'update']);
Route::get('/nilai/pjok/{id}/hapus', [PjokController::class,'hapus']);

Route::get('/nilai/sbdp', [SbdpController::class, 'show']);
Route::post('/nilai/sbdp/tambah', [SbdpController::class, 'store'])->name('input.sbdp');
Route::post('/nilai/sbdp/import_excel', [SbdpController::class, 'import']);
Route::get('/nilai/sbdp/{id}/edit',[SbdpController::class,'edit']);
Route::post('/nilai/sbdp/update/{id}',[SbdpController::class,'update']);
Route::get('/nilai/sbdp/{id}/hapus', [SbdpController::class,'hapus']);

Route::get('/nilai/sunda', [SundaController::class, 'show']);
Route::post('/nilai/sunda/tambah', [SundaController::class, 'store'])->name('input.sunda');
Route::post('/nilai/sunda/import_excel', [SundaController::class, 'import']);
Route::get('/nilai/sunda/{id}/edit',[SundaController::class,'edit']);
Route::post('/nilai/sunda/update/{id}',[SundaController::class,'update']);
Route::get('/nilai/sunda/{id}/hapus', [SundaController::class,'hapus']);

Route::get('/nilai/tik', [TikController::class, 'show']);
Route::post('/nilai/tik/tambah', [TikController::class, 'store'])->name('input.tik');
Route::post('/nilai/tik/import_excel', [TikController::class, 'import']);
Route::get('/nilai/tik/{id}/edit',[TikController::class,'edit']);
Route::post('/nilai/tik/update/{id}',[TikController::class,'update']);
Route::get('/nilai/tik/{id}/hapus', [TikController::class,'hapus']);

Route::get('/profile', [ProfileController::class, 'show']);

// Module Archive
Route::get('/archive', [ArchiveController::class, 'show'])->name('index.data'); //nampilin data
Route::post('/archive', [ArchiveController::class, 'index'])->name('input.data'); //input data archive
Route::get('/archive/{id}/edit',[ArchiveController::class,'edit']);
Route::post('/archive/update/{id}',[ArchiveController::class,'update']);
Route::get('/archive/{id}/hapus', [ArchiveController::class,'hapus']);