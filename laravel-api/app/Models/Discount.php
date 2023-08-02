<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Order;

class Discount extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'code',
        'discount_percentage',
        // Add other attributes as needed
    ];

    public function order()
    {
        return $this->hasMany(order::class);
    }
}
