<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Str;
use Auth;
use App\Testimonial;

class TestimonialController extends Controller
{
    public function index()
    {
        if(!Auth::guard('admin')->check()) {
            redirect()->route('admin.login')->send();
        }

        $testimonials = Testimonial::orderBy('updated_at', 'desc')->get();
        return view('admin.view_testimonial', compact('testimonials'));
    }

    public function create()
    {
        if(!Auth::guard('admin')->check()) {
            redirect()->route('admin.login')->send();
        }

        return view('admin.add_testimonial');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name'   => 'required',
            'testimonial'   => 'required',
            'image'   => 'required'
        ]);

        $testimonial = new Testimonial();
        $photo = $request->file('image');
        $image_name = $photo->getClientOriginalName();
        $image_name = explode(".",$image_name);
        if($photo) {
            $tmpFilePath = public_path('assets/images/testimonials/');
            $imageName = $image_name[0].'_'.time().'.'.$photo->extension();
            $photo->move($tmpFilePath, $imageName);
            $testimonial->image = $imageName;
        }
        $testimonial->name = $request['name'];
        $testimonial->description = $request['testimonial'];
        $testimonial->save();

        return redirect()->back()->with('success', 'Testimonial has been submitted successfully');
    }

    public function edit($id)
    {
        if(!Auth::guard('admin')->check()) {
            redirect()->route('admin.login')->send();
        }
        $testimonial = Testimonial::where('id', $id)->first();
        return view('admin.edit_testimonial', compact('testimonial'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name'   => 'required',
            'testimonial'   => 'required'
        ]);

        $testimonial = Testimonial::findOrFail($id);

        $photo = $request->file('image');
        if($photo) {
            \File::delete(public_path() .'/assets/images/testimonials/'.$testimonial->image);
            $photo_name = $photo->getClientOriginalName();
            $photo_name = explode(".",$photo_name);
            $tmpFilePath = public_path('assets/images/testimonials');
            $imageName = $photo_name[0].'_'.time().'.'.$photo->extension();
            $photo->move($tmpFilePath, $imageName);
            $testimonial->image = $imageName;
        }

        $testimonial->name = $request['name'];
        $testimonial->description = $request['testimonial'];
        $testimonial->save();

        return redirect()->back()->with('success', 'Testimonial has been updated successfully');
    }

    public function destroy($id)
    {
        $testimonial = Testimonial::findOrFail($id);
        \File::delete(public_path() .'/assets/images/testimonials/'.$testimonial->image);
        $testimonial->delete();

        return redirect()->back()->with('success', 'Testimonial has been deleted successfully');
    }
}
