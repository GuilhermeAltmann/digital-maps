<?php

namespace Tests\Stub;

use App\Pinterest\Domain\ValueObject\Name;

class NameStub
{
    public static function random(): Name
    {
        return Name::create(GeneratorStub::random()->name);
    }
}
