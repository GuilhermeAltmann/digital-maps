<?php

namespace Tests\Unit\Pinterest\Domain\ValueObject;

use App\Pinterest\Domain\ValueObject\Closed;
use App\Pinterest\Domain\ValueObject\OpeningHours;
use DateTime;
use PHPUnit\Framework\TestCase;

class ClosedTest extends TestCase
{
    public function test_should_return_opened(): void
    {
        $closed = Closed::create(new DateTime());
        $this->assertInstanceOf(Closed::class, $closed);
        $this->assertInstanceOf(OpeningHours::class, $closed);
    }

    public function test_should_return_value(): void
    {
        $closed = Closed::create(new DateTime());
        $this->assertInstanceOf(DateTime::class, $closed->value());
    }
}
