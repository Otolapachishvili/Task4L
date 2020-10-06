<?php

namespace App\Http\Middleware;

use Closure;
use App\Can_post;
class CheckUser
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
        if (Can_post::firstOrFail()["title"]==0) {
            return redirect()->route("toredirect");
            exit();
        };
        return $next($request);
    }
}