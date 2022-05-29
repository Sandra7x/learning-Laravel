<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        'author_name',
        'body',
        // 'post_id',
        'commentable_id',
        "commentable_type",
    ];

    // public function post(): BelongsTo
    // {
    //     return $this->belongsTo(Post::class);
       
    // }

    public function commentable(): MorphTo
    {
        return $this->morphTo();
    }
}
