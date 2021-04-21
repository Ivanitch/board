<?php

use Illuminate\Support\Facades\Route;


Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/cabinet', [\App\Http\Controllers\Cabinet\HomeController::class, 'index'])->name('cabinet');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
