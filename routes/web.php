<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/categories', [DashboardController::class, 'categories'])->name('categories');
    Route::get('/products', [DashboardController::class, 'products'])->name('products');
    Route::get('/about', [DashboardController::class, 'about'])->name('about');
});