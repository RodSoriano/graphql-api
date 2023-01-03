<?php

namespace App\GraphQL\Scalars;

use GraphQL\Language\AST\Node;
use GraphQL\Type\Definition\ScalarType;

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
    public function parseLiteral(Node $valueNode, ?array $variables = null): false|string
    {
        $keys = [];
        $values = [];

        $jsonData = json_decode($valueNode, true);

        $jsonData = $jsonData['fields'];

        foreach ($jsonData as $data) {
            $keys[] = $data['name']['value'];

            $values[] = $data['value']['value'];
        }

        $result = array_combine($keys, $values);

        return json_encode($result);
    }
}
