<?php

namespace App\Pinterest\Presentation\Http\Controller;

use App\Pinterest\Presentation\Http\Request\CreatePinterestRequest;
use App\Pinterest\Presentation\Http\Resource\CreatePinterestResource;
use App\Shared\Presentation\Http\Controllers\Controller;

class CreatePinterestController extends Controller
{
    public function __invoke(CreatePinterestRequest $request): CreatePinterestResource
    {
        return new CreatePinterestResource([]);
    }
}
