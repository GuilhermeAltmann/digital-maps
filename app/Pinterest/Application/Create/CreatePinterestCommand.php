<?php

namespace App\Pinterest\Application\Create;

class CreatePinterestCommand
{
    public function __construct(
        private readonly string $name,
        private readonly int $positionX,
        private readonly int $positionY,
        private readonly ?string $opened,
        private readonly ?string $closed,

    ) {
    }

    public function name(): string
    {
        return $this->name;
    }

    public function positionX(): int
    {
        return $this->positionX;
    }

    public function positionY(): int
    {
        return $this->positionY;
    }

    public function opened(): ?string
    {
        return $this->opened;
    }

    public function closed(): ?string
    {
        return $this->closed;
    }
}
