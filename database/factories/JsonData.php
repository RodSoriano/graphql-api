<?php

namespace Database\Factories;

trait JsonData
{
    private array $defaultArray = [
        'bees' => true,
        'helmet' => 'please',
        'loose_rock' => true,
    ];

    protected function createKeyValue(array $array = []): array
    {
        return !$array ? $this->defaultArray : $array;
    }
}
