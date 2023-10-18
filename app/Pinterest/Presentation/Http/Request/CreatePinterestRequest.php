<?php

namespace App\Pinterest\Presentation\Http\Request;


use App\Shared\Presentation\Http\Request\AbstractRequest;

class CreatePinterestRequest extends AbstractRequest
{

    public function rules(): array
    {
        return [
            'name' => 'string|required',
            'x' => 'numeric|required',
            'y' => 'numeric|required',
            'opened' => 'date_format:H:i',
            'closed' => 'date_format:H:i|required_unless:opened,null',
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

    public function positionY(): int
    {
        return $this->input('y');
    }

    public function opened(): ?string
    {
        return $this->input('opened');
    }

    public function closed(): ?string
    {
        return $this->input('closed');
    }
}
