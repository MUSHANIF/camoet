<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\jnsmotorController;
use App\Http\Controllers\motorController;
use App\Http\Controllers\profileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\TransaksiController;
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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('/');
Route::get('/maintenance', function () {
    return view('maintenance');
});

Route::get('/listmotor', [dashboardController::class, 'list'])->name('listmotor');
Route::resource('profile', profileController::class);
Route::get('/change/{id}', [profileController::class, 'change']);
Route::post('/update/{id}', [profileController::class, 'updatepw'])->name('updatepw');
Route::group(['middleware' => ['revalidate','auth']], function () {
    Route::group(['middleware' => ['admin']], function () {
        Route::get('/dashboardAdmin', [dashboardController::class, 'index'])->name('dashboardAdmin');
        Route::resource('jnsmotor', jnsmotorController::class);
        Route::resource('motor', motorController::class);
    });
    Route::group(['middleware' => ['superadmin']], function () {
        Route::get('/dashboardsuperadmin', [dashboardController::class, 'index'])->name('dashboardsuperadmin');
        Route::resource('dataadmin', adminController::class);
    });
    Route::group(['middleware' => ['user']], function () {
        Route::get('/dashboard', [dashboardController::class, 'index'])->name('dashboard');
        Route::get('/keranjang/{id}', [App\Http\Controllers\TransaksiController::class, 'keranjang'])->name('keranjang');
        Route::delete('/hapus/{id}', [App\Http\Controllers\TransaksiController::class, 'hapus'])->name('hapus');
        Route::post('/tambah/{id}', [App\Http\Controllers\TransaksiController::class, 'tambah'])->name('tambah');
        Route::get('/pembayaran/{id}', [App\Http\Controllers\TransaksiController::class, 'pembayaran'])->name('pembayaran');
        Route::get('/motoruser/{id}', [App\Http\Controllers\TransaksiController::class, 'motor'])->name('motoruser');
        Route::post('/kembalikan/{id}', [App\Http\Controllers\TransaksiController::class, 'balikin'])->name('kembalikan');
        Route::post('/bayar/{id}', [App\Http\Controllers\TransaksiController::class, 'bayar'])->name('bayar');
        Route::post('/validation', [App\Http\Controllers\validationController::class, 'index'])->name('validation');
    });
});
require __DIR__.'/auth.php';
