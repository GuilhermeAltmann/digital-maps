<?php

namespace Unit\Pinterest\Application\Calculator;

use App\Pinterest\Application\Calculator\DistanceCalculator;
use App\Pinterest\Domain\Distance;
use App\Pinterest\Domain\ValueObject\PositionX;
use App\Pinterest\Domain\ValueObject\PositionY;
use Tests\TestCase;

class DistanceCalculatorTest extends TestCase
{
    public function test_should_return_distance(): void
    {
        $distance = (new DistanceCalculator())(
            PositionX::create(10),
            PositionY::create(20),
            PositionX::create(20),
            PositionY::create(40));

        $this->assertInstanceOf(Distance::class, $distance);
        $this->assertEquals(23, $distance->value());
    }
}
