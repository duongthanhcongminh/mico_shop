<?php

namespace App\Http\Controllers\Front;

use App\Services\ProductCategory\ProductCategoryServiceInterface;
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
    private ProductCategoryServiceInterface $productCategoryService;
    private $request;
    private $cartHelper;

    public function __construct(CartHelper $cart,
                                ProductCategoryServiceInterface $productCategoryService, Request $request, CartHelper $cartHelper)
    {
        $this->cart = $cart;
        $this->productCategoryService = $productCategoryService;
        $this->request = $request;
        $this->cartHelper = $cartHelper;
    }

    public function show()
    {
        $categories = $this->productCategoryService->all();
        $cartItems = $this->cartHelper->get();

        return view('front.shop.show',compact('categories','cartItems'));
    }

    public function index()
    {
        $items = $this->cart->get();
        $total = 0;
        $categories = $this->productCategoryService->all();
        $cartItems = $this->cartHelper->get();

        foreach ($items as $item) {
            $total += $item->total;
        }
        $subtotal = $total;

        return view('front.shop.cart',compact('items','total','categories','subtotal','cartItems'));
    }

    public function add($id)
    {

        $color = $this->request->get('color');
        $size = $this->request->get('size');
        $qty = $this->request->get('qty');

        $data = $this->cart->add($id,$qty,$size,$color);
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



}
