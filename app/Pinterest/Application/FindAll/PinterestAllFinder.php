<?php

namespace App\Pinterest\Application\FindAll;

use App\Pinterest\Domain\PinterestCollection;
use App\Pinterest\Domain\Repository\FindAllPinterestRepository;

class PinterestAllFinder
{
    public function __construct(private readonly FindAllPinterestRepository $repository)
    {
    }

    public function __invoke(): PinterestCollection
    {
        return $this->repository->findAllPinterest();
    }
}
