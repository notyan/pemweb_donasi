<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProgramController;

use App\Http\Controllers\Admin\AdminManajemenController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AdminUserController;
use App\Http\Controllers\Admin\RefAgamaController;
use App\Http\Controllers\Admin\RefProfesiController;
use App\Http\Controllers\Admin\RefVendorSavingController;
use App\Http\Controllers\Admin\AdminKontenController;

use App\Http\Controllers\BlogController;
use App\Http\Controllers\SaranController;
use App\Http\Controllers\Relawan\RelawanProgramController;
use App\Http\Controllers\Relawan\RelawanProgramBeritaController;
use App\Http\Controllers\Relawan\RelawanController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', function () {
    return view('about');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::prefix('admin')->middleware(['admin'])->group(static function () {
    Route::resource('superuser', AdminUserController::class);
    Route::get('/', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('/mgrWilayah', [AdminManajemenController::class, 'index']);
        Route::post('/mgrWilayah/addProv', [AdminManajemenController::class, 'addProvinsi']);
        Route::post('/mgrWilayah/addKab', [AdminManajemenController::class, 'addKabupaten']);
        Route::post('/mgrWilayah/addKec', [AdminManajemenController::class, 'addKecamatan']);
        Route::post('/mgrWilayah/addKel', [AdminManajemenController::class, 'addKelurahan']);
    Route::get('/mgrRekening', [AdminManajemenController::class, 'mgrRekening']);
        Route::post('/mgrRekening/add', [AdminManajemenController::class, 'addRekening']);   
    Route::get('/mgrAgama', [RefAgamaController::class, 'index']);
        Route::post('/mgrAgama/add', [RefAgamaController::class, 'addAgama']);
        Route::get('/mgrAgama/{id}', [RefAgamaController::class, 'delAgama']);
    Route::get('/mgrProfesi', [RefProfesiController::class, 'index']);
        Route::post('/mgrProfesi/add', [RefProfesiController::class, 'addProfesi']);
    Route::get('/mgrVendor', [RefVendorSavingController::class, 'index']);
        Route::post('/mgrVendor/add', [RefVendorSavingController::class, 'addVendor']);
    Route::get('/mgrSaran', [SaranController::class, 'mgrSaran']);
        Route::get('/mgrSaran/{id}', [SaranController::class, 'delSaran']);
    Route::prefix('konten')->group(function () {
        Route::get('/', [AdminKontenController::class, 'index'])->name('admin.konten.index');
        Route::get('/buat', [AdminKontenController::class, 'create'])->name('admin.konten.buat');
        Route::post('/buat', [AdminKontenController::class, 'store']);
        Route::get('/{id}/edit', [AdminKontenController::class, 'edit'])->name('admin.konten.edit');
        Route::put('/{id}/edit', [AdminKontenController::class, 'update']);
        Route::delete('/{id}', [AdminKontenController::class, 'delete'])->name('admin.konten.hapus');
    });
});

Route::get('/saran', [SaranController::class, 'saran']);
Route::post('/createSaran', [SaranController::class, 'createSaran']);
Route::get('/refreshcaptcha', [SaranController::class, 'refreshCaptcha']);


Route::prefix('relawan')->middleware(['auth', 'relawan'])->group(static function() {
    Route::get('/', [RelawanController::class, 'dashboard'])->name('relawan.dashboard');
    Route::get('/verifikasi', [RelawanController::class, 'verification'])->name('relawan.verif');
    Route::post('/verifikasi', [RelawanController::class, 'verify']);
    Route::prefix('program')->middleware(['verifiedrelawan'])->group(static function () {
        Route::get('/', [RelawanProgramController::class, 'index'])->name('relawan.program.index');
        Route::get('/buat', [RelawanProgramController::class, 'create'])->name('relawan.program.buat');
        Route::post('/buat', [RelawanProgramController::class, 'store']);
        Route::get('/all', [RelawanProgramController::class, 'regFundraiser'])->name('relawan.program.list');
        Route::post('/fundraiser/{id}', [RelawanProgramController::class, 'fundraiser'])->name('daftar-fundraiser');
        Route::get('/buat-berita/{id}', [RelawanProgramBeritaController::class, 'create'])->name('relawan.program.berita.buat');
        Route::post('/buat-berita/{id}', [RelawanProgramBeritaController::class, 'store']);
        Route::get('/{id}', [RelawanProgramController::class, 'show'])->name('relawan.program.detail');
        Route::get('/{id}/edit', [RelawanProgramController::class, 'edit'])->name('relawan.program.edit');
        route::put('/{id}/edit', [RelawanProgramController::class, 'update']);
        Route::delete('/{id}', [RelawanProgramController::class, 'destroy'])->name('relawan.program.hapus');
    });
    Route::prefix('berita')->middleware(['verifiedrelawan'])->group(function () {
        Route::get('/{id}', [RelawanProgramBeritaController::class, 'edit'])->name('relawan.program.berita.edit');
        Route::put('/{id}', [RelawanProgramBeritaController::class, 'update']);
        Route::delete('/{id}', [RelawanProgramBeritaController::class, 'destroy']);
    });
    Route::prefix('fundraiser')->group(function () {
        Route::get('/', [RelawanProgramController::class, 'fundraiserProgram'])->name('relawan.fundraiser');
        Route::get('/donatur/{id}', [RelawanProgramController::class, 'donatur'])->name('relawan.donatur');
        Route::put('/donatur/{id}', [RelawanProgramController::class, 'confirmDonation']);
        Route::get('/{id}', [RelawanProgramController::class, 'donaturProgram'])->name('relawan.program.donatur');
    });
});

Route::prefix('program')->group(function () {
    Route::get('/berita', [ProgramController::class, 'indexBerita'])->name('berita');
    Route::get('/berita/{id}', [ProgramController::class, 'showBerita'])->name('berita.baca');
    Route::get('/donasi/{id}', [ProgramController::class, 'regDonatur'])->name('program.donasi');
    Route::post('/donasi/{id}', [ProgramController::class, 'donate']);
});

Route::prefix('blog')->group(function () {
    Route::get('/', [BlogController::class, 'index'])->name('blog');
    Route::get('/{id}', [BlogController::class, 'show'])->name('blog.baca');
});

Route::get('/relawan/daftar', [RelawanController::class, 'create'])->middleware(['auth'])->name('relawan.reg');

Route::post('/relawan/daftar', [RelawanController::class, 'store'])->middleware(['auth']);

require __DIR__.'/auth.php';

