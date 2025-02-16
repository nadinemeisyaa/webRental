<?php

use App\Livewire\FormRental;
use Illuminate\Support\Facades\Route;
use App\Livewire\UserTransactionHistory;

Route::middleware(['auth'])->group(function () {
    Route::get('/profile', function () {
        return view('profile.show');
    })->name('profile');
});


require __DIR__ . '/auth.php';

Route::get('/', \App\Livewire\Home::class)
    ->name('home');
Route::get('/about', \App\Livewire\About::class)
    ->name('about');
Route::middleware(['auth'])->group(function () {
    Route::get('/history', UserTransactionHistory::class)->name('history');
    Route::get('/sewa', FormRental::class)->name('sewa');
});
