<?php

namespace App\Models\Products;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Customizations\Customization;
use App\Models\Carts\Cart;
use App\Models\Carts\CartProduct;
use App\Models\Materials\Material;
use App\Models\Orders\Order;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'base_price'];

    public function customizations()
    {
        return $this->belongsToMany(Customization::class);
    }

    public function materials()
    {
        return $this->belongsToMany(Material::class)->withPivot('quantity_needed');
        //->withTimestamps();
    }

    public function orders()
    {
        return $this->belongsToMany(Order::class)->withPivot('quantity', 'unit_price', 'total_price');
        //->withTimestamps();
    }

    public function carts()
    {
        return $this->belongsToMany(Cart::class)->using(CartProduct::class)->withPivot('quantity', 'price');
                    //->withTimestamps();
    }
}
