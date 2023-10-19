<?php

namespace Tests\Stub;

use App\Pinterest\Domain\Distance;

class DistanceStub
{
    public static function random($int1 = 0, $int2 = 1000): Distance
    {
        return Distance::create(GeneratorStub::random()->numberBetween($int1, $int2));
    }
}
