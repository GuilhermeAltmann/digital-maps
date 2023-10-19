<?php

namespace Tests\Stub;

use App\Pinterest\Domain\Pinterest;

class PinterestStub
{
    public static function randomWithHoursOpening(): Pinterest
    {
        return new Pinterest(
            NameStub::random(),
            PositionXStub::random(),
            PositionYStub::random()
        );
    }

    public static function random(): Pinterest
    {
        return new Pinterest(
            NameStub::random(),
            PositionXStub::random(),
            PositionYStub::random()
        );
    }
}
