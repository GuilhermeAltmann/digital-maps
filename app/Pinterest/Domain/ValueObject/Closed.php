<?php

namespace App\Pinterest\Domain\ValueObject;

use App\Shared\Domain\ValueObject\DateTimeValueObject;
use DateTime;

class Closed extends DateTimeValueObject
{
    public static function create(DateTime $value): Closed
    {
        return new self($value);
    }

    protected function setValue(DateTime $value): void
    {
        $this->value = $value;
    }
}
