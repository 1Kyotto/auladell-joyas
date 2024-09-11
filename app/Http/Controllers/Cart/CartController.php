<?php

namespace App\Http\Controllers\Cart;

use Illuminate\Http\Request;

class CartController
{
    public function index()
    {
        return view('cart.index');
    }
}
