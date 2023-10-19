<?php

namespace Tests\Unit\Pinterest\Domain\ValueObject;

use App\Pinterest\Domain\ValueObject\Name;
use App\Shared\Domain\ValueObject\StringValueObject;
use PHPUnit\Framework\TestCase;

class NameTest extends TestCase
{
    public function test_should_return_opened(): void
    {
        $name = Name::create('name');
        $this->assertInstanceOf(Name::class, $name);
        $this->assertInstanceOf(StringValueObject::class, $name);
    }

    public function test_should_return_value(): void
    {
        $name = Name::create('name');
        $this->assertEquals('name', $name->value());
    }
}
