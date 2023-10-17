<?php

namespace App\Pinterest\Presentation\Http\Controller;

use App\Pinterest\Application\Create\CreatePinterestCommand;
use App\Pinterest\Application\Create\CreatePinterestHandler;
use App\Pinterest\Presentation\Http\Request\CreatePinterestRequest;
use App\Pinterest\Presentation\Http\Resource\CreatePinterestResource;
use App\Shared\Presentation\Http\Controllers\Controller;

class CreatePinterestController extends Controller
{
    public function __construct(private readonly CreatePinterestHandler $handler)
    {
    }

    public function __invoke(CreatePinterestRequest $request): CreatePinterestResource
    {
        $this->handler->handle(new CreatePinterestCommand(
            $request->name(),
            $request->positionX(),
            $request->positionY(),
            $request->opened(),
            $request->closed(),
        ));
        return new CreatePinterestResource([]);
    }
}
