<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class Route extends Model
{
    use HasFactory;

    protected $fillable = [
        'area_id',
        'name',
        'grade',
        'type',
        'quick_draw_count',
        'length',
        'setters',
        'first_ascend',
        'bolted_at',
        'description',
        'detail',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    public function area(): BelongsTo
    {
        return $this->belongsTo(Area::class);
    }

    public function technicalReviews(): HasMany
    {
        return $this->hasMany(TechnicalReview::class);
    }

    public function comments(): MorphMany
    {
        return $this->morphMany(Comment::class, 'commentable');
    }
}
