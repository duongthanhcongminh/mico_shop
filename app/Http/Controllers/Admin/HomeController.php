<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\User\UserServiceInterface;
use App\Utilities\Common;
use App\Utilities\Constant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;


class HomeController extends Controller
{
    private $userService;

    public function __construct(UserServiceInterface $userService,)
    {
        $this->userService = $userService;
    }

    public function getLogin()
    {
        return view('admin.login');
    }

    public function postLogin(Request $request)
    {
        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
            'level'=> [Constant::user_level_admin, Constant::user_level_manager, Constant::user_level_warehouse,
                Constant::user_level_support, Constant::user_level_delivery,], // Tài khoản manager hoặc admin
        ];

        $remember = $request->remember;

        if(Auth::attempt($credentials,$remember)){
            return redirect()->intended('admin'); //đăng nhập thành công trả về trang chủ
        }else{
            return back()->with('notification', 'ERROR: email or password is wrong');
        }
    }

    public function logout()
    {
        Auth::logout();

        return redirect('admin/login');
    }

    public function myInfoIndex()
    {
        $user_id = Auth::user()->id;
        $data = DB::table('users')->where('id', $user_id)->get();
        $user = $data[0];

        return view('admin.account.info', compact('user'));
    }

    public function myInfoEdit($user_id)
    {
        $user = $this->userService->find($user_id);
;
        return view('admin.account.edit-info',compact('user'));
    }

    public function myInfoUpdate(Request $request, $user_id)
    {
        $data = $request->all();

        // Xu ly mat khau
        if($data['password']){
            if ($data['password'] != $data['password_confirmation']){
                return back()
                    ->with('notification','ERROR: Confirm password does not match');
            }
            $data['password'] = bcrypt($data['password']);
        }
        else {
            unset($data['password']);
        }

        // Xu ly file anh
        if($request->hasFile('image')) {
            //them file moi:
            $data['avatar'] = Common::uploadFile($request->file('image'),'front/img/user');

            //xoa file cu:
            $file_name_old = $request->image_old;
            if ($file_name_old != ''){
                unlink('front/img/user/' . $file_name_old);
            }
        }

        $this->userService->update($data, $user_id);

        return redirect('admin/account/info');
    }
}

