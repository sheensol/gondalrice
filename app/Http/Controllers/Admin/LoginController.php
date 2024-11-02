<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        if(Auth::guard('admin')->check()) {
            redirect()->route('admin.dashboard')->send();
        }

        return view('admin.login');
    }

    public function doLogin(Request $request)
    {
        if(Auth::guard('admin')->check()) {
            redirect()->route('admin.dashboard')->send();
        }

        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:4'
        ]);

        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password])) {

            return redirect()->intended('/admin');
        }
        \Session::flash('error', 'Email or password incorrect');
        return back()->withInput($request->only('email'));
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect()
            ->route('admin.login')
            ->with('status','Admin has been logged out!');
    }
}
