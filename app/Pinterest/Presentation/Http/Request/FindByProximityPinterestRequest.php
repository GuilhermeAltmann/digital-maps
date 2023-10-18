<?php

namespace App\Pinterest\Presentation\Http\Request;

use App\Shared\Presentation\Http\Request\AbstractRequest;

class FindByProximityPinterestRequest extends AbstractRequest
{
    public function rules(): array
    {
        return [
            'x' => 'numeric|required',
            'y' => 'numeric|required',
            'mts' => 'numeric|required',
            'hr' => 'date_format:H:i|required',
        ];
    }

    public function positionX(): int
    {
        return $this->input('x');
    }

    public function positionY(): int
    {
        return $this->input('x');
    }

    public function meters(): int
    {
        return $this->input('mts');
    }

    public function hours(): string
    {
        return $this->input('hr');
    }
}
