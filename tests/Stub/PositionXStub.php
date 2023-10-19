<?php

namespace Tests\Stub;

use App\Pinterest\Domain\ValueObject\PositionX;

class PositionXStub
{
    public static function random($int1 = 0, $int2 = 1000): PositionX
    {
        return PositionX::create(GeneratorStub::random()->numberBetween($int1, $int2));
    }
}
