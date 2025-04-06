<?php

use App\Livewire\Settings\Appearance;
use App\Livewire\Settings\Password;
use App\Livewire\Settings\Profile;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ActivityController;
use App\Models\Activity;

Route::get('/', [ActivityController::class, 'index'])->name('home');

// Route::get('/', function () {
//     $activities = Activity::with('category')->limit(9)->get();
//     return view('home', compact('activities'));
// });


// Route::view('dashboard', 'dashboard')
//     ->middleware(['auth', 'verified'])
//     ->name('dashboard');

// Route::middleware(['auth'])->group(function () {
//     Route::redirect('settings', 'settings/profile');

//     Route::get('settings/profile', Profile::class)->name('settings.profile');
//     Route::get('settings/password', Password::class)->name('settings.password');
//     Route::get('settings/appearance', Appearance::class)->name('settings.appearance');
// });

Route::resource('activities', ActivityController::class);


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');