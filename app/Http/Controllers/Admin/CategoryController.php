<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    /**
     * GET /admin/categories — admin.categories.index
     * P06: view tạm, chưa có CRUD (CRUD thật ở P12).
     */
    public function index()
    {
        return view('admin.categories.index');
    }
}