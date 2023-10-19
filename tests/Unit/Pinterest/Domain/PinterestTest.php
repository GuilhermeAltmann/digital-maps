<?php

namespace Tests\Unit\Pinterest\Domain;

use App\Pinterest\Domain\Pinterest;
use Tests\Stub\NameStub;
use Tests\Stub\PositionXStub;
use Tests\Stub\PositionYStub;
use Tests\TestCase;

class PinterestTest extends TestCase
{
    public function test_should_return_pinterest(): void
    {
        $name = NameStub::random();
        $positionX = PositionXStub::random();
        $positionY = PositionYStub::random();

        $pinterest = new Pinterest(
            $name,
            $positionX,
            $positionY
        );

        $this->assertInstanceOf(Pinterest::class, $pinterest);
        $this->assertEquals($name, $pinterest->name());
        $this->assertEquals($positionX, $pinterest->positionX());
        $this->assertEquals($positionY, $pinterest->positionY());
    }
}
