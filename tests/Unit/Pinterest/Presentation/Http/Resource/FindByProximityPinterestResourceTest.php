<?php

namespace Unit\Pinterest\Presentation\Http\Resource;

use App\Pinterest\Domain\Pinterest;
use App\Pinterest\Domain\PinterestCollection;
use App\Pinterest\Presentation\Http\Resource\FindByProximityPinterestResource;
use App\Pinterest\Presentation\Http\Response\FindByProximityPinterestResponse;
use Illuminate\Http\Request;
use Mockery;
use Tests\TestCase;

class FindByProximityPinterestResourceTest extends TestCase
{
    public function test_should_return_array(): void
    {
        $findByProximityPinterestResponse = Mockery::mock(FindByProximityPinterestResponse::class);
        $findByProximityPinterestResponse->shouldReceive('pinterestCollection')
            ->andReturn(PinterestCollection::create([
                Pinterest::create('name', 1, 2),
            ]));

        $request = Mockery::spy(Request::class);

        $response = new FindByProximityPinterestResource($findByProximityPinterestResponse, '12:00');

        $this->assertIsArray($response->toArray($request));
        $this->assertEquals('aberto', $response->toArray($request)[0][1]);
    }
}
