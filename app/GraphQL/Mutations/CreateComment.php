<?php

namespace App\GraphQL\Mutations;

use App\Models\Comment;
use Exception;
use Illuminate\Database\Eloquent\Model;

final class CreateComment
{
    private const MODEL_NAMESPACE = "App\\Models\\";

    public function __invoke(mixed $_, array $args): Model|Exception
    {
        $model = self::MODEL_NAMESPACE . $args['commentable_type'];

        $id = $args['commentable_id'];

        $this->modelExist($model, $id);

        $args['commentable_type'] = $model;

        return Comment::create($args);
    }

    private function modelExist(string $model, int $id): void
    {
        $modelInstance = new $model();

        $record = $modelInstance->find($id);

        if ($record === null) {
            throw new Exception("Place not found.");
        }
    }
}
