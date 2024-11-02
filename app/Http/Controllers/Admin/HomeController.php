<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Category;
use App\Product;
use App\User;
use App\Order;
use App\Blog;
use App\Gallery;
use App\Testimonial;

class HomeController extends Controller
{
    public function __construct()
    {
        /*if(!Auth::guard('admin')->check()) {
            //dd("login success");
            //return redirect('admin/login')->send();
            redirect()->route('admin.login')->send();
        }*/
    }

    public function index()
    {
        if(!Auth::guard('admin')->check()) {
            redirect()->route('admin.login')->send();
        }
        redirect()->route('admin.dashboard')->send();
    }

    public function dashboard()
    {
        if(!Auth::guard('admin')->check()) {
            redirect()->route('admin.login')->send();
        }

        $categories = Category::where('status',1)->count();
        $products = Product::where('status',1)->count();
        $users = User::where('status',1)->count();
        $orders = Order::where('status',1)->count();
        $blogs = Blog::where('status',1)->count();
        $galleries = Gallery::where('status',1)->count();
        $testimonials = Testimonial::where('status',1)->count();

        //return view('admin.dashboard');
        return view('admin.dashboard', compact('categories','products','users','orders','blogs','galleries','testimonials'));
    }
}
