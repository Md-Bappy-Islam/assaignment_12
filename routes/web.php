<?php

use App\Http\Controllers\BusController;
use App\Http\Controllers\LineController;
use App\Http\Controllers\SeatController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\TripController;
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




Route::get('/', function () {return view('pages.home');})->name('home');

Route::group(['prefix'=>'admin/dashboard'], function(){
    Route::get('add_trip', [TripController::class,'create'])->name('trip.add');
    Route::post('add_trip', [TripController::class,'store']);
    Route::get('add_bus', [BusController::class,'create'])->name('bus.add');
    Route::post('add_bus', [BusController::class,'store']);
    Route::get('add_line', [LineController::class,'create'])->name('line.add');
    Route::post('add_line', [LineController::class,'store']);
    Route::get('add_seat', [SeatController::class,'create'])->name('seat.add');
    Route::post('add_seat', [SeatController::class,'store']);
});

route::group(['prefix'=>'user/dashboard'],function(){
    Route::get('purchase', [TicketController::class,'select'])->name('purchase');
    Route::post('purchase', [TicketController::class,'useBusId']);
    Route::get('purchase/ticket', [TicketController::class,'useBusId'])->name('purchase.ticket');
    Route::post('purchase/ticket', [TicketController::class,'store']);
});





// Route::get('/q', [userController::class,'userQuery']);

// Route::get('/g', [userController::class,'groupQuery']);


