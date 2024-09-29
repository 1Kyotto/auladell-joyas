<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Products\Product;

class AdminController
{
    public function index()
    {
        return view('admin.index');
    }

    public function productManagment(Request $request, $category = null)
    {
        if($category)
        {
            $products = Product::where('category', $category)->get();
        }
        else {
            $products = product::all();
        }
        return view('admin.product', compact('products'));
    }
}
