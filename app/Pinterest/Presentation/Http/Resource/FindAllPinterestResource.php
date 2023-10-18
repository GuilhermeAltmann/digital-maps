<?php

namespace App\Pinterest\Presentation\Http\Resource;

use App\Pinterest\Presentation\Http\Response\FindAllPinterestResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class FindAllPinterestResource extends JsonResource
{
    public function __construct(?FindAllPinterestResponse $response)
    {
        parent::__construct($response);
    }

    public function toArray(Request $request): array
    {
        return $this->resource->pinterestCollection()->toArray();
    }
}
