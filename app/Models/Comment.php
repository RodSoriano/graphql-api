<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        'commentable_type',
        'commentable_id',
        'comment',
        'visible',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    public function commentable(): MorphTo
    {
        return $this->morphTo();
    }
}
