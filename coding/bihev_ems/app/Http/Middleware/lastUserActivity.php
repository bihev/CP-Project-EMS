<?php 

namespace App\Http\Middleware;

use Closure;

use Carbon\Carbon;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;


class LastUserActivity
{
    public function handle($request, Closure $next)
    {
        if(Auth::check()){
            $expiresAt = Carbon::now()->addMinutes(2);
            Cache::put('user-is-online-' .Auth::user()->id, true, $expiresAt);
        }
        
        return $next($request);
    }
}