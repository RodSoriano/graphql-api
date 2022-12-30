<?php

namespace App\GraphQL\Scalars;

use DateTime;
use Exception;
use GraphQL\Language\AST\Node;
use GraphQL\Type\Definition\ScalarType;

/**
 * Needs refactoring on finishing the whole file,
 * the methods of input from the user as well
 * that may need a better validation.
 */
final class Date extends ScalarType
{
    public function serialize(mixed $value): false|string
    {
        return date('Y/m/d', $value);
    }

    /**
     * Parses an externally provided value (query variable) to use as an input
     * @throws Exception
     */
    public function parseValue(mixed $value): false|string
    {
        $this->dateValidation($value);

        $timeFormat = strtotime($value);

        return date('Y:m:d:H:i:s', $timeFormat);
    }

    /**
     * Parses an externally provided literal value (hardcoded in GraphQL query) to use as an input.
     *
     * E.g.
     * {
     *   user(email: "user@example.com")
     * }
     */
    public function parseLiteral(Node $valueNode, ?array $variables = null): mixed
    {
        // TODO implement validation

        return $valueNode->value;
    }

    /**
     * @throws Exception
     */
    private function dateValidation(mixed $date): void
    {
        try {
            DateTime::createFromFormat('Y-m-d', $date);
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
}
