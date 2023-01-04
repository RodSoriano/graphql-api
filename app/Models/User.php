<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected const NAME = 'default_user';

    public static function getName(): string
    {
        return self::NAME;
    }
}
