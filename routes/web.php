<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dashboardController;
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
Route::group(['middleware' => ['revalidate','auth']], function () {
    Route::group(['middleware' => ['admin']], function () {
        Route::get('/dashboardAdmin', [dashboardController::class, 'index'])->name('dashboardAdmin');
    });
    Route::group(['middleware' => ['superadmin']], function () {
        Route::get('/dashboardsuperadmin', [dashboardController::class, 'index'])->name('dashboardsuperadmin');
    });
    Route::group(['middleware' => ['user']], function () {
        Route::get('/dashboard', [dashboardController::class, 'index'])->name('dashboard');
    });
});
require __DIR__.'/auth.php';
