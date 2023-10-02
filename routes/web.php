<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::group(['middleware' => ['auth']], function() {

    Route::get('/dashboard', [App\Http\Controllers\Admin\Dashboard\DashboardController::class,'index'])->name('dashboard');
    Route::get('/management-event', [App\Http\Controllers\Admin\Dashboard\DashboardController::class,'index'])->name('management-event');
    Route::get('management-event/event', [App\Http\Controllers\Admin\Dashboard\DashboardController::class,'index'])->name('event');
    Route::get('management-event/lokasi', [App\Http\Controllers\Admin\Dashboard\DashboardController::class,'index'])->name('lokasi');
    Route::get('management-event/kategori', [App\Http\Controllers\Admin\Dashboard\DashboardController::class,'index'])->name('kategori');
});

