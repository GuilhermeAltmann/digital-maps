<?php

namespace App\Pinterest\Presentation\Http\Response;

use App\Pinterest\Domain\PinterestCollection;

class FindAllPinterestResponse
{
    public function __construct(private readonly PinterestCollection $pinterestCollection)
    {
    }

    public function pinterestCollection(): PinterestCollection
    {
        return $this->pinterestCollection;
    }
}
