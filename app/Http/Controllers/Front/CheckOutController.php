<?php

namespace App\Http\Controllers\Front;

use App\Helper\CartHelper;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Services\Order\OrderServiceInterface;
use App\Services\OrderDetail\OrderDetailServiceInterface;
use App\Services\ProductCategory\ProductCategoryServiceInterface;
use App\Services\User\UserServiceInterface;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Utilities\Constant;
use App\Utilities\VNPay;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Mail;
use function GuzzleHttp\Promise\all;

class CheckOutController extends Controller
{
    private $orderService;
    private $orderDetailService;
    private $cart;
    private $productCategoryService;
    private $cartHelper;


    public function __construct(OrderServiceInterface $orderService,
                                OrderDetailServiceInterface $orderDetailService,
                                CartHelper $cart,
                                ProductCategoryServiceInterface $productCategoryService,CartHelper $cartHelper)
    {
        $this->orderService = $orderService;
        $this->orderDetailService = $orderDetailService;
        $this->productCategoryService = $productCategoryService ;
        $this->cart = $cart;
        $this->cartHelper = $cartHelper;
    }

    public function index()
    {
        $categories = $this->productCategoryService->all();
        $cartItems = $this->cartHelper->get();
        $items = $this->cart->get();
        $total = 0;
        foreach ($items as $item) {
            $total += $item->total;
        }
        $subtotal = $total;


        return view('front.checkout.index',compact('items','total','subtotal','categories','cartItems'));
    }

    public function addOrder(Request $request)
    {
        //1.Them don hang
        $data = $request->all();
        $data['status'] = Constant::order_status_ReceiveOrders;

        $order = $this->orderService->create($data);


        //2.Them chi tiet don hang
        $items = $this->cart->get();
        $total = 0;
        foreach ($items as $item) {
            $total += $item->total;
        }
        $subtotal = $total;

        foreach ($items as $item){
            $data = [
                'order_id'=> $order->id,
                'product_id'=> $item->product_id,
                'product_image'=> $item->product_image,
                'product_name'=> $item->product_name,
                'product_size'=> $item->product_size,
                'product_color'=>$item->product_color,
                'qty'=>$item->qty,
                'amount'=>$item->product_price,
                'total'=>$item->total,
            ];
            //Cap nhat so luong hang ton
            $detail_qty = DB::table('product_details')->where('product_id',$item->product_id)->where('color',$item->product_color)
                ->where('size',$item->product_size)->value('qty');
            $update_detail_qty = (int)$detail_qty - $item->qty;
            DB::table('product_details')->where('product_id',$item->product_id)->where('color',$item->product_color)
                ->where('size',$item->product_size)
                ->update(array(
                'qty'=> $update_detail_qty
            ));

            $product_qty = DB::table('products')->where('id',$item->product_id)->value('qty');
            $update_product_qty = (int)$product_qty - $item->qty;
            DB::table('products')->where('id',$item->product_id)->update(array(
                'qty'=> $update_product_qty
            ));

            $this->orderDetailService->create($data);
        }





        if ($request->payment_type == 'COD'){
            //Gui email
            $this->sendEmail($order, $total, $subtotal); //Goi ham gui email

            //3.Xoa gio hang
        foreach ($items as $item)
        {
            DB::table('cart_item')->where('id', $item->id)->delete();
        }

        //4.Tra ve ket qua thong bao
        return redirect('checkout/result')->with('notification','Success! You will pay on delivery. Please check your email');
        }

        if ($request->payment_type == 'VNPAY'){
            //1. Lay URL thanh toan vnpay
            $data_url = VNPay::vnpay_create_payment([
                'vnp_TxnRef'=> $order->id, //ID cua don hang
                'vnp_OrderInfo' =>'Mo ta don hang', //Mo ta don hang
                'vnp_Amount' => $total * 23510, //Tong gia cua don hang x23.510 ( ti gia lay ngay 15/12/2022)
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
        $items = $this->cart->get();
        //2. Kiem tra data, xem ket qua giao dich tra ve tu VNPay hop le khong

        if ($vnp_ResponseCode != null){
            //Neu thanh cong
            if($vnp_ResponseCode == 00){
                $items = $this->cart->get();
                $total = 0;
                foreach ($items as $item) {
                    $total += $item->total;
                }
                $subtotal = $total;
                $order = $this->orderService->find($vnp_TxnRef); //$vnp_TxnRef chinh la id order

                $this->sendEmail($order, $total, $subtotal); //Goi ham gui email

                //Xoa gio hang
                foreach ($items as $item)
                {
                    DB::table('cart_item')->where('id', $item->id)->delete();
                }

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
        $categories = $this->productCategoryService->all();
        $cartItems = $this->cartHelper->get();
        $notification = session('notification');
        return view('front.checkout.result',compact('notification','categories','cartItems'));
    }


    public function sendEmail($order, $total, $subtotal)
    {
        $email_to = $order->email;

        Mail::send('front.checkout.mail',compact('order','total','subtotal'),
            function ($message) use ($email_to){
                $message->from('micoshop1999@gmail.com','MiCoShop');
                $message->to($email_to, $email_to);
                $message->subject('Order Notification');
        });

    }


}



