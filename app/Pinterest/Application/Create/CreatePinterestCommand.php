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

    /**
     * @return string
     */
    public function name(): string
    {
        return $this->name;
    }

    /**
     * @return int
     */
    public function positionX(): int
    {
        return $this->positionX;
    }

    /**
     * @return int
     */
    public function positionY(): int
    {
        return $this->positionY;
    }

    /**
     * @return string|null
     */
    public function opened(): ?string
    {
        return $this->opened;
    }

    /**
     * @return string|null
     */
    public function closed(): ?string
    {
        return $this->closed;
    }
}
