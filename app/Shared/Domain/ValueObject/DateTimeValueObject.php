<?php

namespace App\Shared\Domain\ValueObject;

use DateTime;

abstract class DateTimeValueObject extends ValueObject
{
    protected DateTime $value;

    public function __construct(DateTime $value)
    {
        $this->setValue($value);
    }

    public function __toString()
    {
        return $this->value;
    }

    public function value(): DateTime
    {
        return $this->value;
    }

    public function equals(ValueObject $vo): bool
    {
        return $this->value == serialize($vo);
    }

    public function jsonSerialize(): DateTime
    {
        return $this->value();
    }

    abstract protected function setValue(DateTime $value): void;
}
