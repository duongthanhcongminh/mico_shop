<?php

namespace App\Http\Controllers\Front;

use App\Helper\CartHelper;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Services\Order\OrderServiceInterface;
use App\Services\OrderDetail\OrderDetailServiceInterface;
use App\Services\User\UserServiceInterface;
use App\Utilities\Constant;
use App\Utilities\VNPay;
use Gloudemans\Shoppingcart\Cart;
use Illuminate\Http\Request;
use function GuzzleHttp\Promise\all;

class CheckOutController extends Controller
{
    private $orderService;
    private $orderDetailService;
    private $cart;


    public function __construct(OrderServiceInterface $orderService,
                                OrderDetailServiceInterface $orderDetailService,
                                CartHelper $cart)
    {
        $this->orderService = $orderService;
        $this->orderDetailService = $orderDetailService;
        $this->cart = $cart;

    }

    public function index()
    {
        $items = $this->cart->get();
        $total = Cart::total();
        $subtotal = Cart::subtotal();


        return view('front.checkout.index',compact('items','total','subtotal'));
    }

    public function addOrder(Request $request)
    {
        //1.Them don hang
        $data = $request->all();
        $data['status'] = Constant::order_status_ReceiveOrders;
        $order = $this->orderService->create($data);

        //2.Them chi tiet don hang
        $items = $this->cart->get();

        foreach ($items as $item){
            $data = [
                'order_id'=> $order->id,
                'product_id'=> $item->id,
                'product_size'=> $item->product_size,
                'product_color'=>$item->product_color,
                'qty'=>$item->qty,
                'amount'=>$item->product_price,
                'total'=>$item->total,
            ];

            $this->orderDetailService->create($data);
        }

        if ($request->payment_type == 'COD'){
        //3.Xoa gio hang
        Cart::destroy();

        //4.Tra ve ket qua thong bao
        return redirect('checkout/result')->with('notification','Success! You will pay on delivery. Please check your email');
        }

        if ($request->payment_type == 'VNPAY'){
            //1. Lay URL thanh toan vnpay
            $data_url = VNPay::vnpay_create_payment([
                'vnp_TxnRef'=> $order->id, //ID cua don hang
                'vnp_OrderInfo' =>'Mo ta don hang', //Mo ta don hang
                'vnp_Amount' => Cart::total(0,'','') * 23.510, //Tong gia cua don hang x23.510 ( ti gia lay ngay 15/12/2022)
            ]);

            //2. Chuyen huong toi URL lay duocc
            return redirect()->to($data_url);
        }
    }

    public function vnPayCheck(Request $request)
    {
        //1. lay data tu URL ( do VNPay gui ve qua $vnp_Returnurl )

        $vnp_ResponseCode = $request->get('vnp_ResponseCode'); // Ma phan hoi ket qua. 00 = Thanh cong
        $vnp_TxnRef = $request->get('np_TxnRef'); //ticket_id
        $vnp_Amount = $request->get('vnp_Amount'); //so tien thanh toan

        //2. Kiem tra data, xem ket qua giao dich tra ve tu VNPay hop le khong

        if ($vnp_ResponseCode != null){
            //Neu thanh cong
            if($vnp_ResponseCode == 00){
                //Xoa gio hang
                Cart::destroy();

                //Thong bao ket qua
                return redirect('checkout/result')->with('notification','Success! You has pay online. Please check your email');
            }
            else{ //Khong thanh cong
                //Xoa gio hang da them vao data
                $this->orderService->delete($vnp_TxnRef);

                //Thong bao loi
                return redirect('checkout/result')->with('notification','ERROR: Payment failed or canceled');
            }
        }

    }



    public function result()
    {
        $notification = session('notification');
        return view('front.checkout.result',compact('notification'));
    }





}



