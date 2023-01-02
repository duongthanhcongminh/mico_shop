<?php

namespace App\Http\Middleware;

use App\Utilities\Constant;
use Illuminate\Http\Request;
use Closure;
use Illuminate\Support\Facades\Auth;

class CheckLogin
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
        if (Auth::guest()){
            return redirect()->guest('admin/login');
        }


        //neu da dang nhap nhung sai level: dang xuat la dang nhap lai
        if (Auth::user()->level == 5 )
        {
            Auth::logout();

            return redirect()->guest('admin/login');
        }


        return $next($request);
    }
}
