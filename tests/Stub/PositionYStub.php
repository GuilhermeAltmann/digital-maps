<?php

namespace Tests\Stub;

use App\Pinterest\Domain\ValueObject\PositionY;

class PositionYStub
{
    public static function random($int1 = 0, $int2 = 1000): PositionY
    {
        return PositionY::create(GeneratorStub::random()->numberBetween($int1, $int2));
    }
}
