<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('home');
});

Auth::routes();

Route::middleware(['auth'])->group(function () {
    Route::get('home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::prefix('card')->group(function () {
        Route::get('card-request', [App\Http\Controllers\FidelityCardController::class, 'request'])->name('card-request');
        Route::post('card-request-post', [App\Http\Controllers\FidelityCardController::class, 'requestPost'])->name('card-request-post');
        Route::get('card-validate', [App\Http\Controllers\FidelityCardController::class, 'validateUse'])->name('card-validate');
    });

    Route::prefix('fidelityplans')->group(function () {
        Route::get('/plans', [App\Http\Controllers\FidelityPlanController::class, 'plans'])->name('fidelityplans');
        Route::get('/create', [App\Http\Controllers\FidelityPlanController::class, 'create'])->name('fidelityplans-create');
        Route::post('/store', [App\Http\Controllers\FidelityPlanController::class, 'store'])->name('fidelityplans-store');
    });

    Route::prefix('restaurant')->group(function () {
        Route::get('/', [App\Http\Controllers\RestaurantController::class, 'restaurant'])->name('restaurants');
        Route::get('/create', [App\Http\Controllers\RestaurantController::class, 'create'])->name('restaurant-create');
        Route::post('/store', [App\Http\Controllers\RestaurantController::class, 'store'])->name('restaurant-store');
    });

    Route::prefix('api')->group(function () {
        Route::get('/_token', [App\Http\Controllers\Controller::class, '_token'])->name('_token');
    });
});
