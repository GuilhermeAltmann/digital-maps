<?php

namespace App\Pinterest\Domain;

use App\Pinterest\Domain\ValueObject\Closed;
use App\Pinterest\Domain\ValueObject\Name;
use App\Pinterest\Domain\ValueObject\Opened;
use App\Pinterest\Domain\ValueObject\PositionX;
use App\Pinterest\Domain\ValueObject\PositionY;

class Pinterest
{
    public function __construct(
        private readonly Name $name,
        private readonly PositionX $positionX,
        private readonly PositionY $positionY,
        private readonly ?Opened $opened = null,
        private readonly ?Closed $closed = null
    )
    {
    }

    public static function create(
        Name $name,
        PositionX $positionX,
        PositionY $positionY,
        ?Opened $opened,
        ?Closed $closed,
    ): Pinterest
    {
        return new self($name, $positionX, $positionY, $opened, $closed);
    }

    /**
     * @return Name
     */
    public function name(): Name
    {
        return $this->name;
    }

    /**
     * @return PositionX
     */
    public function positionX(): PositionX
    {
        return $this->positionX;
    }

    /**
     * @return PositionY
     */
    public function positionY(): PositionY
    {
        return $this->positionY;
    }

    /**
     * @return Opened|null
     */
    public function opened(): ?Opened
    {
        return $this->opened;
    }

    /**
     * @return Closed|null
     */
    public function closed(): ?Closed
    {
        return $this->closed;
    }
}
