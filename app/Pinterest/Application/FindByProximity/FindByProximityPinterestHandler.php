<?php

namespace App\Pinterest\Application\FindByProximity;

use App\Pinterest\Application\Calculator\DistanceCalculator;
use App\Pinterest\Application\FindAll\PinterestAllFinder;
use App\Pinterest\Domain\Pinterest;
use App\Pinterest\Domain\ValueObject\PositionX;
use App\Pinterest\Domain\ValueObject\PositionY;
use App\Pinterest\Presentation\Http\Response\FindByProximityPinterestResponse;

class FindByProximityPinterestHandler
{
    public function __construct(
        private readonly PinterestAllFinder $finder,
        private readonly DistanceCalculator $distanceCalculator
    ) {
    }

    public function handle(FindByProximityPinterestCommand $command): FindByProximityPinterestResponse
    {
        $pinterestCollection = ($this->finder)();
        $pinterestCollectionFiltered = $pinterestCollection->filter(function (Pinterest $item) use ($command) {
            if (($this->distanceCalculator)(
                $item->positionX(),
                $item->positionY(),
                PositionX::create($command->positionX()),
                PositionY::create($command->positionY()))->value() > $command->distance()) {
                return false;
            }

            return true;
        });

        return new FindByProximityPinterestResponse($pinterestCollectionFiltered);
    }
}
