<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $stats = [
            'categories' => 3,
            'products' => 8,
            'inventory_value' => 41380000,
        ];

        return view('admin.dashboard', compact('stats'));
    }

    public function categories()
    {
        return view('admin.categories');
    }

    public function products()
    {
        return view('admin.products');
    }

    public function about()
    {
        return view('admin.about');
    }
}