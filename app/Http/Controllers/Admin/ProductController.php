<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Auth;
use App\Category;
use App\Product;

class ProductController extends Controller
{
    public function index()
    {
        if(!Auth::guard('admin')->check()) {
            redirect()->route('admin.login')->send();
        }

        $products = Product::orderBy('updated_at', 'desc')->get();
        return view('admin.view_product', compact('products'));
    }

    public function create()
    {
        if(!Auth::guard('admin')->check()) {
            redirect()->route('admin.login')->send();
        }

        $categories = Category::where('status', 1)->get();
        return view('admin.add_product', compact('categories'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'category'   => 'required',
            'name'   => 'required',
            'product_code'   => 'required',
            'description'   => 'required',
            'hprice'   => 'required',
            'price'   => 'required',
            'meta_title' => 'required',
            'meta_description' => 'required'
        ]);

        $product = new Product();

        $photo = $request->file('image');
        $image_name = $photo->getClientOriginalName();
        $image_name = explode(".",$image_name);
        if($photo) {
            $tmpFilePath = public_path('assets/images/products/');
            $imageName = $image_name[0].'_'.time().'.'.$photo->extension();
            $photo->move($tmpFilePath, $imageName);
            $product->image = $imageName;
        }

        $product->category_id = $request['category'];
        $product->name = $request['name'];
        $slug = Str::slug($request['name'], "-");
        $product->slug = $slug;
        $product->product_code = $request['product_code'];
        $product->description = $request['description'];
        $product->hprice = $request['hprice'];
        $product->price = $request['price'];
        $product->brand = $request['brand'];
        $product->weight = $request['weight'];
        $product->quality = $request['quality'];
        $product->rating = $request['rating'];
        $product->is_stock = $request['is_stock'];
        $product->is_featured = $request['is_featured'];
        $product->is_deal_day = $request['is_dealday'];
        $product->meta_title = $request['meta_title'];
        $product->meta_description = $request['meta_description'];
        $product->save();

        return redirect()->back()->with('success', 'Product has been submitted successfully');
    }

    public function edit($id)
    {
        if(!Auth::guard('admin')->check()) {
            redirect()->route('admin.login')->send();
        }
        $categories = Category::where('status', 1)->get();
        $product = Product::where('id', $id)->first();
        return view('admin.edit_product', compact('categories','product'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'category'   => 'required',
            'name'   => 'required',
            'product_code'   => 'required',
            'description'   => 'required',
            'hprice'   => 'required',
            'price'   => 'required',
            'meta_title' => 'required',
            'meta_description' => 'required'
        ]);

        $product = Product::findOrFail($id);

        $photo = $request->file('image');
        if($photo) {
            \File::delete(public_path() .'/assets/images/products/'.$product->image);
            $photo_name = $photo->getClientOriginalName();
            $photo_name = explode(".",$photo_name);
            $tmpFilePath = public_path('assets/images/products');
            $imageName = $photo_name[0].'_'.time().'.'.$photo->extension();
            $photo->move($tmpFilePath, $imageName);
            $product->image = $imageName;
        }

        $product->category_id = $request['category'];
        $product->name = $request['name'];
        $slug = Str::slug($request['name'], "-");
        $product->slug = $slug;
        $product->product_code = $request['product_code'];
        $product->description = $request['description'];
        $product->hprice = $request['hprice'];
        $product->price = $request['price'];
        $product->brand = $request['brand'];
        $product->weight = $request['weight'];
        $product->quality = $request['quality'];
        $product->rating = $request['rating'];
        $product->is_stock = $request['is_stock'];
        $product->is_featured = $request['is_featured'];
        $product->is_deal_day = $request['is_dealday'];
        $product->meta_title = $request['meta_title'];
        $product->meta_description = $request['meta_description'];
        $product->save();

        return redirect()->back()->with('success', 'Product has been updated successfully');
    }

    public function destroy($id)
    {
        $product_obj = Product::findOrFail($id);
        \File::delete(public_path() .'/assets/images/products/'.$product_obj->image);
        $product_obj->delete();

        return redirect()->back()->with('success', 'Product has been deleted successfully');
    }
}
