<?php

namespace App\GraphQL\Directives;

use Exception;
use Nuwave\Lighthouse\Schema\Directives\BaseDirective;
use Nuwave\Lighthouse\Support\Contracts\ArgDirective;
use Nuwave\Lighthouse\Support\Contracts\ArgTransformerDirective;

final class VulgarFilterDirective extends BaseDirective implements ArgDirective, ArgTransformerDirective
{
    public static function definition(): string
    {
        return /** @lang GraphQL */ <<<'GRAPHQL'
            """
            Filter curse words on text and return an exception if found
            """
            directive @vulgarFilter on ARGUMENT_DEFINITION | INPUT_FIELD_DEFINITION
            GRAPHQL;
    }

    /**
     * Apply transformations on the value of an argument given to a field.
     */
    public function transform(mixed $argumentValue): string
    {
        $bannedWords = __('filters.curse_words');

        $regex = "/$bannedWords/i";

        preg_match_all($regex, $argumentValue, $outputWords, flags: PREG_PATTERN_ORDER);

        $results = implode(', ', $outputWords[0]);

        if ($results) {
            throw new Exception("The word(s) '$results' can not be send.");
        }

        return $argumentValue;
    }
}
