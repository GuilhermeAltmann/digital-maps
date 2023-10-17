<?php

namespace App\Pinterest\Domain\ValueObject;

use App\Shared\Domain\ValueObject\IntValueObject;

class PositionY extends IntValueObject
{
    public static function create(int $value): PositionY
    {
        return new self($value);
    }

    protected function setValue(int $value): void
    {
        $this->value = $value;
    }
}
