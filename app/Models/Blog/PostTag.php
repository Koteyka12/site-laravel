<?php

namespace App\Models\Blog;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class PostTag extends Model
{
    protected $fillable = [
        'title',
        'slug',
    ];

    protected static function booted(): void
    {
        static::saving(static function (self $tag): void {
            if (empty($tag->slug) && ! empty($tag->title)) {
                $tag->slug = Str::slug($tag->title);
            }
        });
    }
}
