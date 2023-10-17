<?php

namespace App\Pinterest\Presentation\Http\Request;


use App\Shared\Presentation\Http\Request\AbstractRequest;

class AddPinterestRequest extends AbstractRequest
{

    public function rules(): array
    {
        return [
            'name' => 'string',
            'x' => 'numeric|required',
            'y' => 'numeric|required',
            'opened' => 'date_format:H:i',
            'closed' => 'date_format:H:i',
        ];
    }

    public function name(): string
    {
        return $this->input('name');
    }

    public function positionX(): int
    {
        return $this->input('x');
    }

    public function opened(): string
    {
        return $this->input('opened');
    }

    public function closed(): string
    {
        return $this->input('opened');
    }
}
