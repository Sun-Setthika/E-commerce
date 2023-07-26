<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'image',
        'image2',
        'image3',
        'image4',
        "category_id"
    ];

    public function productCategory()
    {
        return $this->belongsTo(ProductCategory::class, 'category_id');
    }

    public function cart()
    {
        return $this->hasMany(Cart::class);
    }

    public function productDetail()
    {
        return $this->hasMany(ProductDetail::class);
    }

    public function orderDetail()
    {
        return $this->hasMany(OrderDetail::class);
    }
    
}
