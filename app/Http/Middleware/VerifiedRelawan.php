<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Relawan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VerifiedRelawan
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(Relawan::where('id_user', Auth::id())->get()->first()->is_verified == 1)
            return $next($request);
        return redirect()->route('relawan.verif');
    }
}
