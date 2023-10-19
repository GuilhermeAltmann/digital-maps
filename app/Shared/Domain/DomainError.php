<?php

namespace App\Shared\Domain;

use Exception;

abstract class DomainError extends Exception
{
    abstract public function errorCode(): int;

    abstract public function errorMessage(): string;

    abstract public function errorTitle(): string;
}
