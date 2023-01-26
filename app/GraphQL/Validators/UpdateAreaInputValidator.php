<?php

namespace App\GraphQL\Validators;

use Nuwave\Lighthouse\Validation\Validator;

final class UpdateAreaInputValidator extends Validator
{
    public function rules(): array
    {
        return [
            'name' => ['string', 'min:5', 'max:30'],
            'location' => ['string', 'min:5', 'max:100'],
            'route_count' => ['int', 'min:1'],
            'description' => ['string', 'min:5', 'max:250'],
            'detail' => ['json'],
        ];
    }
}
