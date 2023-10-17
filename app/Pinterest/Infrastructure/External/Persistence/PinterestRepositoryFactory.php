<?php

namespace App\Pinterest\Infrastructure\External\Persistence;

use App\Pinterest\Infrastructure\External\Model\Pinterest;

class PinterestRepositoryFactory
{
     public function __invoke(): PinterestRepository
     {
         return new PinterestRepository(app(Pinterest::class));
     }
}
