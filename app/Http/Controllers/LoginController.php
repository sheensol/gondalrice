<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\User;
use App\Cart;
use Auth;
use Session;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function __construct()
    {
        //$this->middleware('guest')->except('logout');
        //$this->middleware('guest:admin')->except('logout');
        $this->middleware('guest:web')->except('logout');
    }

    public function showRegister()
    {
        return view('register');
    }

    public function doRegister(Request $request)
    {
        $this->validate($request, [
            'first_name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:4',
            'cpassword' => 'required|min:4||same:password'
        ]);

        $user = User::create([
            'first_name' => $request['first_name'],
            'last_name' => $request['last_name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);

        $sess_id = session()->getId();

        if($user) {
            if (Auth::guard('web')->attempt(['email' => $request->email, 'password' => $request->password, 'status' => 1])) {
                Cart::where('session_id',$sess_id)->update(['user_id'=>auth()->user()->id, 'session_id'=>session()->getId()]);
                return redirect()->intended('/my-account');
            }
        } else {
            \Session::flash('error', 'Your registration has been faild! Please try again!');
            return back();
        }
    }

    public function showLogin()
    {
        return view('login');
    }

    public function doLogin(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:4'
        ]);

        $sess_id = session()->getId();

        if (Auth::guard('web')->attempt(['email' => $request->email, 'password' => $request->password, 'status' => 1])) {
            Cart::where('session_id',$sess_id)->update(['user_id'=>auth()->user()->id, 'session_id'=>session()->getId()]);
            return redirect()->intended('/my-account');
        }
        \Session::flash('error', 'Email or password incorrect');
        return back()
            ->withInput($request->only('email'));
    }


    public function showForgotPassword()
    {
        return view('forgot_password');
    }

    public function doForgotPassword(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required|email',
        ]);

        //email code here

        $isAlreadyExists = User::checkUserExists($request->email);
        if($isAlreadyExists) {
            dd("Email code here!");
        } else {
            dd("your email does not exists!");
        }

        \Session::flash('error', 'Your email is not valid');
        return back()
            ->withInput($request->only('email'));
    }

    public function logout(Request $request)
    {
        Auth::logout();

        //$request->session()->flush();
        Session::flush();
        Session::regenerate();

        //$request->session()->regenerate();

        return redirect()->intended('login');
    }
}
