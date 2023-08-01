<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Cart;
use App\Models\ProductDetail;
use App\Models\OrderDetail;

class Color extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
    ];
    public $timestamps = false;

    public function cart()
    {
        return $this->hasMany(Cart::class);
    }

    public function productDetail()
    {
        return $this->hasMany(ProductDetail::class);
    }

    public function orderDetail(){
        return $this->hasMany(OrderDetail::class);
    }
    
}
