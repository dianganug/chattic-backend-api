<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\HttpException;

class Handler extends ExceptionHandler
{
    // ...existing code...

    public function register(): void
    {
        $this->renderable(function (Throwable $e, Request $request) {
            if ($request->is('api/*')) {
                if ($e instanceof HttpException) {
                    return response()->json([
                        'message' => $e->getMessage()
                    ], $e->getStatusCode());
                }

                return response()->json([
                    'message' => $e->getMessage()
                ], 500);
            }
        });
    }
}