<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Color;
use App\Models\User;
use App\Models\ProductSize;
use App\Models\Product;

class Cart extends Model
{
    use HasFactory;

    public $timestamps = true;

    protected $fillable = [
        'quantity',
        'status',
        'product_id',
        'product_size_id',
        'user_id',
        'color_id',
        'price',
        // Add other attributes as needed
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

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

}
