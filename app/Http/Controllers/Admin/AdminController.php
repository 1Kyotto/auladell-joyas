<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

class AdminController
{
    public function index()
    {
        return view('admin.index');
    }

    public function productManagment()
    {
        return view('admin.product');
    }
}
