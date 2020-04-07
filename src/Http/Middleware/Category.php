<?php

namespace Anari\Cms\Http\Middleware;

use Closure;

class Category
{
    public function handle($request, Closure $next)
    {
        dd('ok');
        return $next($request);
    }
}