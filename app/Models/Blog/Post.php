<?php

namespace App\Models\Blog;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'title',
        'slug',
        'excerpt',
        'content',
        'thumbnail',
        'author_id',
        'is_published',
        'published_at',
    ];

    protected function casts(): array
    {
        return [
            'published_at' => 'datetime:d.m.Y H:i:s',
            'is_published' => 'boolean',
        ];
    }

    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(PostCategory::class);
    }

    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(PostTag::class);
    }

    public function seo(): HasOne
    {
        return $this->hasOne(PostSeo::class);
    }

    public function viewStats(): HasMany
    {
        return $this->hasMany(PostViewStat::class);
    }
}
