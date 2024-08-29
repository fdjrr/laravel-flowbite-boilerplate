<?php

use Illuminate\Support\Facades\Route;

Route::get('/', \App\Livewire\Dashboard::class)->name('dashboard');

Route::prefix('auth')->group(function () {
    Route::get('login', \App\Livewire\Auth\Login::class)->name('login');
});
