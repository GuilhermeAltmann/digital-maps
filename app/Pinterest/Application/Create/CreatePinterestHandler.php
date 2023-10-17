<?php

namespace App\Pinterest\Application\Create;

use App\Pinterest\Domain\Repository\CreatePinterestRepository;

class CreatePinterestHandler
{
    public function __construct(CreatePinterestRepository $repository)
    {
    }

    public function handle(CreatePinterestCommand $command)
    {

    }
}
