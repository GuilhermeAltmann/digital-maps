<?php

namespace Tests\Unit\Pinterest\Domain\Exception;

use App\Pinterest\Domain\Exception\OpenedIsBiggerThanClosedException;
use App\Shared\Domain\DomainError;
use Tests\TestCase;

class OpenedIsBiggerThanClosedExceptionTest extends TestCase
{
    public function test_should_return_exception(): void
    {
        $exception = new OpenedIsBiggerThanClosedException();
        $this->assertInstanceOf(DomainError::class, $exception);
        $this->assertEquals(422, $exception->errorCode());
        $this->assertEquals('Valor de fechamento maior que o de abertura', $exception->errorMessage());
        $this->assertEquals('Horário de funcionamento inválido', $exception->errorTitle());
    }
}
