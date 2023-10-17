<?php

namespace App\Pinterest\Domain\ValueObject;

use App\Shared\Domain\ValueObject\DateTimeValueObject;
use DateTime;

class Opened extends DateTimeValueObject
{
    public static function create(DateTime $value): Opened
    {
        return new self($value);
    }

    protected function setValue(DateTime $value): void
    {
        $this->value = $value;
    }
}
