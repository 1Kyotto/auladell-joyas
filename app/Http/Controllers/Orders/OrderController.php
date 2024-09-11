<?php

namespace App\Http\Controllers\Orders;

use Illuminate\Http\Request;

class OrderController
{
    

    public function orderStatus()
    {
        return view('orders.order-status');
    }
}
