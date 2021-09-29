<?php

namespace App\Http\Middleware;

use App\Utils\HttpMethodUtil;
use App\Utils\JsonUtil;
use Closure;
use Illuminate\Http\Request;

class AdminMW
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
        if (!$request->session()->has('admin_abbr')) {
            if (HttpMethodUtil::isMethodGet()) {
                return redirect('admin/login');
            } else {
                return JsonUtil::accessDenied();
            }
        }

        return $next($request);
    }
}
