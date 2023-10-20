<?php

namespace Tests\Unit\Pinterest\Application\FindByProximity;

use App\Pinterest\Application\Calculator\DistanceCalculator;
use App\Pinterest\Application\FindAll\PinterestAllFinder;
use App\Pinterest\Application\FindByProximity\FindByProximityPinterestCommand;
use App\Pinterest\Application\FindByProximity\FindByProximityPinterestHandler;
use App\Pinterest\Domain\Pinterest;
use App\Pinterest\Domain\PinterestCollection;
use App\Pinterest\Presentation\Http\Response\FindByProximityPinterestResponse;
use Mockery;
use Tests\TestCase;

class FindByProximityPinterestHandlerTest extends TestCase
{
    public function test_should_return_response(): void
    {
        $pinterestAllFinder = Mockery::mock(PinterestAllFinder::class);
        $pinterestAllFinder->shouldReceive('__invoke')
            ->andReturn(PinterestCollection::create([
                Pinterest::create('parque', 10, 20),
                Pinterest::create('restaurante', 10, 20, '12:00:00', '23:00:00'),
                Pinterest::create('restaurante', 40, 25, '12:00:00', '23:00:00'),
            ]));

        $findByProximityPinterestHandler = (new FindByProximityPinterestHandler(
            $pinterestAllFinder,
            new DistanceCalculator()
        ))->handle(new FindByProximityPinterestCommand(
            10,
            20,
            '13:00',
            2
        ));

        $this->assertInstanceOf(FindByProximityPinterestResponse::class, $findByProximityPinterestHandler);
        $this->assertInstanceOf(PinterestCollection::class, $findByProximityPinterestHandler->pinterestCollection());
        $this->assertCount(2, $findByProximityPinterestHandler->pinterestCollection());
    }
}
