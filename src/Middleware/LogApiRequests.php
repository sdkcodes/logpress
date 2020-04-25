<?php

namespace Sdkcodes\Logpress\Middleware;

use Closure;
use Sdkcodes\Logpress\LogWriter;

class LogApiRequests
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $logger = new LogWriter();
        $logger->logRequest($request);
        return $next($request);
    }
}
