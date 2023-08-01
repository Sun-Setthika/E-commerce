<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerInfo extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'address',
        'phone_number',
        'country',
        'state',
        'zip',
        
        // Add other attributes as needed
    ];
}
