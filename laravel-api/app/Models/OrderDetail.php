<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    use HasFactory;

    protected $gaurded = [];

    public function order()
    {
        return $this->belongsTo(Order::class, 'order_number', 'order_number');
    } //order_number(1) is the foreign key in the order_details
      //order_number(2) is the local key in orders

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function color()
    {
        return $this->belongsTo(Color::class);
    }
}
