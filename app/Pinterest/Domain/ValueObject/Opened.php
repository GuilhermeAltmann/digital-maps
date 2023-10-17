<?php

namespace App\Pinterest\Domain\ValueObject;

use DateTime;

class Opened extends OpeningHours
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
