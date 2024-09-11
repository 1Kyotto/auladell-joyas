<?php

namespace App\Http\Controllers\Products;

class ProductController
{
    
    public function braceletsIndex()
    {
        return view('products.bracelets');
    }
    
    public function earringsIndex()
    {
        return view('products.earrings');
    }

    public function necklacesIndex()
    {
        return view('products.necklaces');
    }

    public function ringsIndex()
    {
        return view('products.rings');
    }
}