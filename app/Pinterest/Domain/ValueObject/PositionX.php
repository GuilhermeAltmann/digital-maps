<?php

namespace App\Pinterest\Domain\ValueObject;

use App\Shared\Domain\ValueObject\IntValueObject;

class PositionX extends IntValueObject
{
    public static function create(int $value): PositionX
    {
        return new self($value);
    }

    protected function setValue(int $value): void
    {
        $this->value = $value;
    }
}
