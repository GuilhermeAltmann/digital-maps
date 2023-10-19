<?php

namespace App\Pinterest\Presentation\Http\Controller;

use App\Pinterest\Application\FindAll\FindAllPinterestCommand;
use App\Pinterest\Application\FindAll\FindAllPinterestHandler;
use App\Pinterest\Presentation\Http\Request\FindAllPinterestRequest;
use App\Pinterest\Presentation\Http\Resource\FindAllPinterestResource;
use App\Shared\Presentation\Http\Controllers\Controller;

class FindAllPinterestController extends Controller
{
    public function __construct(private readonly FindAllPinterestHandler $handler)
    {
    }

    public function __invoke(FindAllPinterestRequest $request): FindAllPinterestResource
    {
        $response = $this->handler->handle(new FindAllPinterestCommand());

        return new FindAllPinterestResource($response);
    }
}
