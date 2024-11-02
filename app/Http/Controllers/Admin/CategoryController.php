<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Auth;
use App\Category;
use App\Product;

class CategoryController extends Controller
{
    public function index()
    {
        if(!Auth::guard('admin')->check()) {
            redirect()->route('admin.login')->send();
        }

        $categories = Category::orderBy('updated_at', 'desc')->get();
        return view('admin.view_category', compact('categories'));
    }

    public function create()
    {
        if(!Auth::guard('admin')->check()) {
            redirect()->route('admin.login')->send();
        }

        return view('admin.add_category');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name'   => 'required',
            'meta_title' => 'required',
            'meta_description' => 'required'
        ]);

        $category = new Category();
        $category->name = $request['name'];
        $slug = Str::slug($request['name'], "-");
        $category->slug = $slug;
        $category->meta_title = $request['meta_title'];
        $category->meta_description = $request['meta_description'];
        $category->save();

        return redirect()->back()->with('success', 'Category has been submitted successfully');
    }

    public function edit($id)
    {
        if(!Auth::guard('admin')->check()) {
            redirect()->route('admin.login')->send();
        }
        $category = Category::where('id', $id)->first();
        return view('admin.edit_category', compact('category'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name'   => 'required',
            'meta_title' => 'required',
            'meta_description' => 'required'
        ]);

        $category = Category::findOrFail($id);
        $category->name = $request['name'];
        $slug = Str::slug($request['name'], "-");
        $category->slug = $slug;
        $category->meta_title = $request['meta_title'];
        $category->meta_description = $request['meta_description'];
        $category->save();

        return redirect()->back()->with('success', 'Category has been updated successfully');
    }

    public function destroy($id)
    {
        $category = Category::findOrFail($id);

        $category->delete();

        $products = Product::where('category_id',$id)->get();

        foreach ($products as $product) {
            //\File::delete(public_path() .'/upload/gallery/'.$product->image_name);
            $product_obj = Product::findOrFail($product->id);
            $product_obj->delete();
        }

        return redirect()->back()->with('success', 'Category has been deleted successfully');
    }
}
