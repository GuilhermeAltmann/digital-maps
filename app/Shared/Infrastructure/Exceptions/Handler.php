<?php

namespace App\Shared\Infrastructure\Exceptions;

use App\Shared\Domain\DomainError;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Http\Response;
use Illuminate\Validation\ValidationException;
use InvalidArgumentException;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * The list of the inputs that are never flashed to the session on validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontReport = [
        DomainError::class,
        InvalidArgumentException::class
    ];

    /**
     * Register the exception handling callbacks for the application.
     */
    public function register(): void
    {

        $this->renderable(function (Throwable $e) {

            if ($e instanceof DomainError) {
                return response()->json([
                    'status' => 'error',
                    'data' => [
                        'title' => $e->errorTitle(),
                        'message' => $e->errorMessage()
                    ]
                ], $e->errorCode());
            }

            if ($e instanceof InvalidArgumentException || $e instanceof ValidationException) {
                return response()->json([
                    'status' => 'error',
                    'data' => [
                        'message' => $e->getMessage()
                    ]
                ], Response::HTTP_UNPROCESSABLE_ENTITY);
            }

            return response()->json([
                'status' => 'error',
                'data' => [
                    'message' => $e->getMessage()
                ]
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        });

        $this->reportable(function (Throwable $e) {

        });
    }
}
