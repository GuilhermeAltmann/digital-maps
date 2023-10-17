<?php

namespace App\Shared\Domain\ValueObject;

use JsonSerializable;
use Stringable;

abstract class ValueObject implements JsonSerializable, Stringable
{
    abstract public function equals(ValueObject $vo): bool;
}
