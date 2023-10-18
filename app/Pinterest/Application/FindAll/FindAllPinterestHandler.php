<?php

namespace App\Pinterest\Application\FindAll;

use App\Pinterest\Presentation\Http\Response\FindAllPinterestResponse;

class FindAllPinterestHandler
{
     public function __construct(private readonly PinterestAllFinder $finder)
     {
     }

     public function handle(): FindAllPinterestResponse
     {
        return new FindAllPinterestResponse(($this->finder)());
     }
}
