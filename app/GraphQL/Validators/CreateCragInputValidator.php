<?php

namespace App\GraphQL\Validators;

use Nuwave\Lighthouse\Validation\Validator;

final class CreateCragInputValidator extends Validator
{
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'min:5', 'max:30'],
            'location' => ['required', 'string', 'min:5', 'max:100'],
            'route_count' => ['required', 'int', 'min:1'],
            'get_here' => ['required', 'string', 'min:5', 'max:250'],
            'description' => ['required', 'string', 'min:5', 'max:250'],
            'detail' => ['required', 'json'],
        ];
    }
}
