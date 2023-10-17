<?php

namespace App\Pinterest\Domain\Repository;

use App\Pinterest\Domain\Pinterest;

interface CreatePinterestRepository
{
    public function createPinterest(Pinterest $p): void;
}
