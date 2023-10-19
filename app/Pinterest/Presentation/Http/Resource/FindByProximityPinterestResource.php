<?php

namespace App\Pinterest\Presentation\Http\Resource;

use App\Pinterest\Domain\ValueObject\OpeningHours;
use App\Pinterest\Presentation\Http\Response\FindByProximityPinterestResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class FindByProximityPinterestResource extends JsonResource
{
    public function __construct(?FindByProximityPinterestResponse $response, private string $hours)
    {
        parent::__construct($response);
    }

    public function toArray(Request $request): array
    {
        $return = [];
        foreach ($this->resource->pinterestCollection()->toArray() as $pinterest) {
            $opened = $pinterest->isOpened(\DateTime::createFromFormat(OpeningHours::DEFAULT_FORMAT, $this->hours));
            $return[] = [$pinterest->name(), $opened ? 'aberto' : 'fechado'];
        }

        return $return;
    }
}
