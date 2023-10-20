<?php

namespace Tests\Unit\Pinterest\Domain\Exception;

use App\Pinterest\Domain\Exception\PositionHasNegativeValueException;
use App\Shared\Domain\DomainError;
use Tests\TestCase;

class PositionHasNegativeValueExceptionTest extends TestCase
{
    public function test_should_return_exception(): void
    {
        $exception = new PositionHasNegativeValueException();
        $this->assertInstanceOf(DomainError::class, $exception);
        $this->assertEquals(422, $exception->errorCode());
        $this->assertEquals('Valor de posição não pode ser negativo', $exception->errorMessage());
        $this->assertEquals('Valor de posição inválido', $exception->errorTitle());
    }
}
