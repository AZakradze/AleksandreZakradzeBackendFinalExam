<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function categories() {
        return $this->belongsToMany(Category::class, 'categories_products');
    }
    public function owner() {
        return $this->belongsTo(User::class);
    }
    public function likes() {
        return $this->hasMany(Like::class);
    }
    public function comments() {
        return $this->hasMany(Comment::class);
    }

    public function isLiked($productid) {
        $liked =Like::where('product_id', $productid)->where('user_id', auth()->user()->id)->first();
        if ($liked) {
            if ($liked->liked == 1) {
                return true;
            }else {
                return false;

            }
        } else {
            return false;
        }
    }
}
