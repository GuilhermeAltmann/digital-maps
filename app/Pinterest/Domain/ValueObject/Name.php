<?php

namespace App\Pinterest\Domain\ValueObject;

use App\Shared\Domain\ValueObject\StringValueObject;

class Name extends StringValueObject
{
    public static function create(string $value): Name
    {
        return new self($value);
    }

    protected function setValue(string $value): void
    {
        $this->value = $value;
    }
}
