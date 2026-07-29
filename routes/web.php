<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;

/*
|--------------------------------------------------------------------------
| Web Routes — Phiếu 06
|--------------------------------------------------------------------------
| Vòng đời: Browser -> public/index.php -> route khớp URI -> Controller -> View
|
| Quy ước: TẤT CẢ link trong menu/blade phải dùng route('admin.xxx')
| Cấm hardcode '/admin/...' rải trong view.
*/

Route::get('/', function () {
    return redirect()->route('admin.dashboard');
});

Route::prefix('admin')->name('admin.')->group(function () {
    // GET /admin -> admin.dashboard
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

    // GET /admin/categories -> admin.categories.index
    Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');

    // GET /admin/products -> admin.products.index
    Route::get('/products', [ProductController::class, 'index'])->name('products.index');

    // GET /admin/about -> admin.about
    Route::get('/about', [DashboardController::class, 'about'])->name('about');
});