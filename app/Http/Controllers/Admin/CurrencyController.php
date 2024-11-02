<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Str;
use Auth;
use App\Currency;

class CurrencyController extends Controller
{
    public function index()
    {
        if(!Auth::guard('admin')->check()) {
            redirect()->route('admin.login')->send();
        }

        $currencies = Currency::orderBy('updated_at', 'desc')->get();
        return view('admin.view_currency', compact('currencies'));
    }

    public function create()
    {
        if(!Auth::guard('admin')->check()) {
            redirect()->route('admin.login')->send();
        }

        return view('admin.add_currency');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name'   => 'required',
            'description'   => 'required',
            'image'   => 'required',
            'meta_title' => 'required',
            'meta_description' => 'required'
        ]);

        $currency = new Currency();
        $photo = $request->file('image');
        $image_name = $photo->getClientOriginalName();
        $image_name = explode(".",$image_name);
        if($photo) {
            $tmpFilePath = public_path('assets/images/currencies/');
            $imageName = $image_name[0].'_'.time().'.'.$photo->extension();
            $photo->move($tmpFilePath, $imageName);
            $currency->image = $imageName;
        }
        $currency->title = $request['name'];
        $slug = Str::slug($request['name'], "-");
        $currency->slug = $slug;
        $currency->description = $request['description'];
        $currency->meta_title = $request['meta_title'];
        $currency->meta_description = $request['meta_description'];
        $currency->save();

        return redirect()->back()->with('success', 'Currency has been submitted successfully');
    }

    public function edit($id)
    {
        if(!Auth::guard('admin')->check()) {
            redirect()->route('admin.login')->send();
        }
        $currency = Currency::where('id', $id)->first();
        return view('admin.edit_currency', compact('currency'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name'   => 'required',
            'symbol' => 'required'
        ]);

        $currency = Currency::findOrFail($id);
        $currency->name = $request['name'];
        $currency->abbreviation = $request['abbreviation'];
        $currency->symbol = $request['symbol'];
        $currency->is_default = $request['is_default'];
        $currency->save();

        return redirect()->back()->with('success', 'Currency has been updated successfully');
    }

    public function destroy($id)
    {
        $currency = Currency::findOrFail($id);
        $currency->delete();

        return redirect()->back()->with('success', 'Currency has been deleted successfully');
    }
}
