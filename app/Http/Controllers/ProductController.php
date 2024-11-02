<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;
use App\RelatedProduct;

class ProductController extends Controller
{
    public function getProducts($slug)
    {
        $category = Category::where('status', 1)->where('slug', $slug)->first();
        $categories = Category::where('status', 1)->get();
        $products = Product::where('category_id', $category->id)->orderBy('updated_at', 'DESC')->paginate(9);
        return view('products',compact('category','products','categories'));
    }

    public function productDetail(Request $request)
    {
        $product = Product::where('slug', $request->slug)->first();
        $relatedProducts = RelatedProduct::where('product_id', $product->id)->get();
        return view('product_detail',compact('product','relatedProducts'));
    }

    public function searchProducts(Request $request)
    {
        $keyword = $request->search_products;
        $products = Product::where('name','like','%'.$keyword.'%')->orWhere('description','like','%'.$keyword.'%')->orderBy('updated_at', 'DESC')->paginate(9);
        return view('search_products',compact('products','keyword'));
    }
}
