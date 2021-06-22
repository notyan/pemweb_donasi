<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\Admin\AdminUserController;
use App\Http\Controllers\SaranController;

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

Route::get('/mgrSaran', [SaranController::class, 'mgrSaran']);

require __DIR__.'/auth.php';
