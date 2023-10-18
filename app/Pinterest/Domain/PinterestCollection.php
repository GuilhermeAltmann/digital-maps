<?php

namespace App\Pinterest\Domain;

use Illuminate\Support\Collection;

class PinterestCollection extends Collection
{
    public static function create(array $values): self
    {
        return new self($values);
    }
}
