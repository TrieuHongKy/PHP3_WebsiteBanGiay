<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'name',
        'quantity',
        'slug',
        'image',
        'view',
        'description',
        'price',
    ];

    public function category(): BelongsTo{
        return $this->belongsTo(ProductCategory::class);
    }
    public function user(): BelongsTo{
        return $this->belongsTo(User::class);
    }

    public function cart(): BelongsTo{
        return $this->belongsTo(Cart::class);
    }
}
