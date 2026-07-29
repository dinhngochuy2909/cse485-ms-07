<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Trang chủ
Route::get('/', function () {
    return redirect()->route('admin.dashboard');
});

// Dashboard
Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->name('admin.dashboard');

// About
Route::get('/admin/about', function () {
    return view('admin.about');
})->name('admin.about');

// Categories
Route::get('/admin/categories', function () {
    return view('admin.categories.index');
})->name('admin.categories.index');

// Create Category
Route::get('/admin/categories/create', function () {
    return view('admin.categories.create');
})->name('admin.categories.create');

// Products
Route::get('/admin/products', function () {
    return view('admin.products.index');
})->name('admin.products.index');

// Create Product
Route::get('/admin/products/create', function () {
    return view('admin.products.create');
})->name('admin.products.create');

// Flash Demo
Route::get('/admin/flash-demo', function () {
    return redirect()
        ->route('admin.dashboard')
        ->with('success', 'Layout OK - san sang Migration');
})->name('admin.flash.demo');