<?php

namespace Unit\Pinterest\Infrastructure\External\Persistence;

use App\Pinterest\Infrastructure\External\Persistence\PinterestRepository;
use App\Pinterest\Infrastructure\External\Persistence\PinterestRepositoryFactory;
use Tests\TestCase;

class PinterestRepositoryFactoryTest extends TestCase
{
    public function test_should_return_pinterest_repository(): void
    {
        $this->assertInstanceOf(PinterestRepository::class, (new PinterestRepositoryFactory())());
    }
}
