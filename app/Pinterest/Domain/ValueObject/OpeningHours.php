<?php

namespace App\Pinterest\Domain\ValueObject;

use App\Shared\Domain\ValueObject\DateTimeValueObject;

abstract class OpeningHours extends DateTimeValueObject
{
    final public const DEFAULT_FORMAT = 'H:i';

    public function defaultFormat(): string
    {
        return $this->value()->format(self::DEFAULT_FORMAT);
    }
}
