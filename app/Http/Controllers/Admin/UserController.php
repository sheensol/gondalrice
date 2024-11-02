<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Str;
use Auth;
use App\User;
use Hash;

class UserController extends Controller
{
    public function index()
    {
        if(!Auth::guard('admin')->check()) {
            redirect()->route('admin.login')->send();
        }

        $users = User::orderBy('updated_at', 'desc')->get();
        return view('admin.view_user', compact('users'));
    }

    public function create()
    {
        if(!Auth::guard('admin')->check()) {
            redirect()->route('admin.login')->send();
        }

        return view('admin.add_user');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'first_name' => 'required',
            'last_name' => 'required',
            'address1' => 'required',
            'city' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:4'
        ]);

        $user = new User();
        $user->first_name = $request['first_name'];
        $user->last_name = $request['last_name'];
        $user->address1 = $request['address1'];
        $user->address2 = $request['address2'];
        $user->city = $request['city'];
        $user->phone = $request['phone'];
        $user->email = $request['email'];
        $user->password = Hash::make($request['password']);
        $user->status = $request['status'];
        $user->save();

        return redirect()->back()->with('success', 'User has been submitted successfully');
    }

    public function edit($id)
    {
        if(!Auth::guard('admin')->check()) {
            redirect()->route('admin.login')->send();
        }
        $user = User::where('id', $id)->first();
        return view('admin.edit_user', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'first_name' => 'required',
            'last_name' => 'required',
            'address1' => 'required',
            'city' => 'required',
            'phone' => 'required',
            'email' => 'required|email'
        ]);

        $user = User::findOrFail($id);
        $user->first_name = $request['first_name'];
        $user->last_name = $request['last_name'];
        $user->address1 = $request['address1'];
        $user->address2 = $request['address2'];
        $user->city = $request['city'];
        $user->phone = $request['phone'];
        $user->email = $request['email'];
        if($request['password']) {
            $user->password = Hash::make($request['password']);
        }
        $user->status = $request['status'];
        $user->save();

        return redirect()->back()->with('success', 'User has been updated successfully');
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->back()->with('success', 'User has been deleted successfully');
    }
}
