<?php

namespace App\Pinterest\Application\Create;

use App\Pinterest\Domain\Exception\OpenedIsBiggerThanClosedException;
use App\Pinterest\Domain\Pinterest;
use App\Pinterest\Domain\ValueObject\Closed;
use App\Pinterest\Domain\ValueObject\Name;
use App\Pinterest\Domain\ValueObject\Opened;
use App\Pinterest\Domain\ValueObject\OpeningHours;
use App\Pinterest\Domain\ValueObject\PositionX;
use App\Pinterest\Domain\ValueObject\PositionY;

class CreatePinterestHandler
{
    public function __construct(private readonly PinterestCreator $pinterestCreator)
    {
    }

    public function handle(CreatePinterestCommand $command): void
    {

        $pinterest = Pinterest::create(
            Name::create($command->name()),
            PositionX::create($command->positionX()),
            PositionY::create($command->positionY()),
            $command->opened() !== null ? Opened::create(\DateTime::createFromFormat(OpeningHours::DEFAULT_FORMAT, $command->opened())) : $command->opened(),
            $command->closed() !== null ? Closed::create(\DateTime::createFromFormat(OpeningHours::DEFAULT_FORMAT, $command->closed())) : $command->closed()
        );

        if($pinterest->opened()->value() >= $pinterest->closed()->value()){
            throw new OpenedIsBiggerThanClosedException();
        }

        ($this->pinterestCreator)($pinterest);
    }
}
