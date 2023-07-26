<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Receipt extends Model
{
    use HasFactory;

    protected $fillable = [
        'cart_id',
        'date',
        'payment_method',
        'address',
        'total'
    ];

    public function cart(): BelongsTo{
        return $this->belongsTo(Cart::class);
    }
}
