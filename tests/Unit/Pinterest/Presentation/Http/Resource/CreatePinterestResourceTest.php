<?php

namespace Unit\Pinterest\Presentation\Http\Resource;

use App\Pinterest\Presentation\Http\Resource\CreatePinterestResource;
use Illuminate\Http\Request;
use Mockery;
use Tests\TestCase;

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
