<?php

namespace App\Pinterest\Application\Calculator;

use App\Pinterest\Domain\Distance;
use App\Pinterest\Domain\ValueObject\PositionX;
use App\Pinterest\Domain\ValueObject\PositionY;

class DistanceCalculator
{
    public function __invoke(PositionX $x1, PositionY $y1, PositionX $x2, PositionY $y2): Distance
    {
        $distance = ceil(sqrt(pow($x2->value() - $x1->value(), 2) + pow($y2->value() - $y1->value(), 2)));

        return new Distance($distance);
    }
}
