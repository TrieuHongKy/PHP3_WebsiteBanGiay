<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'content',
        'category_id',
        'author_id',
        'date',
        'image'
    ];

//    public static function find($id)
//    : Model|Builder|null{
//        return Product::query()
//            ->whereKey($id)
//            ->join('user_infos', 'user_infos.user_id', '=', '')
//            ->first();
//    }
    public function category(): BelongsTo{
        return $this->belongsTo(Category::class);
    }
    public function author(): BelongsTo{
        return $this->belongsTo(User::class);
    }
}
