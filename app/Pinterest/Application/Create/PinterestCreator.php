<?php

namespace App\Pinterest\Application\Create;

use App\Pinterest\Domain\Pinterest;
use App\Pinterest\Domain\Repository\CreatePinterestRepository;

class PinterestCreator
{
    public function __construct(private readonly CreatePinterestRepository $repository)
    {
    }

    public function __invoke(Pinterest $p): void
    {
        $this->repository->createPinterest($p);
    }
}
