<?php

namespace App\Shared\Domain\ValueObject;

abstract class IntValueObject extends ValueObject
{
    protected int $value;

    public function __construct(int $value)
    {
        $this->setValue($value);
    }

    public function __toString()
    {
        return $this->value;
    }

    public function value(): int
    {
        return $this->value;
    }

    public function equals(ValueObject $vo): bool
    {
        return $this->value == serialize($vo);
    }

    public function jsonSerialize(): int
    {
        return $this->value();
    }

    abstract protected function setValue(int $value): void;
}
