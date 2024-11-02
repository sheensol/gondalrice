<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Str;
use Auth;
use App\Gallery;

class GalleryController extends Controller
{
    public function index()
    {
        if(!Auth::guard('admin')->check()) {
            redirect()->route('admin.login')->send();
        }

        $galleries = Gallery::orderBy('updated_at', 'desc')->get();
        return view('admin.view_gallery', compact('galleries'));
    }

    public function create()
    {
        if(!Auth::guard('admin')->check()) {
            redirect()->route('admin.login')->send();
        }

        return view('admin.add_gallery');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name'   => 'required',
            'image'   => 'required'
        ]);

        $gallery = new Gallery();
        $photo = $request->file('image');
        $image_name = $photo->getClientOriginalName();
        $image_name = explode(".",$image_name);
        if($photo) {
            $tmpFilePath = public_path('assets/images/galleries/');
            $imageName = $image_name[0].'_'.time().'.'.$photo->extension();
            $photo->move($tmpFilePath, $imageName);
            $gallery->image = $imageName;
        }
        $gallery->name = $request['name'];
        $gallery->save();

        return redirect()->back()->with('success', 'Gallery has been submitted successfully');
    }

    public function edit($id)
    {
        if(!Auth::guard('admin')->check()) {
            redirect()->route('admin.login')->send();
        }
        $gallery = Gallery::where('id', $id)->first();
        return view('admin.edit_gallery', compact('gallery'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name'   => 'required'
        ]);

        $gallery = Gallery::findOrFail($id);

        $photo = $request->file('image');
        if($photo) {
            \File::delete(public_path() .'/assets/images/galleries/'.$gallery->image);
            $photo_name = $photo->getClientOriginalName();
            $photo_name = explode(".",$photo_name);
            $tmpFilePath = public_path('assets/images/galleries');
            $imageName = $photo_name[0].'_'.time().'.'.$photo->extension();
            $photo->move($tmpFilePath, $imageName);
            $gallery->image = $imageName;
        }

        $gallery->name = $request['name'];
        $gallery->save();

        return redirect()->back()->with('success', 'Gallery has been updated successfully');
    }

    public function destroy($id)
    {
        $gallery = Gallery::findOrFail($id);
        \File::delete(public_path() .'/assets/images/galleries/'.$gallery->image);
        $gallery->delete();

        return redirect()->back()->with('success', 'Gallery has been deleted successfully');
    }
}
