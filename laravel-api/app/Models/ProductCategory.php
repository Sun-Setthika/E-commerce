<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class ProductCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
    ];

    public $timestamps = false;

    public function product()
    {
        return $this->hasMany(Product::class);
    }

}