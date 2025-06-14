<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Cache\RateLimiter;
use Symfony\Component\HttpFoundation\Response;

class ApiRateLimit
{
    protected $limiter;

    public function __construct(RateLimiter $limiter)
    {
        $this->limiter = $limiter;
    }

    public function handle($request, Closure $next)
    {
        $key = $request->user() ? $request->user()->id : $request->ip();
        
        // Per minute limit
        if ($this->limiter->tooManyAttempts("api:{$key}:minute", env('RATE_LIMIT_PER_MINUTE', 60))) {
            return response()->json([
                'message' => 'Too many requests. Please try again later.',
                'retry_after' => $this->limiter->availableIn("api:{$key}:minute")
            ], Response::HTTP_TOO_MANY_REQUESTS);
        }
        
        // Per hour limit
        if ($this->limiter->tooManyAttempts("api:{$key}:hour", env('RATE_LIMIT_PER_HOUR', 1000))) {
            return response()->json([
                'message' => 'Hourly limit exceeded. Please try again later.',
                'retry_after' => $this->limiter->availableIn("api:{$key}:hour")
            ], Response::HTTP_TOO_MANY_REQUESTS);
        }

        $this->limiter->hit("api:{$key}:minute");
        $this->limiter->hit("api:{$key}:hour");

        return $next($request);
    }
}
