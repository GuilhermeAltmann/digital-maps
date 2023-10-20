<?php

namespace Unit\Pinterest\Application\FindAll;

use App\Pinterest\Application\FindAll\FindAllPinterestCommand;
use App\Pinterest\Application\FindAll\FindAllPinterestHandler;
use App\Pinterest\Application\FindAll\PinterestAllFinder;
use App\Pinterest\Domain\Pinterest;
use App\Pinterest\Domain\PinterestCollection;
use App\Pinterest\Presentation\Http\Response\FindAllPinterestResponse;
use Mockery;
use Tests\TestCase;

class FindAllPinterestHandlerTest extends TestCase
{
    public function test_should_return_pinterest_collection(): void
    {
        $pinterestAllFinder = Mockery::mock(PinterestAllFinder::class);
        $pinterestAllFinder->shouldReceive('__invoke')
            ->andReturn(PinterestCollection::create([
                Pinterest::create('name', 1, 2),
            ]));

        $findAllPinterestHandler = (new FindAllPinterestHandler($pinterestAllFinder))->handle(new FindAllPinterestCommand());

        $this->assertInstanceOf(FindAllPinterestResponse::class, $findAllPinterestHandler);
        $this->assertInstanceOf(PinterestCollection::class, $findAllPinterestHandler->pinterestCollection());
    }
}
