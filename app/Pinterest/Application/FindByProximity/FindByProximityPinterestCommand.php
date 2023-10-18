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
    public function timeNow(): ?string
    {
        return $this->timeNow;
    }

    /**
     * @return int|null
     */
    public function distance(): ?int
    {
        return $this->distance;
    }
}
