<?php
namespace App\Helper;

use Illuminate\Support\Facades\Auth;
use App\Services\Product\ProductServiceInterface;
use DB;
class CartHelper
{
    private ProductServiceInterface $productService;

    public function __construct(ProductServiceInterface $productService)
    {;
        $this->productService = $productService;
    }


    public function get() {
        $user_id = Auth::user()->id;
        $cart = DB::table('cart')->where('id_user', $user_id)->get();
        $items = DB::table('cart_item')->where('id_cart', $cart[0]->id)->get();

        return $items;
    }

    public function add($id, $quantity = 1, $size = 'M',$color = 'black')
    {
        $is_success = false;
        $message = "";

        if(Auth::check()) {

            $product = $this->productService->find($id);

            $user_id = Auth::user()->id;

            $cart = DB::table('cart')->where('id_user', $user_id)->get();

            $product_image = DB::table('product_images')->where('product_id', $id)->get();

            $data = [
                'id_cart' => $cart[0]->id,
                'product_image' => $product_image[0]->path,
                'product_name' => $product->name,
                'product_size' => $size,
                'product_color' => $color,
                'product_price' => $product->price,
                'qty' => $quantity,
                'total' => $product->price * $quantity,
            ];

            DB::table('cart_item')->insert($data);

            $is_success = true;
            $message = "Product have been added";
        } else {
            $message = "Please login before add product to your cart.";

        }


        return [
            'is_success' => $is_success,
            'message' => $message,
        ];
    }

    public function delete($id)
    {
        DB::table('cart_item')->where('id', $id)->delete();

        return [
            'message' => 'Product have been removed'
        ];
    }

    public function update($id, $qty, $price)
    {
        DB::table('cart_item')->where('id',$id)->update(array(
            'qty'=>$qty,
            'total'=> $qty * $price

        ));

    }


    private function get_total_price(){
        $t = 0;

        foreach ($this->cart_items as $cart_item){
            $t += $cart_item['price'] * $cart_item['quantity'];
        }
        return $t;
    }

    private function get_total_quantity(){
        $t = 0;

        foreach ($this->cart_items as $cart_item){
            $t += $cart_item['quantity'];
        }
        return $t;
    }


}
