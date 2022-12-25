<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class Area extends Model
{
    use HasFactory;

    protected $fillable = [
        'crag_id',
        'name',
        'location',
        'route_count',
        'description',
        'detail',
    ];

    public function crag(): BelongsTo
    {
        return $this->belongsTo(Crag::class);
    }

    public function routes(): HasMany
    {
        return $this->hasMany(Route::class);
    }

    public function comments(): MorphMany
    {
        return $this->morphMany(Comment::class, 'commentable');
    }
}
