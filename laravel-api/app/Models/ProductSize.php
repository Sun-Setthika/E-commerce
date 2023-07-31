<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Cart;

class ProductSize extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
    ];
    public $timestamps = false;

    public function cart()
    {
        return $this->belongsTo(Cart::class);
    }
}
