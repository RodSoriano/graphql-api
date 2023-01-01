<?php

namespace App\GraphQL\Scalars;

use GraphQL\Language\AST\Node;
use GraphQL\Type\Definition\ScalarType;
use JsonException;

/**
 * Needs refactoring on finishing the whole file,
 * make a better json validator and finish the
 * parseLiteral method.
 */
final class Json extends ScalarType
{
    public function serialize(mixed $value): mixed
    {
        return json_decode($value);
    }

    /**
     * Parses an externally provided value (query variable) to use as an input
     */
    public function parseValue(mixed $value): false|string
    {
        return json_encode($value);
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

        return json_encode($valueNode->value);
    }

    private function validateJson(mixed $data): void
    {
        try {
            json_decode($data, flags: JSON_THROW_ON_ERROR);
        } catch (JsonException $e) {
            echo $e->getMessage();
        }
    }
}
