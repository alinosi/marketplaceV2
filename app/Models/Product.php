<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded = [
        'product_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'user_id');
    } 

    public function category()
    {
        return $this->belongsTo(Category::class, 'categories_id', 'categories_id');
    }
}
