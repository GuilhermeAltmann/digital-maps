<?php

namespace Unit\Pinterest\Presentation\Http\Response;

use App\Pinterest\Domain\PinterestCollection;
use App\Pinterest\Presentation\Http\Response\FindByProximityPinterestResponse;
use Tests\TestCase;

class FindByProximityPinterestResponseTest extends TestCase
{
    public function test_should_return_collection(): void
    {
        $response = new FindByProximityPinterestResponse(PinterestCollection::create([]));
        $this->assertInstanceOf(PinterestCollection::class, $response->pinterestCollection());
    }
}
