<?php

namespace App\Shared\Domain\ValueObject;

abstract class StringValueObject extends ValueObject
{
    protected string $value;

    public function __construct(string $value)
    {
        $this->setValue($value);
    }

    public function __toString()
    {
        return $this->value;
    }

    public function value(): string
    {
        return $this->value;
    }

    public function equals(ValueObject $vo): bool
    {
        return $this->value == serialize($vo);
    }

    public function jsonSerialize(): string
    {
        return $this->value();
    }

    abstract protected function setValue(string $value): void;
}
