<?php

namespace App\Pinterest\Domain;

class Distance
{
    public function __construct(private readonly int $value)
    {
    }

    public function value(): int
    {
        return $this->value;
    }
}
