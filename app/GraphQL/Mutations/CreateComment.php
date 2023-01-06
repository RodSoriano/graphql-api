<?php

namespace App\GraphQL\Mutations;

use App\Models\Comment;
use Illuminate\Database\Eloquent\Model;

final class CreateComment
{
    protected const MODEL_NAMESPACE = "App\\Models\\";

    public function __invoke(mixed $_, array $args): Model
    {
        $model = self::MODEL_NAMESPACE . $args['commentable_type'];

        $args['commentable_type'] = $model;

        return Comment::create($args);
    }
}
