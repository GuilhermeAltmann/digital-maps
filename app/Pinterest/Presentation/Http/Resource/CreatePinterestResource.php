<?php

namespace App\Pinterest\Presentation\Http\Resource;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CreatePinterestResource extends JsonResource
{
    public function __construct(?array $response)
    {
        parent::__construct($response);
    }

    public function toArray(Request $request)
    {
        return [
            'success' => true
        ];
    }
}
