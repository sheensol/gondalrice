<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\OrderDetail;
use App\User;
use App\Country;
use Hash;

class UserController extends Controller
{
    public function showProfile()
    {
        $orders = Order::where('user_id',auth()->user()->id)->get();
        //$user = User::where('id',auth()->user()->id)->first();
        $countries = Country::all();
        return view('myaccount', compact('orders','countries'));
    }

    public function showInvoiceDetail($order_id)
    {
        $order = Order::where('user_id',auth()->user()->id)->where('id',$order_id)->first();
        $orderDetails = OrderDetail::where('order_id',$order_id)->get();
        //dd("jaleel");
        return view('invoice_detail', compact('order','orderDetails'));
    }

    public function printInvoiceDetail($order_id)
    {
        $order = Order::where('user_id',auth()->user()->id)->where('id',$order_id)->first();
        $orderDetails = OrderDetail::where('order_id',$order_id)->get();
        return view('print_invoice_detail', compact('order','orderDetails'));
    }

    public function doProfile(Request $request)
    {
        //dd("profile");
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

        \Session::flash('success', 'Your profile has been updated successfully!');
        return redirect()->intended('/my-account');
    }

    public function changePassword(Request $request)
    {
        //dd("change password");
        $this->validate($request, [
            'current_password'   => 'required|min:4',
            'new_password' => 'required|min:4',
            'confirm_password' => 'required|min:4||same:new_password'
        ]);

        $current_password = auth()->user()->password;
        if(Hash::check($request->current_password, $current_password)) {
            $user_id = auth()->User()->id;
            $objuser = User::find($user_id);
            $objuser->password = Hash::make($request->new_password);
            $objuser->save();
            \Session::flash('success', 'Your password has been changed successfully!');
            return redirect()->back();
        }
        else
        {
            \Session::flash('error', 'Please enter correct current password');
            return redirect()->back();
        }
    }

    public function thanksPage()
    {
        return view('thanks');
    }

}
