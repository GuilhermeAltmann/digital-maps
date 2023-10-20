<?php

namespace Unit\Pinterest\Application\FindAll;

use App\Pinterest\Application\FindAll\PinterestAllFinder;
use App\Pinterest\Domain\Pinterest;
use App\Pinterest\Domain\PinterestCollection;
use App\Pinterest\Domain\Repository\FindAllPinterestRepository;
use Mockery;
use Tests\TestCase;

class PinterestAllFinderTest extends TestCase
{
    public function test_should_return_pinterest_collection(): void
    {
        $findAllPinterestRepository = Mockery::mock(FindAllPinterestRepository::class);
        $findAllPinterestRepository->shouldReceive('findAllPinterest')
            ->andReturn(PinterestCollection::create([
                Pinterest::create('name', 1, 2),
            ]));

        $this->assertInstanceOf(PinterestCollection::class, (new PinterestAllFinder($findAllPinterestRepository))());
    }
}
