<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class TechnicalReview extends Model
{
    use HasFactory;

    protected $fillable = [
        'route_id',
        'leaded_by',
        'club',
        'reviewed_at',
        'description',
        'detail',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    public function route(): BelongsTo
    {
        return $this->belongsTo(Route::class);
    }
}
