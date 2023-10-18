<?php

namespace App\Pinterest\Presentation\Http\Controller;


use App\Pinterest\Application\FindByProximity\FindByProximityPinterestCommand;
use App\Pinterest\Application\FindByProximity\FindByProximityPinterestHandler;
use App\Pinterest\Presentation\Http\Request\FindByProximityPinterestRequest;
use App\Pinterest\Presentation\Http\Resource\FindByProximityPinterestResource;

class FindByProximityPinterestController
{
    public function __construct(private readonly FindByProximityPinterestHandler $handler)
    {
    }

    public function __invoke(FindByProximityPinterestRequest $request): FindByProximityPinterestResource
    {
        $response = $this->handler->handle(new FindByProximityPinterestCommand(
            $request->positionX(),
            $request->positionY(),
            $request->hours(),
            $request->meters()
        ));
        return new FindByProximityPinterestResource($response);
    }
}
