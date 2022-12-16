<?php

namespace App\Http\Middleware;

use App\Utilities\Constant;
use Illuminate\Http\Request;
use Closure;
use Illuminate\Support\Facades\Auth;

class CheckAdminLogin
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        //neu chua dang nhap: chuyen huong sang trang login
        if (Auth::user()->level != Constant::user_level_manager && Auth::user()->level != Constant::user_level_admin ) {
            Auth::logout();

            return redirect()->guest('admin/login');
        }

        return $next($request);
    }
}
