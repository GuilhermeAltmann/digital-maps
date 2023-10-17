<?php

namespace App\Pinterest\Presentation\Http\Controller;

use App\Pinterest\Presentation\Http\Request\AddPinterestRequest;
use App\Pinterest\Presentation\Http\Resource\AddPinterestResource;
use App\Shared\Presentation\Http\Controllers\Controller;

class AddPinterestController extends Controller
{
    public function __invoke(AddPinterestRequest $request): AddPinterestResource
    {
        return new AddPinterestResource([]);
    }
}
