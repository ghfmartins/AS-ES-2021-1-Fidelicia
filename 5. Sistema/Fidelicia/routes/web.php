<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('home');
});

Auth::routes();

Route::middleware(['auth'])->group(function () {
    Route::get('home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::prefix('api')->group(function () {
        Route::get('/_token', [App\Http\Controllers\Controller::class, '_token'])->name('_token');
    });
});
