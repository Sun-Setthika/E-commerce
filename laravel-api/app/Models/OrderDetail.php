<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Color;
use App\Models\Product;
use App\Models\Order;
use App\Models\ProductSize;

class OrderDetail extends Model
{
    public $timestamps = false;
    
    protected $fillable = [
        'quantity',
        'order_id',
        'product_id',
        'product_size_id',
        'color_id',
        'subtotal',
        // Add other attributes as needed
    ];


  
    public function order()
    {
        return $this->belongsTo(OrderDetail::class);
        // return $this->belongsTo(Order::class, 'order_number', 'order_number');
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

    public function productSizes()
    {
        return $this->hasMany(ProductSize::class);
    }

    // protected $table = 'order_details';
}
