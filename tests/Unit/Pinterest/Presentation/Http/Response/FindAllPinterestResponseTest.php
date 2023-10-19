<?php

namespace Unit\Pinterest\Presentation\Http\Response;

use App\Pinterest\Domain\PinterestCollection;
use App\Pinterest\Presentation\Http\Response\FindAllPinterestResponse;
use Tests\TestCase;

class FindAllPinterestResponseTest extends TestCase
{
    public function test_should_return_collection(): void
    {
        $response = new FindAllPinterestResponse(PinterestCollection::create([]));
        $this->assertInstanceOf(PinterestCollection::class, $response->pinterestCollection());
    }
}
