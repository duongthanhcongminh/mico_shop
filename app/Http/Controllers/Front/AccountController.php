<?php

namespace App\Http\Controllers\Front;

use App\Utilities\Constant;
use DB;
use App\Http\Controllers\Controller;
use App\Services\User\UserServiceInterface;
use http\Exception\BadConversionException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AccountController extends Controller
{
    private $userService;

    public function __construct(UserServiceInterface $userService)
    {
        $this->userService = $userService;
    }

    public function login()
    {
        return view('front.account.login');
    }

    public function checkLogin(Request $request)
    {
        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
            'level'=> 5, //mức độ tài khoản
        ];

        $remember = $request->remember;


        if(Auth::attempt($credentials,$remember)){
            return redirect('/'); //đăng nhập thành công trả về trang chủ
        }else{
            return back()->with('notification', 'ERROR: email or password is wrong');
        }
    }

    public function logout()
    {
        Auth::logout();

        return back();
    }

    public function register()
    {
        return view('front.account.register');
    }

    public function postRegister(Request $request)
    {
        if ($request->password != $request->repassword){
            return back()
                ->with('notification','ERROR: Confirm password does not match');
        }
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'level' => [Constant::user_level_customer], //mac dinh dang ki la tai khoan bth
            'country' => $request->country,
            'street_address' => $request->street_address,
            'town_city' => $request->town_city,
            'phone' => $request->phone,

        ];
        $user = $this->userService->create($data);

        $cart_data = [
            'id_user' => $user->id,
        ];
        DB::table('cart')->insert($cart_data);

        return redirect('account/login')
            ->with('notification','Register Success! Please login.');
    }
}
