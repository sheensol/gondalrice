<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\OrderSendMail;

use App\Cart;
use App\Country;
use App\User;
use App\Order;
use App\OrderDetail;
use Auth;
use Mail;

class CartController extends Controller
{
    public function showCart(Request $request)
    {
        //dd(session()->getId());
        if (Auth::check()) {
            $carts = Cart::where('session_id',session()->getId())->orWhere('user_id',auth()->user()->id)->get();
        } else {
            $carts = Cart::where('session_id',session()->getId())->get();
        }

        return view('cart', compact('carts'));
    }

    public function doCart(Request $request)
    {
        $cart = new Cart();
        if (Auth::check()) {
            $cart->user_id = auth()->user()->id;
        }
        $cart->product_id = $request['product_id'];
        $cart->quantity = $request['quantity'];
        $cart->session_id = session()->getId();
        $cart->save();

        return redirect()->intended('/cart');
    }

    public function updateCart(Request $request)
    {
        $quantities = $request->quantity;
        $cartids = $request->cart_id;
        for ($i=0; $i<count($cartids); $i++) {
            $cart = Cart::findOrFail($cartids[$i]);
            $cart->quantity = $quantities[$i];
            $cart->save();
        }
        \Session::flash('success', 'Your cart has been update successfully!');
        return redirect()->intended('/cart');
    }

    public function deleteCart($cart_id)
    {
        $cart = Cart::findOrFail($cart_id);
        $cart->delete();

        \Session::flash('success', 'Your cart has been deleted successfully!');
        return redirect()->intended('/cart');
    }

    public function showCheckout()
    {
        //dd("checkolut");
        $userid = auth()->user()->id;
        $carts = Cart::where('user_id',$userid)->get();
        $countries = Country::all();
        return view('checkout', compact('carts','countries'));
    }

    public function doCheckout(Request $request)
    {
        //dd(session('total_amount'));
        $this->validate($request, [
            'address1' => 'required',
            'address2' => 'required',
            'city' => 'required',
            'phone' => 'required'
        ]);

        $user = User::findOrFail($request->user_id);
        //$user->company = $request->company;
        $user->address1 = $request->address1;
        $user->address2 = $request->address2;
        $user->city = $request->city;
        //$user->country = $request->country;
        //$user->zipcode = $request->postcode;
        $user->phone = $request->phone;
        $user->save();

        $order = new Order();
        $order->user_id = auth()->user()->id;
        $order->merchant_id = $request->payment;
        $order->invoice_no = 'GRM-'.rand(1000000,9999999);
        $order->total_amount = session('total_amount');
        $order->status = 1;
        $order->save();

        $insertedId = $order->id;
        $request->session()->forget('total_amount');

        $carts = Cart::where('user_id',auth()->user()->id)->get();
        if($carts->count() > 0) {
            foreach ($carts as $cart) {
                $orderDetail = new OrderDetail();
                $orderDetail->order_id = $insertedId;
                $orderDetail->product_id = $cart->product_id;
                $orderDetail->quantity = $cart->quantity;
                $orderDetail->save();
            }
        }

        /*$order_detail = [
            'subject' => "Thanks for order",
            'message' => "your order has been confirmed. thanks for ordering.",
        ];

        Mail::to('sales@maysamfood.com')->send(new OrderSendMail($order_detail));*/

        $result = Cart::where('user_id',auth()->user()->id)->delete();

        return redirect()->intended('/thanks');
    }

    public function changeOrderStatus(Request $request)
    {
        $order = Order::where('id',$request->id)->update(['status' => $request->status]);
        return response()->json(['success'=>'Status changed successfully.']);
    }
}
