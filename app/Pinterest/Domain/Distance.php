<?php

namespace App\Pinterest\Domain;

class Distance
{
    public function __construct(private readonly int $value)
    {
    }

    public static function create(int $value): Distance
    {
        return new self($value);
    }

    public function value(): int
    {
        return $this->value;
    }
}
