<?php

namespace App\Pinterest\Application\Create;

use App\Pinterest\Domain\Exception\OpenedIsBiggerThanClosedException;
use App\Pinterest\Domain\Exception\PositionHasNegativeValueException;
use App\Pinterest\Domain\Pinterest;

class CreatePinterestHandler
{
    public function __construct(private readonly PinterestCreator $pinterestCreator)
    {
    }

    public function handle(CreatePinterestCommand $command): void
    {

        $pinterest = Pinterest::create(
            $command->name(),
            $command->positionX(),
            $command->positionY(),
            $command->opened(),
            $command->closed()
        );

        if ($pinterest->positionX()->value() < 0 || $pinterest->positionY()->value() < 0) {
            throw new PositionHasNegativeValueException();
        }

        if ($pinterest->opened() !== null) {
            if ($pinterest->opened()->value() >= $pinterest->closed()->value()) {
                throw new OpenedIsBiggerThanClosedException();
            }
        }
        ($this->pinterestCreator)($pinterest);
    }
}
