<?php

namespace App\Pinterest\Domain\Exception;

use App\Shared\Domain\DomainError;

class PositionHasNegativeValueException extends DomainError
{
    public function errorCode(): int
    {
        return 422;
    }

    public function errorMessage(): string
    {
        return 'Valor de posição não pode ser negativo';
    }

    public function errorTitle(): string
    {
        return 'Valor de posição inválido';
    }
}
