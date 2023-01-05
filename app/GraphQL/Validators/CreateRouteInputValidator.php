<?php

namespace App\GraphQL\Validators;

use Nuwave\Lighthouse\Validation\Validator;

final class CreateRouteInputValidator extends Validator
{
    public function rules(): array
    {
        return [
            'area_id' => ['required', 'int', 'min:1'],
            'name' => ['required', 'string', 'min:3', 'max:50'],
            'grade' => ['required', 'string', 'min:1'],
            'quick_draw_count' => ['required', 'int', 'min:1'],
            'length' => ['required', 'string', 'min:1'],
            'setters' => ['required', 'string', 'min:4', 'max:250'],
            'first_ascend' => ['required', 'string', 'min:4', 'max:50'],
            'bolted_at' => ['required', 'date'],
            'description' => ['required', 'string', 'min:3', 'max:250'],
            'detail' => ['required', 'json'],
        ];
    }
}
