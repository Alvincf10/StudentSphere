<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

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

    //event
    Route::get('management-event/event', [App\Http\Controllers\Admin\MasterData\EventController::class,'index'])->name('event');

    //location
    Route::get('management-event/location', [App\Http\Controllers\Admin\MasterData\LocationController::class,'index'])->name('location');
    Route::get('management-event/location/create', [App\Http\Controllers\Admin\MasterData\LocationController::class,'create'])->name('location.create');
    Route::post('management-event/location', [App\Http\Controllers\Admin\MasterData\LocationController::class,'store'])->name('location.store');
    Route::get('management-event/location/edit/{id}', [App\Http\Controllers\Admin\MasterData\LocationController::class,'edit'])->name('location.edit');
    Route::put('management-event/location/update/{id}', [App\Http\Controllers\Admin\MasterData\LocationController::class,'update'])->name('location.update');
    Route::delete('management-event/location/{id}', [App\Http\Controllers\Admin\MasterData\LocationController::class,'destroy'])->name('location.delete');

    //category
    Route::get('management-event/category', [App\Http\Controllers\Admin\MasterData\CategoryController::class,'index'])->name('category');


    //organizer
    Route::get('management-event/organizer', [App\Http\Controllers\Admin\MasterData\OrganizerController::class,'index'])->name('organizer');


    //master data
    Route::get('master-data/about-us', [App\Http\Controllers\Admin\MasterData\OrganizerController::class,'index'])->name('about-us');

});

