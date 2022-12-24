<?php

namespace App\Http\Controllers\Front;

use App\Models\User;
use App\Services\Order\OrderServiceInterface;
use App\Services\OrderDetail\OrderDetailServiceInterface;
use App\Services\ProductCategory\ProductCategoryServiceInterface;
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
    private ProductCategoryServiceInterface $productCategoryService;
    private $orderService;
    private $orderDetailService;


    public function __construct(UserServiceInterface $userService,
                                ProductCategoryServiceInterface $productCategoryService,
                                OrderServiceInterface $orderService,OrderDetailServiceInterface $orderDetailService)
    {
        $this->userService = $userService;
        $this->productCategoryService = $productCategoryService;
        $this->orderService = $orderService;
        $this->orderDetailService= $orderDetailService;
    }

    public function show()
    {
        $categories = $this->productCategoryService->all();

        return view('front.account.show',compact('categories'));
    }



    public function login()
    {
        $categories = $this->productCategoryService->all();
        return view('front.account.login', compact('categories'));
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
        $categories = $this->productCategoryService->all();
        return view('front.account.register',compact('categories'));

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
            'level' => Constant::user_level_customer, //mac dinh dang ki la tai khoan bth
            'country' => $request->country,
            'street_address' => $request->street_address,
            'town_city' => $request->town_city,
            'phone' => $request->phone
        ];

        $user = $this->userService->create($data);

        $cart_data = [
            'id_user' => $user->id,
        ];
        DB::table('cart')->insert($cart_data);

        return redirect('account/login')
            ->with('notification','Register Success! Please login.');
    }

    public function myOrderIndex()
    {
        $categories = $this->productCategoryService->all();

        $user_id = Auth::user()->id;
        $orders = DB::table('orders')->where('user_id', $user_id)->get();
        $orderDetails = [];

        foreach ($orders as $order){
            $datas = DB::table('order_details')->where('order_id', $order->id)->get();
            foreach($datas as $data) {
                array_push($orderDetails, $data);
            }
        }

        return view('front.account.my-order.index',compact('categories','orders', 'orderDetails'));
    }

    public function myOrderShow($id)
    {
        $categories = $this->productCategoryService->all();

        return view('front.account.my-order.show',compact('categories'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */

    public function myInfoIndex()
    {
        $user_id = Auth::user()->id;
        $user = DB::table('users')->where('id', $user_id)->get();
        $categories = $this->productCategoryService->all();
        return view('front.account.info', compact('categories','user'));
    }

    public function myInfoEdit(User $user)
    {
        return view('front.account.edit-info',compact('user'));
    }
}
