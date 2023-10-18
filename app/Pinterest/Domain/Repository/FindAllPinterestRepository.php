<?php

namespace App\Pinterest\Domain\Repository;

use App\Pinterest\Domain\PinterestCollection;

interface FindAllPinterestRepository
{
    public function findAllPinterest(): PinterestCollection;
}
