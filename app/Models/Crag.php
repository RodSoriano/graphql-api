<?php

namespace App\Models;

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

    public function areas(): HasMany
    {
        return $this->hasMany(Area::class);
    }

    public function comments(): MorphMany
    {
        return $this->morphMany(Comment::class, 'commentable');
    }
}
