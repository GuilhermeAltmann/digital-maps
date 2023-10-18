<?php

namespace App\Pinterest\Domain;

use App\Pinterest\Domain\ValueObject\Closed;
use App\Pinterest\Domain\ValueObject\Name;
use App\Pinterest\Domain\ValueObject\Opened;
use App\Pinterest\Domain\ValueObject\OpeningHours;
use App\Pinterest\Domain\ValueObject\PositionX;
use App\Pinterest\Domain\ValueObject\PositionY;

class Pinterest implements \JsonSerializable
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
        string $name,
        int $positionX,
        int $positionY,
        ?string $opened,
        ?string $closed,
        ?string $formatOpened = OpeningHours::DEFAULT_FORMAT,
        ?string $formatClosed = OpeningHours::DEFAULT_FORMAT,

    ): Pinterest
    {

        return new self(Name::create($name),
            PositionX::create($positionX),
            PositionY::create($positionY),
            \DateTime::createFromFormat($formatOpened, $opened) ? Opened::create(\DateTime::createFromFormat($formatOpened, $opened)) : null,
            \DateTime::createFromFormat($formatClosed, $closed) ? Closed::create(\DateTime::createFromFormat($formatClosed, $closed)) : null
        );
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

    public function jsonSerialize()
    {
        return [
            'name' => $this->name(),
            'x' => $this->positionX(),
            'y' => $this->positionY(),
            'opened' => $this->opened()?->defaultFormat(),
            'closed' => $this->closed()?->defaultFormat(),
        ];
    }
}
