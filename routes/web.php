<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Controllers\Admin\Dashboard\DashboardController;
use App\Http\Controllers\Front\FrontOfficeController;

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

Auth::routes();

Route::group(['middleware' => ['auth']], function() {

    Route::get('/dashboard', [DashboardController::class,'index'])->name('dashboard');

    //event
    Route::get('management-event/event', [App\Http\Controllers\Admin\MasterData\EventController::class,'index'])->name('event');
    Route::get('management-event/event/create', [App\Http\Controllers\Admin\MasterData\EventController::class,'create'])->name('event.create');
    Route::post('management-event/event', [App\Http\Controllers\Admin\MasterData\EventController::class,'store'])->name('event.store');
    Route::get('management-event/event/edit/{id}', [App\Http\Controllers\Admin\MasterData\EventController::class,'edit'])->name('event.edit');
    Route::put('management-event/event/update/{id}', [App\Http\Controllers\Admin\MasterData\EventController::class,'update'])->name('event.update');
    Route::delete('management-event/event/{id}', [App\Http\Controllers\Admin\MasterData\EventController::class,'destroy'])->name('event.delete');

    //location
    Route::get('management-event/location', [App\Http\Controllers\Admin\MasterData\LocationController::class,'index'])->name('location');
    Route::get('management-event/location/create', [App\Http\Controllers\Admin\MasterData\LocationController::class,'create'])->name('location.create');
    Route::post('management-event/location', [App\Http\Controllers\Admin\MasterData\LocationController::class,'store'])->name('location.store');
    Route::get('management-event/location/edit/{id}', [App\Http\Controllers\Admin\MasterData\LocationController::class,'edit'])->name('location.edit');
    Route::put('management-event/location/update/{id}', [App\Http\Controllers\Admin\MasterData\LocationController::class,'update'])->name('location.update');
    Route::delete('management-event/location/{id}', [App\Http\Controllers\Admin\MasterData\LocationController::class,'destroy'])->name('location.delete');

    //category
    Route::get('management-event/category', [App\Http\Controllers\Admin\MasterData\CategoryController::class,'index'])->name('category');
    Route::get('management-event/category/create', [App\Http\Controllers\Admin\MasterData\categoryController::class,'create'])->name('category.create');
    Route::post('management-event/category', [App\Http\Controllers\Admin\MasterData\categoryController::class,'store'])->name('category.store');
    Route::get('management-event/category/edit/{id}', [App\Http\Controllers\Admin\MasterData\categoryController::class,'edit'])->name('category.edit');
    Route::put('management-event/category/update/{id}', [App\Http\Controllers\Admin\MasterData\categoryController::class,'update'])->name('category.update');
    Route::delete('management-event/category/{id}', [App\Http\Controllers\Admin\MasterData\categoryController::class,'destroy'])->name('category.delete');


    //organizer
    Route::get('management-event/organizer', [App\Http\Controllers\Admin\MasterData\OrganizerController::class,'index'])->name('organizer');
    Route::get('management-event/organizer/create', [App\Http\Controllers\Admin\MasterData\OrganizerController::class,'create'])->name('organizer.create');
    Route::post('management-event/organizer', [App\Http\Controllers\Admin\MasterData\OrganizerController::class,'store'])->name('organizer.store');
    Route::get('management-event/organizer/edit/{id}', [App\Http\Controllers\Admin\MasterData\OrganizerController::class,'edit'])->name('organizer.edit');
    Route::put('management-event/organizer/update/{id}', [App\Http\Controllers\Admin\MasterData\OrganizerController::class,'update'])->name('organizer.update');
    Route::delete('management-event/organizer/{id}', [App\Http\Controllers\Admin\MasterData\OrganizerController::class,'destroy'])->name('organizer.delete');

    //master data
    Route::get('master-data/aboutus', [App\Http\Controllers\Admin\MasterData\AboutUsController::class,'index'])->name('aboutus');
    Route::post('master-data/aboutus', [App\Http\Controllers\Admin\MasterData\AboutUsController::class,'CreateOrEdit'])->name('aboutus.create');
    Route::post('master-data/aboutus/{id}', [App\Http\Controllers\Admin\MasterData\AboutUsController::class,'CreateOrEdit'])->name('aboutus.update');
    Route::get('master-data/aboutus/{id}', [App\Http\Controllers\Admin\MasterData\AboutUsController::class,'index'])->name('aboutus.edit');
});


    Route::get('/', [FrontOfficeController::class,'index'])->name('frontOffice');
    Route::get('/about-us', [FrontOfficeController::class,'aboutUsFront'])->name('aboutUsFront');

    //event
    Route::get('/event', [FrontOfficeController::class,'allEvent'])->name('eventFront');
    Route::get('/event/event-previous', [FrontOfficeController::class,'eventPrevious'])->name('eventPrevious');
    Route::post('/event/filter', [FrontOfficeController::class,'filterEvent'])->name('eventFront.filter');
    Route::get('/event/event-detail/{id}', [FrontOfficeController::class,'detailEvent'])->name('event.detail');
    Route::post('/event/event-detail/{id}', [FrontOfficeController::class,'createTicket'])->name('event.createTicket');
    Route::get('/event/event-detail/{id}/purchase/', [FrontOfficeController::class, 'purchase'])->name('event.purchase');
    Route::post('/event/event-detail/{id}/purchase', [FrontOfficeController::class,'changePaymentStatus'])->name('event.purchase.changeStatus');
    Route::get('/event/event-detail/{id}/purchase/payment-detail', [FrontOfficeController::class,'paymentDetail'])->name('event.paymentDetail');

    //check transaction
    Route::get('/check-t ransaction', [FrontOfficeController::class,'transaction'])->name('transaction');
    Route::post('/check-transaction',[FrontOfficeController::class,'searchTransaction'])->name('checkTransaction');
  