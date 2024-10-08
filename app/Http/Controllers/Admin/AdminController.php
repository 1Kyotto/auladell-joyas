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
        // Si se especifica una categoría, filtrar los productos
        if ($category) {
            $products = Product::where('category', $category)->get();
        } else {
            // Si no hay categoría, mostrar todos los productos
            $products = Product::all();
        }
        return view('admin.product', compact('products'));
    }
}
