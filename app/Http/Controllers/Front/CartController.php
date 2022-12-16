<?php

namespace App\Http\Controllers\Front;

use DB;
use App\Http\Controllers\Controller;
use App\Services\Product\ProductServiceInterface;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Helper\CartHelper;


class CartController extends Controller
{
    private $cart;

    public function __construct(CartHelper $cart)
    {
        $this->cart = $cart;
    }

    public function index()
    {
        $items = $this->cart->get();
        $total = Cart::total();
        $subtotal = Cart::subtotal();

        return view('front.shop.cart',compact('items','total','subtotal'));
    }

    public function add($id)
    {
        $data = $this->cart->add($id);
        if ($data['is_success'])
            return back()->with('notification',$data['message']);

        return redirect('account/login')->with('notification',$data['message']);
    }

    public function delete($id)
    {
        $data = $this->cart->delete($id);

        return back()->with('notification',$data['message']);
    }

    public function update($id, $qty, $price)
    {
        $this->cart->update($id, $qty, $price);
        return back();
    }

    public function get_total_price(){
        $this->cart->get_total_price();
         return back();
    }

    public function get_total_quantity(){
        $this->cart->get_total_quantity();
        return back();
    }

}
