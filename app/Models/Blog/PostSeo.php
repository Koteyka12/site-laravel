<?php

namespace App\Models\Blog;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PostSeo extends Model
{
    protected $fillable = [
        'post_id',
        'meta_title',
        'meta_description',
        'og_title',
        'og_description',
        'og_image',
        'canonical_url',
        'robots',
    ];

    public function post(): BelongsTo
    {
        return $this->belongsTo(Post::class);
    }
}
