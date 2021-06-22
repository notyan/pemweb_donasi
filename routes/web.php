<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\Admin\AdminUserController;
use App\Http\Controllers\SaranController;
use App\Http\Controllers\RelawanProgramController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::prefix('admin')->middleware(['admin'])->group(static function () {
    Route::resource('superuser', AdminUserController::class);
});



Route::get('/saran', [SaranController::class, 'saran']);
Route::post('/createSaran', [SaranController::class, 'createSaran']);
Route::get('/refreshcaptcha', [SaranController::class, 'refreshCaptcha']);

Route::prefix('admin')->middleware(['admin'])->group(static function () {
    Route::get('/mgrSaran', [SaranController::class, 'mgrSaran']);
});
Route::prefix('admin')->middleware(['admin'])->group(static function () {
    Route::get('/mgrSaran/{id}', [SaranController::class, 'delSaran']);
});

Route::prefix('relawan')->middleware(['auth', 'relawan'])->group(static function() {
    Route::get('/verifikasi', [RelawanController::class, 'verification'])->name('relawan.verif');
    Route::post('/verifikasi', [RelawanController::class, 'verify']);
    Route::prefix('program')->middleware(['verifiedrelawan'])->group(static function () {
        Route::get('/', [RelawanProgramController::class, 'index'])->name('relawan.program.index');
        Route::get('/buat', [RelawanProgramController::class, 'create'])->name('relawan.program.buat');
        Route::post('/buat', [RelawanProgramController::class, 'store']);
        Route::get('/fundraiser', [RelawanProgramController::class, 'regFundraiser'])->name('relawan.program.fundraiser');
        Route::post('/fundraiser/{id}', [RelawanProgramController::class, 'fundraiser'])->name('daftar-fundraiser');
        Route::get('/buat-berita/{id}', [RelawanProgramBeritaController::class, 'create'])->name('relawan.program.berita.buat');
        Route::post('/buat-berita/{id}', [RelawanProgramBeritaController::class, 'store']);
        Route::get('/{id}', [RelawanProgramController::class, 'show'])->name('relawan.program.detail');
        Route::get('/{id}/edit', [RelawanProgramController::class, 'edit'])->name('relawan.program.edit');
        route::put('/{id}/edit', [RelawanProgramController::class, 'update']);
        Route::delete('/{id}', [RelawanProgramController::class, 'destroy'])->name('relawan.program.hapus');
    });
    Route::prefix('berita')->group(function () {
        Route::get('/{id}', [RelawanProgramBeritaController::class, 'edit'])->name('relawan.program.berita.edit');
        Route::put('/{id}', [RelawanProgramBeritaController::class, 'update']);
        Route::delete('{id}', [RelawanProgramBeritaController::class, 'destroy']);
    });
});

Route::prefix('program')->group(function () {
    Route::get('/berita/{id}', [ProgramController::class, 'showBerita']);
});

Route::get('/relawan/daftar', [RelawanController::class, 'create']
)->middleware(['auth'])->name('relawan.reg');
Route::post('/relawan/daftar', [RelawanController::class, 'store']
)->middleware(['auth']);

require __DIR__.'/auth.php';

