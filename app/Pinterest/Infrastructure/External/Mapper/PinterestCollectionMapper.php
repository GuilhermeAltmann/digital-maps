<?php

namespace App\Pinterest\Infrastructure\External\Mapper;

use App\Pinterest\Domain\Pinterest;
use App\Pinterest\Domain\PinterestCollection;
use App\Pinterest\Domain\ValueObject\OpeningHours;

abstract class PinterestCollectionMapper
{
    public static function map(?array $array): PinterestCollection
    {
        $collection = [];
        if ($array) {
            foreach ($array as $data) {
                $collection[] = Pinterest::create(
                    $data['name'],
                    $data['x'],
                    $data['y'],
                    $data['opened'],
                    $data['closed'],
                    OpeningHours::DEFAULT_FORMAT_MYSQL,
                    OpeningHours::DEFAULT_FORMAT_MYSQL
                );
            }
        }

        return PinterestCollection::create($collection);
    }
}
