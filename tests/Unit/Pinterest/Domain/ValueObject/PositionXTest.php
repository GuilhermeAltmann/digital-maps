<?php

namespace Tests\Unit\Pinterest\Domain\ValueObject;

use App\Pinterest\Domain\ValueObject\PositionX;
use App\Shared\Domain\ValueObject\IntValueObject;
use PHPUnit\Framework\TestCase;

class PositionXTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_should_return_position_x(): void
    {
        $positionY = PositionX::create(2);
        $this->assertInstanceOf(PositionX::class,$positionY);
        $this->assertInstanceOf(IntValueObject::class,$positionY);
    }
}
