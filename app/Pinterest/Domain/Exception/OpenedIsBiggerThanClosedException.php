<?php

namespace App\Pinterest\Domain\Exception;

use App\Shared\Domain\DomainError;

class OpenedIsBiggerThanClosedException extends DomainError
{
    public function errorCode(): int
    {
        return 422;
    }

    public function errorMessage(): string
    {
        return 'Valor de fechamento maior que o de abertura';
    }

    public function errorTitle(): string
    {
        return 'Horário de funcionamento inválido';
    }
}
