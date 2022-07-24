<?php

namespace Hercules\Admin\Middleware;

use Closure;
use Illuminate\Http\Request;

class MiddleDcatAntThemeMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        config([
            'admin.layout.color' => 'ant',
            'admin.layout.sidebar_style' => 'dark',
        ]);
        return $next($request);
    }
}
