<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orther extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'user_id',
        'description',
        'image',
        'date',
        'address',
        'total',
        'payment_method'
    ];
}
