<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
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

    protected $hidden = [
        'created_at',
        'updated_at',
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

    public function scopeAreaRoutes(Builder $query): void
    {
        $query->join('routes', 'areas.id', '=', 'routes.area_id')
            ->select(
                'areas.id as area_id',
                'areas.name as area_name',
                'routes.id as route_id',
                'routes.name as route_name',
                'routes.grade',
                'routes.quick_draw_count as quick_draws',
                'routes.length',
                'routes.detail',
            );
    }
}
