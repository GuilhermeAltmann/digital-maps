<?php

namespace Tests\Unit\Pinterest\Infrastructure\External\Mapper;

use App\Pinterest\Domain\PinterestCollection;
use App\Pinterest\Infrastructure\External\Mapper\PinterestCollectionMapper;
use Tests\TestCase;

class PinterestCollectionMapperTest extends TestCase
{
    public function test_should_return_pinterest_collection(): void
    {
        $pinterestCollection = PinterestCollectionMapper::map([[
            'name' => 'teste',
            'x' => 12,
            'y' => 10,
            'opened' => '12:00',
            'closed' => '15:00',
        ]]);

        $this->assertInstanceOf(PinterestCollection::class, $pinterestCollection);
    }

    public function test_without_opened_hours_should_return_pinterest_collection_(): void
    {
        $pinterestCollection = PinterestCollectionMapper::map([[
            'name' => 'teste',
            'x' => 12,
            'y' => 10,
            'opened' => null,
            'closed' => null,
        ]]);

        $this->assertInstanceOf(PinterestCollection::class, $pinterestCollection);
    }
}
