<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\CustomSendMail;
use App\Category;
use App\Product;
use App\Testimonial;
use App\Blog;
use App\Gallery;
use App\Currency;
use Session;

class HomeController extends Controller
{
    public function __construct()
    {
        $currency = Currency::where('is_default',1)->pluck('symbol')->first();
        session(['currency' => $currency]);
        //$value = session('currency');
    }

    public function index()
    {
        //dd(session()->getId());
        $categories = Category::take(5)->get();
        $products = Product::where('is_featured','Yes')->take(8)->orderBy('updated_at', 'DESC')->get();
        $dealDayProduct = Product::where('is_deal_day','Yes')->first();
        $testimonials = Testimonial::inRandomOrder()->take(3)->get();
        $blogs = Blog::inRandomOrder()->take(2)->get();

        return view('welcome', compact('categories','products','dealDayProduct','testimonials','blogs'));
    }

    public function about()
    {
        return view('about_us');
    }

    public function blogs()
    {
        $blogs = Blog::where('status',1)->paginate(6);
        return view('blogs',compact('blogs'));
    }

    public function blogDetail(Request $request)
    {
        $slug = $request->slug;
        $blog = Blog::where('status',1)->where('slug',$slug)->first();
        $blogs = Blog::where('status',1)->take(5)->orderBy('updated_at', 'DESC')->get();
        return view('blog_detail',compact('blog','blogs'));
    }

    public function gallery()
    {
        $galleries = Gallery::where('status',1)->paginate(6);
        return view('gallery',compact('galleries'));
    }

    public function contact()
    {
        return view('contact_us');
    }

    public function doContact(Request $request)
    {
        $contact_detail = [
            'name' => $request->name,
            'email' => $request->email,
            'address' => $request->address,
            'phone' => $request->phone,
            'message' => $request->message,
        ];

        Mail::to('sheensoltech@gmail.com')->send(new CustomSendMail($contact_detail));

        \Session::flash('success', 'Your email has been sent successfully!');
        return redirect()->intended('/contact-us');
    }

}
