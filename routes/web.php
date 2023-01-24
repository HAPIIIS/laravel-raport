<?php

use App\Models\ArchiveData;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IpaController;
use App\Http\Controllers\IpsController;
use App\Http\Controllers\PaiController;
use App\Http\Controllers\PknController;
use App\Http\Controllers\TikController;
use App\Http\Controllers\ArabController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PjokController;
use App\Http\Controllers\SbdpController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HadisController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\NilaiController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\SundaController;
use App\Http\Controllers\HarianController;
use App\Http\Controllers\ArchiveController;
use App\Http\Controllers\InggrisController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TahfidzController;
use App\Http\Controllers\RedirectController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\MatematikaController;

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
    return view('landing');
});

Route::group(['middleware' => 'prevent-back-history'],function(){
	
    Route::group(['middleware' => 'guest'], function(){
        Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
        Route::post('/login', [LoginController::class, 'authenticate'])->name('proses_login');
    });

    Route::group(['middleware' => ['auth', 'cek_login:admin,siswa']], function () {
        Route::get('logout',[LoginController::class, 'logout'])->name('logout');
        Route::get('/redirect', [RedirectController::class, 'cek']);
        Route::get('/profile', [ProfileController::class, 'show']);

    });

    Route::group(['middleware' => ['auth', 'cek_login:admin']], function () {
        Route::get('/admin/dashboard', [AdminController::class, 'show'])->name('admin.dashboard');
        Route::get('/admin/home', [HomeController::class, 'index']);
        Route::get('/admin/user/{id}/hapus', [HomeController::class,'hapus']);
        Route::post('/admin/add_user/import_excel', [HomeController::class, 'import']);
        
        Route::get('/nilai/matematika', [MatematikaController::class, 'show'])->name('index.mtk');
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

        Route::get('/nilai/tahfidz', [TahfidzController::class, 'show']);
        Route::post('/nilai/tahfidz/tambah', [TahfidzController::class, 'store'])->name('input.tahfidz');
        Route::post('/nilai/tahfidz/import_excel', [TahfidzController::class, 'import']);
        Route::get('/nilai/tahfidz/{id}/edit',[TahfidzController::class,'edit']);
        Route::post('/nilai/tahfidz/update/{id}',[TahfidzController::class,'update']);
        Route::get('/nilai/tahfidz/{id}/hapus', [TahfidzController::class,'hapus']);

        Route::get('/nilai/hadis', [HadisController::class, 'show']);
        Route::post('/nilai/hadis/tambah', [HadisController::class, 'store'])->name('input.hadis');
        Route::post('/nilai/hadis/import_excel', [HadisController::class, 'import']);
        Route::get('/nilai/hadis/{id}/edit',[HadisController::class,'edit']);
        Route::post('/nilai/hadis/update/{id}',[HadisController::class,'update']);
        Route::get('/nilai/hadis/{id}/hapus', [HadisController::class,'hapus']);


        // Module Archive
        Route::get('/archive', [ArchiveController::class, 'show'])->name('index.data'); //nampilin data
        Route::post('/archive', [ArchiveController::class, 'index'])->name('input.data'); //input data archive
        Route::get('/archive/{id}/edit',[ArchiveController::class,'edit']);
        Route::post('/archive/update/{id}',[ArchiveController::class,'update']);
        Route::get('/archive/{id}/hapus', [ArchiveController::class,'hapus']);
    });

    Route::group(['middleware' => ['auth', 'cek_login:siswa']], function () {
        Route::get('/siswa/dashboard', [SiswaController::class, 'show'])->name('siswa.dashboard');
        Route::get('/nilai/siswa', [SiswaController::class, 'getData']);
    });


}); //prevent back history