<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'slug', 'content', 'category_id'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public static function countPostsByCategory($categoryId)
    {
        return self::where('category_id', $categoryId)->count();
    }

    public static function getSoftDeletedPosts()
    {
        return self::onlyTrashed()->get();
    }
}
