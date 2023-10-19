<?php

namespace Tests\Unit\Pinterest\Domain\ValueObject;

use App\Pinterest\Domain\ValueObject\PositionY;
use App\Shared\Domain\ValueObject\IntValueObject;
use PHPUnit\Framework\TestCase;

class PositionYTest extends TestCase
{
    public function test_should_return_position_y(): void
    {
        $positionY = PositionY::create(2);
        $this->assertInstanceOf(PositionY::class,$positionY);
        $this->assertInstanceOf(IntValueObject::class,$positionY);
    }

    public function test_should_return_value(): void
    {
        $positionY = PositionY::create(2);
        $this->assertEquals(2, $positionY->value());
    }
}
