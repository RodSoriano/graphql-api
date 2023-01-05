<?php

namespace App\GraphQL\Validators;

use Nuwave\Lighthouse\Validation\Validator;

final class UpdateRouteInputValidator extends Validator
{
    public function rules(): array
    {
        return [
            'area_id' => ['int', 'min:1'],
            'name' => ['string', 'min:3', 'max:50'],
            'grade' => ['string', 'min:1'],
            'quick_draw_count' => ['int', 'min:1'],
            'length' => ['string', 'min:1'],
            'setters' => ['string', 'min:4', 'max:250'],
            'first_ascend' => ['string', 'min:4', 'max:50'],
            'bolted_at' => ['date'],
            'description' => ['string', 'min:3', 'max:250'],
            'detail' => ['json'],
        ];
    }
}
