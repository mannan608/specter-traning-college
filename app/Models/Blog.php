<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Blog extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'short_description',
        'content',
        'featured_image',
        'author_id',
        'category_id',
        'meta_title',
        'meta_description',
        'meta_keywords',
        'status',
        'is_featured',
        'published_at',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($blog) {
            $blog->slug = Str::slug($blog->title);
        });
    }
}
