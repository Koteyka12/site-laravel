<?php

namespace App\Models\Blog;

use Illuminate\Database\Eloquent\Model;

class PostViewStat extends Model
{
    protected $fillable = [
        'post_id',
        'date',
        'views',
    ];

    protected $casts = [
        'date' => 'date',
    ];
}
