<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    /**
     * GET /admin — admin.dashboard
     *
     * P06: stats HARDCODE (CORE) — không đụng DB.
     * Từ P11+ sẽ thay bằng Category::count(), Product::count(), SUM(price*qty).
     */
    public function index()
    {
        $stats = [
            'categories'       => 3,
            'products'         => 8,
            'inventory_value'  => 41380000,
        ];

        return view('admin.dashboard', compact('stats'));
    }

    /**
     * GET /admin/about — admin.about
     */
    public function about()
    {
        return view('admin.about');
    }
}