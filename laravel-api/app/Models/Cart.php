<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    public $timestamps = true;

    protected $fillable = [
        'product_id',
        'product_size_id',
        'quantity',
        'price',
        'color_id',
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
