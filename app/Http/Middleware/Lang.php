<?php

namespace App\Http\Middleware;

use Closure;
use App;

class Lang
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
        $browser_lang = substr($request->server('HTTP_ACCEPT_LANGUAGE'), 0, 2);

        if ($browser_lang === 'de') {

            App::setLocale('en');

        } else {

            App::setLocale('en');

        }

        return $next($request);
    }
}
