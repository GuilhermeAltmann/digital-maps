<?php

namespace Tests\Unit\Pinterest\Domain\ValueObject;

use App\Pinterest\Domain\ValueObject\PositionX;
use App\Shared\Domain\ValueObject\IntValueObject;
use PHPUnit\Framework\TestCase;

class PositionXTest extends TestCase
{
    public function test_should_return_position_x(): void
    {
        $positionX = PositionX::create(2);
        $this->assertInstanceOf(PositionX::class,$positionX);
        $this->assertInstanceOf(IntValueObject::class,$positionX);
    }

    public function test_should_return_value(): void
    {
        $positionX = PositionX::create(2);
        $this->assertEquals(2, $positionX->value());
    }
}
