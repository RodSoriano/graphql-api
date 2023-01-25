<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class Crag extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'location',
        'route_count',
        'get_here',
        'description',
        'detail',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    public function areas(): HasMany
    {
        return $this->hasMany(Area::class);
    }

    public function comments(): MorphMany
    {
        return $this->morphMany(Comment::class, 'commentable');
    }

    public function scopeCragAreas(Builder $query): void
    {
        $query->join('areas', 'crags.id', '=', 'areas.crag_id')
            ->select(
                'crags.id as crag_id',
                'crags.name as crag_name',
                'areas.id as area_id',
                'areas.name as area_name',
                'areas.location as area_location',
                'areas.route_count',
                'areas.detail',
            );
    }
}
