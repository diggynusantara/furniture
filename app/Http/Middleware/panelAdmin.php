<?php

namespace App\Http\Middleware;

use Closure;

class panelAdmin
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
        if(session('user') === '' || !session('user')){
            return redirect()->route('panel.login')->with(['message' => 'Masuk Terlebih Dahulu', 'alert' => 'danger']);
        }
        return $next($request);
    }
}
