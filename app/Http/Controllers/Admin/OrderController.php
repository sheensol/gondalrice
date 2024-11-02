<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\OrderDetail;
use App\User;
use Illuminate\Http\Request;

use Illuminate\Support\Str;
use Auth;
use App\Order;

class OrderController extends Controller
{
    public function index()
    {
        if(!Auth::guard('admin')->check()) {
            redirect()->route('admin.login')->send();
        }

        $orders = Order::orderBy('updated_at', 'desc')->get();
        return view('admin.view_order', compact('orders'));
    }

    public function create()
    {
        if(!Auth::guard('admin')->check()) {
            redirect()->route('admin.login')->send();
        }

        return view('admin.add_order');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name'   => 'required',
            'description'   => 'required',
            'meta_title' => 'required',
            'meta_description' => 'required'
        ]);

        $order = new Order();
        $order->title = $request['name'];
        $order->description = $request['description'];
        $order->meta_title = $request['meta_title'];
        $order->meta_description = $request['meta_description'];
        $order->save();

        return redirect()->back()->with('success', 'Order has been submitted successfully');
    }

    public function edit($id)
    {
        if(!Auth::guard('admin')->check()) {
            redirect()->route('admin.login')->send();
        }
        $order = Order::where('id', $id)->first();
        return view('admin.edit_order', compact('order'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name'   => 'required',
            'meta_title' => 'required',
            'meta_description' => 'required'
        ]);

        $order = Order::findOrFail($id);
        $order->title = $request['name'];
        $order->description = $request['description'];
        $order->meta_title = $request['meta_title'];
        $order->meta_description = $request['meta_description'];
        $order->save();

        return redirect()->back()->with('success', 'Order has been updated successfully');
    }

    public function destroy($id)
    {
        $order = Order::findOrFail($id);
        $order->delete();

        return redirect()->back()->with('success', 'Order has been deleted successfully');
    }

    public function orderDetail($order_id)
    {
        if(!Auth::guard('admin')->check()) {
            redirect()->route('admin.login')->send();
        }
        $order = Order::where('id', $order_id)->first();
        $user = User::where('status', 1)->where('id', $order->user_id)->first();
        $orderDetails = OrderDetail::where('order_id', $order_id)->get();
        return view('admin.view_order_detail', compact('user','order','orderDetails'));
    }
}
