<?php

namespace App\Pinterest\Infrastructure\External\Persistence;

use App\Pinterest\Domain\Pinterest as PinterestEntity;
use App\Pinterest\Domain\PinterestCollection;
use App\Pinterest\Domain\Repository\CreatePinterestRepository;
use App\Pinterest\Domain\Repository\FindAllPinterestRepository;
use App\Pinterest\Domain\ValueObject\OpeningHours;
use App\Pinterest\Infrastructure\External\Mapper\PinterestCollectionMapper;
use App\Pinterest\Infrastructure\External\Model\Pinterest;

class PinterestRepository implements CreatePinterestRepository, FindAllPinterestRepository
{
    public function __construct(private readonly Pinterest $pinterest)
    {
    }

    public function createPinterest(PinterestEntity $p): void
    {
        $this->pinterest->name = $p->name()->value();
        $this->pinterest->x = $p->positionX()->value();
        $this->pinterest->y = $p->positionY()->value();
        $this->pinterest->opened = $p->opened()?->value()->format(OpeningHours::DEFAULT_FORMAT);
        $this->pinterest->closed = $p->closed()?->value()->format(OpeningHours::DEFAULT_FORMAT);
        $this->pinterest->save();
    }

    public function findAllPinterest(): PinterestCollection
    {
        return PinterestCollectionMapper::map(Pinterest::all()->toArray());
    }
}
