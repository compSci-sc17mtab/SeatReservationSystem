<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookingsController;
use App\Http\Controllers\RoomsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\InstitutionController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CovidController;


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


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {return view('dashboard');})->name('dashboard');

Route::get('/', [DashboardController::class, 'show'])->name('dashboard')->middleware('auth');
Route::get('/dashboard', [DashboardController::class, 'show'])->name('dashboard')->middleware('auth');

Route::get('/institution', [InstitutionController::class, 'select'])->name('institution.select')->middleware('auth');
Route::post('/institution', [InstitutionController::class, 'save'])->name('institution.save')->middleware('auth');
Route::get('/institution/create', [InstitutionController::class, 'create'])->name('institution.create')->middleware('auth');
Route::post('/institution/create', [InstitutionController::class, 'store'])->name('institution.store')->middleware('auth');



Route::get('/bookings', [BookingsController::class, 'index'])->name('bookings.index')->middleware('auth');
Route::get('/bookings/create', [BookingsController::class,'create'])->name('bookings.create')->middleware('auth');
Route::get('/bookings/{id}', [BookingsController::class,'show'])->name('bookings.show')->middleware('auth');
Route::delete('/bookings/{id}', [BookingsController::class,'destroy'])->name('bookings.delete')->middleware('auth');

Route::get('/bookings/create/rooms', [BookingsController::class, 'selectRoom'])->name('bookings.selectRoom')->middleware('auth');
Route::post('/bookings/getAvailable', [BookingsController::class, 'getAvailable'])->name('bookings.getAvailable')->middleware('auth');
Route::post('/bookings/createBooking', [BookingsController::class, 'saveBooking'])->name('bookings.saveBooking')->middleware('auth');

Route::get('/rooms/create', [RoomsController::class,'create'])->name('rooms.create')->middleware('auth');
Route::post('rooms', [RoomsController::class,'saveRoom'])->name('rooms.saveRoom')->middleware('auth');


Route::get('/rooms/edit', [RoomsController::class,'edit'])->name('rooms.edit')->middleware('auth');
Route::get('/rooms/editseats', [RoomsController::class,'editSeats'])->name('rooms.editSeats')->middleware('auth');
Route::post('/rooms/editseats', [RoomsController::class,'saveSeats'])->name('rooms.editSeats')->middleware('auth');
Route::post('rooms/edit', [RoomsController::class,'saveEdit'])->name('rooms.saveEdit')->middleware('auth');
Route::get('/rooms/selectEdit', [RoomsController::class,'selectEdit'])->name('rooms.selectEdit')->middleware('auth');
Route::post('/rooms/saveCanvas', [RoomsController::class,'saveCanvas'])->name('rooms.saveCanvas')->middleware('auth');

//Route::delete('/rooms/edit/{seat_name}', [BookingsController::class,'destroy'])->name('rooms.workstationDelete')->middleware('auth');

Route::get('/rooms/{room_name}', [RoomsController::class,'show'])->name('rooms.show')->middleware('auth');
Route::delete('/rooms/{room_name}', [RoomsController::class,'destroy'])->name('rooms.delete')->middleware('auth');


Route::get('/trackAndTrace', [CovidController::class,'trackAndTrace'])->name('covid.trackAndTrace')->middleware('auth');
Route::post('/trackAndTrace', [CovidController::class,'returnContacts'])->name('covid.trackAndTrace')->middleware('auth');
