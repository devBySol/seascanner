<?php

use App\Livewire\Settings\Appearance;
use App\Livewire\Settings\Password;
use App\Livewire\Settings\Profile;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Models\Activity;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\AdminBookingController;

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/', [HomeController::class, 'index'])->name('home');


Route::middleware(['auth'])->group(function () {
  Route::resource('bookings', BookingController::class);
  Route::get('/bookings', [BookingController::class, 'index'])->name('bookings.index');
  Route::get('/activities/{activity}/book', [BookingController::class, 'create'])->name('bookings.create');
  Route::post('/bookings', [BookingController::class, 'store'])->name('bookings.store');
});


// admin only
Route::middleware(['auth', 'can:isAdmin'])->prefix('admin')->name('admin.')->group(function () {
  Route::get('/bookings', [AdminBookingController::class, 'index'])->name('bookings.index');
  Route::patch('/bookings/{booking}/status', [AdminBookingController::class, 'updateStatus'])->name('bookings.updateStatus');
  Route::delete('/bookings/{booking}', [AdminBookingController::class, 'destroy'])->name('bookings.destroy');
});