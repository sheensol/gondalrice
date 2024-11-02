<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Str;
use Auth;
use App\Blog;

class BlogController extends Controller
{
    public function index()
    {
        if(!Auth::guard('admin')->check()) {
            redirect()->route('admin.login')->send();
        }

        $blogs = Blog::orderBy('updated_at', 'desc')->get();
        return view('admin.view_blog', compact('blogs'));
    }

    public function create()
    {
        if(!Auth::guard('admin')->check()) {
            redirect()->route('admin.login')->send();
        }

        return view('admin.add_blog');
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

        $blog = new Blog();
        $photo = $request->file('image');
        $image_name = $photo->getClientOriginalName();
        $image_name = explode(".",$image_name);
        if($photo) {
            $tmpFilePath = public_path('assets/images/blogs/');
            $imageName = $image_name[0].'_'.time().'.'.$photo->extension();
            $photo->move($tmpFilePath, $imageName);
            $blog->image = $imageName;
        }
        $blog->title = $request['name'];
        $slug = Str::slug($request['name'], "-");
        $blog->slug = $slug;
        $blog->description = $request['description'];
        $blog->meta_title = $request['meta_title'];
        $blog->meta_description = $request['meta_description'];
        $blog->save();

        return redirect()->back()->with('success', 'Blog has been submitted successfully');
    }

    public function edit($id)
    {
        if(!Auth::guard('admin')->check()) {
            redirect()->route('admin.login')->send();
        }
        $blog = Blog::where('id', $id)->first();
        return view('admin.edit_blog', compact('blog'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name'   => 'required',
            'meta_title' => 'required',
            'meta_description' => 'required'
        ]);

        $blog = Blog::findOrFail($id);

        $photo = $request->file('image');
        if($photo) {
            \File::delete(public_path() .'/assets/images/blogs/'.$blog->image);
            $photo_name = $photo->getClientOriginalName();
            $photo_name = explode(".",$photo_name);
            $tmpFilePath = public_path('assets/images/blogs');
            $imageName = $photo_name[0].'_'.time().'.'.$photo->extension();
            $photo->move($tmpFilePath, $imageName);
            $blog->image = $imageName;
        }

        $blog->title = $request['name'];
        $slug = Str::slug($request['name'], "-");
        $blog->slug = $slug;
        $blog->description = $request['description'];
        $blog->meta_title = $request['meta_title'];
        $blog->meta_description = $request['meta_description'];
        $blog->save();

        return redirect()->back()->with('success', 'Blog has been updated successfully');
    }

    public function destroy($id)
    {
        $blog = Blog::findOrFail($id);
        \File::delete(public_path() .'/assets/images/blogs/'.$blog->image);
        $blog->delete();

        return redirect()->back()->with('success', 'Blog has been deleted successfully');
    }
}
