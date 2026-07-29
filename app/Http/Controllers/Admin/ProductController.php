<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    /**
     * GET /admin/products — admin.products.index
     * P06: view tạm, chưa có CRUD (CRUD thật ở P12).
     */
    public function index()
    {
        return view('admin.products.index');
    }
}