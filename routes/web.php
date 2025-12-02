<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\CausesController;
use App\Http\Controllers\ContacController;
use App\Http\Controllers\DonateController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OurTeamController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('about', [AboutController::class, 'index'])->name('about');
Route::get('causes', [CausesController::class, 'index'])->name('causes');

// --- DONATION ROUTES ---
Route::get('donation', [DonateController::class, 'index'])->name('donate');

// Wajib login sebelum submit donasi
Route::post('donation/store', [DonateController::class, 'store'])
    ->middleware('auth')
    ->name('donate.store');

Route::get('/success', [DonateController::class, 'success'])->name('success');
// --- END DONATION ROUTES ---

Route::get('team', [OurTeamController::class, 'index'])->name('team');
Route::get('contact', [ContacController::class, 'index'])->name('contact');
Route::get('service', [ServiceController::class, 'index'])->name('service');

Route::view('learn', 'pages.learn')->name('learn');

Route::get('/register', [AuthController::class, 'registerPage'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

Route::get('/login', [AuthController::class, 'loginPage'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/dashboard', function() {
    return redirect()->route('home');
})->middleware('auth');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
    Route::post('/profile/update', [ProfileController::class, 'update'])->name('profile.update');
});

Route::delete('/profile/delete', [ProfileController::class, 'destroy'])->name('profile.delete');

Route::get('/donations/history', [DonateController::class, 'history'])
    ->middleware('auth')
    ->name('donate.history');

