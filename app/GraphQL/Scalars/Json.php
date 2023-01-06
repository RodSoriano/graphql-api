<?php

namespace App\GraphQL\Scalars;

use GraphQL\Language\AST\Node;
use GraphQL\Type\Definition\ScalarType;

final class Json extends ScalarType
{
    public function serialize(mixed $value): mixed
    {
        $data = json_encode($value);

        return json_decode($data);
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
        $results = [];

        $jsonData = json_decode($valueNode, true);

        $jsonData = $jsonData['fields'];

        foreach ($jsonData as $data) {
            $key = $data['name']['value'];
            $value = $data['value']['value'];

            $results[$key] = $value;
        }

        return json_encode($results);
    }
}
