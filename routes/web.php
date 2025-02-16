<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\UserTransactionHistory;

Route::view('/', 'welcome');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__ . '/auth.php';

Route::get('/', \App\Livewire\Home::class)
    ->name('home');
Route::get('/about', \App\Livewire\About::class)
    ->name('about');
Route::get('/sewa', \App\Livewire\FormRental::class)
    ->middleware(['auth'])
    ->name('sewa');
// Route::get('/transaction/history', \App\Livewire\UserTransactionHistory::class)
//     ->name('transaction.history');

    // @livewire('user-transaction-history');

Route::middleware(['auth'])->group(function () {
    Route::get('/history', function () {
        return view('user.history');
    })->name('user.history');
});
// });