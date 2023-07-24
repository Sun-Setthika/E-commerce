<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_number',
        'subtotal',
        'total',
        'tax',
        'user_id',
        'customer_info_id',
        'shipping_id',
        'discount_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function orderDetails()
    {
        return $this->hasMany(OrderDetail::class, 'order_number', 'order_number');
    } // order_number (1) represent foreign key in the order details
      // order_number (1) represent local key in order 

    public function discount()
    {
        return $this->belongsTo(Discount::class);
    }

    // public function customerInfo()
    // {
    //     return $this->belongsTo(CustomerInfo::class);
    // }

    public function shippingMethod()
    {
        return $this->belongsTo(ShippingMethod::class);
    }
}
