<?php

namespace App\GraphQL\Validators;

use Nuwave\Lighthouse\Validation\Validator;

final class CreateCragInputValidator extends Validator
{
    public function rules(): array
    {
        return [
            'name' => ['required', 'min:2', 'max:30'],
            'location' => ['required'],
            'route_count' => ['required'],
            'get_here' => ['required'],
            'description' => ['required'],
            'detail' => ['required'],
        ];
    }
}
