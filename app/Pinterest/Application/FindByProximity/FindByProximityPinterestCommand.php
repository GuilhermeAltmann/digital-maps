<?php

namespace App\Pinterest\Application\FindByProximity;

class FindByProximityPinterestCommand
{
    public function __construct(
        private readonly int $positionX,
        private readonly int $positionY,
        private readonly ?string $timeNow,
        private readonly ?string $distance
    ) {
    }

    public function positionX(): int
    {
        return $this->positionX;
    }

    public function positionY(): int
    {
        return $this->positionY;
    }

    public function timeNow(): ?string
    {
        return $this->timeNow;
    }

    public function distance(): ?int
    {
        return $this->distance;
    }
}
