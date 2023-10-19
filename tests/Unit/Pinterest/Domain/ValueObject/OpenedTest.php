<?php

namespace Tests\Unit\Pinterest\Domain\ValueObject;

use App\Pinterest\Domain\ValueObject\Opened;
use App\Pinterest\Domain\ValueObject\OpeningHours;
use DateTime;
use PHPUnit\Framework\TestCase;

class OpenedTest extends TestCase
{
    public function test_should_return_opened(): void
    {
        $opened = Opened::create(new DateTime());
        $this->assertInstanceOf(Opened::class,$opened);
        $this->assertInstanceOf(OpeningHours::class,$opened);
    }

    public function test_should_return_value(): void
    {
        $opened = Opened::create(new DateTime());
        $this->assertInstanceOf(DateTime::class, $opened->value());
    }
}
