<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Services\User\UserServiceInterface;
use App\Utilities\Common;
use Illuminate\Http\Request;
use App\Utilities\Constant;


class UserController extends Controller
{
    private $userService;

    public function __construct(UserServiceInterface $userService)
    {
        $this->userService = $userService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = $this->userService->all();

        return view('admin.user.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->get('password') != $request->get('password_confirmation')){
            return back()
                ->with('notification','ERROR: confirm password does not match');
        }

        $data = $request->all();
        $data['password'] = bcrypt($request->get('password'));

        // xu li file
        if($request->hasFile('image')){
            $data['avatar'] = Common::uploadFile($request->file('image'),'front/img/user');
        }

        $user = $this->userService->create($data);

        return redirect('admin/user/'.$user->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('admin.user.show',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('admin.user.edit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $data = $request->all();

        // Xu ly mat khau
        if ($request->get('password') != null) {
            if ($request->get('password') != $request->get('password_confimation')) {
                return back()
                    ->with('notification', 'ERROR: Confirm password does not match');
            }

            $data['password'] = bcrypt($request->get('password'));
        } else{
            unset($data['password']);
        }

        // Xu ly file anh
        if($request->hasFile('image')) {
            //them file moi:
            $data['avatar'] = Common::uploadFile($request->file('image'),'front/img/user');

            //xoa file cu:
            $file_name_old = $request->get('image_old');
            if ($file_name_old != ''){
                unlink('front/img/user/' . $file_name_old);
            }
        }
        //cap nhat du lieu
        $this->userService->update($data, $user->id);

        return redirect('admin/user/' . $user->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $this->userService->delete($user->id);

        //xoa file cu
        $file_name = $user->avatar;
        if ($file_name != '') {
            unlink('front/img/user/' . $file_name);
        }

        return redirect('admin/user');
    }
}
