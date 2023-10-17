<?php

namespace App\Pinterest\Domain\ValueObject;

use DateTime;

class Closed extends OpeningHours
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
