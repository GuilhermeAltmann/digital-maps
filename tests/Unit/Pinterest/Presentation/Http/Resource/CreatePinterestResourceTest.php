<?php

namespace Unit\Pinterest\Presentation\Http\Resource;

use App\Pinterest\Domain\Pinterest;
use App\Pinterest\Domain\PinterestCollection;
use App\Pinterest\Presentation\Http\Resource\CreatePinterestResource;
use App\Pinterest\Presentation\Http\Resource\FindByProximityPinterestResource;
use App\Pinterest\Presentation\Http\Response\FindAllPinterestResponse;
use App\Pinterest\Presentation\Http\Response\FindByProximityPinterestResponse;
use Illuminate\Http\Request;
use Tests\TestCase;
use Mockery;

class CreatePinterestResourceTest extends TestCase
{
    public function test_should_return_array(): void
    {

        $request = Mockery::spy(Request::class);

        $response = new CreatePinterestResource([]);

        $this->assertIsArray($response->toArray($request));
        $this->assertTrue($response->toArray($request)['save']);
    }
}
