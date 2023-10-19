<?php

namespace Tests\Unit\Pinterest\Application\FindByProximity;

use App\Pinterest\Application\FindByProximity\FindByProximityPinterestCommand;
use App\Pinterest\Domain\ValueObject\OpeningHours;
use Tests\Stub\DistanceStub;
use Tests\Stub\PositionXStub;
use Tests\Stub\PositionYStub;
use Tests\TestCase;

class FindByProximityPinterestCommandTest extends TestCase
{
    public function test_should_return_find_by_proximity_pinterestCommand(): void
    {

        $positionX = PositionXStub::random()->value();
        $positionY = PositionYStub::random()->value();
        $timeNow = (new \DateTime())->format(OpeningHours::DEFAULT_FORMAT);
        $distance = DistanceStub::random()->value();

        $findByProximityPinterestCommand = new FindByProximityPinterestCommand(
            $positionX,
            $positionY,
            $timeNow,
            $distance
        );

        $this->assertEquals($positionX, $findByProximityPinterestCommand->positionX());
        $this->assertEquals($positionY, $findByProximityPinterestCommand->positionY());
        $this->assertEquals($timeNow, $findByProximityPinterestCommand->timeNow());
        $this->assertEquals($distance, $findByProximityPinterestCommand->distance());
    }
}
