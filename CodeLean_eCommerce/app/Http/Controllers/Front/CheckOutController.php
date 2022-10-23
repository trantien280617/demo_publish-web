<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Models\Order;
use App\Models\OrderDetail;


class CheckOutController extends Controller
{
    public function index() {

    	$carts = Cart::content();
    	$total = Cart::total();
    	$subtotal = Cart::subtotal();

    	return view('front.checkout.index', compact('carts', 'total', 'subtotal'));
    }

    public function addOrder(Request $request) {

    	if ($request->payment_type == 'pay_later') {
    		//01.Thêm đơn hàng
    	    $order = Order::create($request->all());

    	    //02.thêm chi tiết đơn hàng
    	    $carts = Cart::content();

    	    foreach($carts as $cart) {
    		    $data = [
    			    'order_id' => $order->id,
    			    'product_id' => $cart->id,
    			    'qty' => $cart->qty,
    			    'amount' => $cart->price,
    			    'total' => $cart->price * $cart->qty,
    		    ];

    		    OrderDetail::create($data);
    	    }

    	    

    	    //04.Xóa giỏ hàng
    	    Cart::destroy();

    	    //05.Trả về kết quả
    	    return "Success ^-^ !!!";
        } else {
        	return "Online payment method is not supported.";
        }
    }

    
}
