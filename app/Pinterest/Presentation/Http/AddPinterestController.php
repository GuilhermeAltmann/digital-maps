<?php

namespace App\Pinterest\Presentation\Http;


use App\Pinterest\Presentation\Resource\AddPinterestResource;
use App\Shared\Presentation\Http\Controllers\Controller;

class AddPinterestController extends Controller
{
    public function __invoke(): AddPinterestResource
    {
        return new AddPinterestResource([]);
    }
}
