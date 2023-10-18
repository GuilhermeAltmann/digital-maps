<?php

namespace App\Pinterest\Presentation\Http\Resource;

use App\Pinterest\Presentation\Http\Response\FindAllPinterestResponse;
use App\Pinterest\Presentation\Http\Response\FindByProximityPinterestResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class FindByProximityPinterestResource extends JsonResource
{
    public function __construct(?FindByProximityPinterestResponse $response)
    {
        parent::__construct($response);
    }

    public function toArray(Request $request): array
    {
        return $this->resource->pinterestCollection()->toArray();
    }
}
