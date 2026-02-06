<?php

namespace App\Models\Blog;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use MoonShine\Laravel\Fields\Relationships\HasMany;

class PostCategory extends Model
{
    protected $fillable = [
        'title',
        'category_id',
        'slug',
        'description',
        'sorting',
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(self::class, 'category_id');
    }

    public function parent(): BelongsTo
    {
        return $this->belongsTo(self::class, 'category_id');
    }

    public function children(): HasMany
    {
        return $this->hasMany(self::class, 'category_id');
    }
}
