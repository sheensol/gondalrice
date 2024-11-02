<?php

use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'Admin', 'prefix' => 'admin'], function () {
    //Route::group(['middleware' => ['auth']], function() {
        Route::get('/', 'HomeController@index');
        Route::get('dashboard', 'HomeController@dashboard')->name('admin.dashboard');
        Route::get('login', 'LoginController@showLoginForm')->name('admin.login');
        Route::post('login', 'LoginController@doLogin')->name('admin.login');
        Route::get('logout', 'LoginController@logout')->name('admin.logout');

        Route::get('categories', 'CategoryController@index')->name('admin.categories');
        Route::get('category/create', 'CategoryController@create')->name('admin.add_category');
        Route::post('category/create', 'CategoryController@store')->name('admin.add_category');
        Route::get('category/edit/{id}', 'CategoryController@edit')->name('admin.edit_category');
        Route::post('category/edit/{id}', 'CategoryController@update')->name('admin.edit_category');
        Route::get('category/delete/{id}', 'CategoryController@destroy')->name('admin.delete_category');

        Route::get('products', 'ProductController@index')->name('admin.products');
        Route::get('product/create', 'ProductController@create')->name('admin.add_product');
        Route::post('product/create', 'ProductController@store')->name('admin.add_product');
        Route::get('product/edit/{id}', 'ProductController@edit')->name('admin.edit_product');
        Route::post('product/edit/{id}', 'ProductController@update')->name('admin.edit_product');
        Route::get('product/delete/{id}', 'ProductController@destroy')->name('admin.delete_product');

        Route::get('blogs', 'BlogController@index')->name('admin.blogs');
        Route::get('blog/create', 'BlogController@create')->name('admin.add_blog');
        Route::post('blog/create', 'BlogController@store')->name('admin.add_blog');
        Route::get('blog/edit/{id}', 'BlogController@edit')->name('admin.edit_blog');
        Route::post('blog/edit/{id}', 'BlogController@update')->name('admin.edit_blog');
        Route::get('blog/delete/{id}', 'BlogController@destroy')->name('admin.delete_blog');

        Route::get('galleries', 'GalleryController@index')->name('admin.galleries');
        Route::get('gallery/create', 'GalleryController@create')->name('admin.add_gallery');
        Route::post('gallery/create', 'GalleryController@store')->name('admin.add_gallery');
        Route::get('gallery/edit/{id}', 'GalleryController@edit')->name('admin.edit_gallery');
        Route::post('gallery/edit/{id}', 'GalleryController@update')->name('admin.edit_gallery');
        Route::get('gallery/delete/{id}', 'GalleryController@destroy')->name('admin.delete_gallery');

        Route::get('testimonials', 'TestimonialController@index')->name('admin.testimonials');
        Route::get('testimonial/create', 'TestimonialController@create')->name('admin.add_testimonial');
        Route::post('testimonial/create', 'TestimonialController@store')->name('admin.add_testimonial');
        Route::get('testimonial/edit/{id}', 'TestimonialController@edit')->name('admin.edit_testimonial');
        Route::post('testimonial/edit/{id}', 'TestimonialController@update')->name('admin.edit_testimonial');
        Route::get('testimonial/delete/{id}', 'TestimonialController@destroy')->name('admin.delete_testimonial');

        Route::get('currencies', 'CurrencyController@index')->name('admin.currencies');
        Route::get('currency/create', 'CurrencyController@create')->name('admin.add_currency');
        Route::post('currency/create', 'CurrencyController@store')->name('admin.add_currency');
        Route::get('currency/edit/{id}', 'CurrencyController@edit')->name('admin.edit_currency');
        Route::post('currency/edit/{id}', 'CurrencyController@update')->name('admin.edit_currency');
        Route::get('currency/delete/{id}', 'CurrencyController@destroy')->name('admin.delete_currency');

        Route::get('orders', 'OrderController@index')->name('admin.orders');
        Route::get('order/create', 'OrderController@create')->name('admin.add_order');
        Route::post('order/create', 'OrderController@store')->name('admin.add_order');
        Route::get('order/edit/{id}', 'OrderController@edit')->name('admin.edit_order');
        Route::post('order/edit/{id}', 'OrderController@update')->name('admin.edit_order');
        Route::get('order/detail/{id}', 'OrderController@orderDetail')->name('admin.order_detail');
        Route::get('order/delete/{id}', 'OrderController@destroy')->name('admin.delete_order');

        Route::get('users', 'UserController@index')->name('admin.users');
        Route::get('user/create', 'UserController@create')->name('admin.add_user');
        Route::post('user/create', 'UserController@store')->name('admin.add_user');
        Route::get('user/edit/{id}', 'UserController@edit')->name('admin.edit_user');
        Route::post('user/edit/{id}', 'UserController@update')->name('admin.edit_user');
        Route::get('user/delete/{id}', 'UserController@destroy')->name('admin.delete_user');

    //});
});

Route::get('/', 'HomeController@index');

Route::get('about-us', 'HomeController@about')->name('about');

Route::get('blogs', 'HomeController@blogs')->name('blog');
Route::get('blog/{slug}', 'HomeController@blogDetail')->name('blog_detail');

Route::get('gallery', 'HomeController@gallery')->name('gallery');

Route::get('contact-us', 'HomeController@contact')->name('contact');
Route::post('contact-us', 'HomeController@doContact')->name('contact');

Route::get('register', 'LoginController@showRegister')->name('register');
Route::post('register', 'LoginController@doRegister')->name('register');

Route::get('login', 'LoginController@showLogin')->name('login');
Route::post('login', 'LoginController@doLogin')->name('login');

Route::get('forgot-password', 'LoginController@showForgotPassword')->name('forgot_password');
Route::post('forgot-password', 'LoginController@doForgotPassword')->name('forgot_password');

Route::get('logout', 'LoginController@logout')->name('logout');

Route::get('shop/{slug}', 'ProductController@getProducts')->name('product');
Route::get('product/{slug}', 'ProductController@productDetail')->name('product_detail');

Route::get('search', 'ProductController@searchProducts')->name('search_product');

Route::get('cart', 'CartController@showCart')->name('cart');
Route::post('add-cart', 'CartController@doCart')->name('add_cart');
Route::post('update-cart', 'CartController@updateCart')->name('update_cart');
Route::get('delete-cart/{cart_id}', 'CartController@deleteCart')->name('delete_cart');

Route::group(['middleware' => ['auth']], function() {
    Route::get('checkout', 'CartController@showCheckout')->name('checkout');
    Route::post('checkout', 'CartController@doCheckout')->name('checkout');

    Route::get('my-account', 'UserController@showProfile')->name('myaccount');

    Route::get('my-invoice/{order_id}', 'UserController@showInvoiceDetail')->name('invoice');
    Route::get('print-invoice/{order_id}', 'UserController@printInvoiceDetail')->name('print_invoice');

    Route::post('my-profile', 'UserController@doProfile')->name('myprofile');
    Route::post('change-password', 'UserController@changePassword')->name('change_password');

    Route::get('thanks', 'UserController@thanksPage')->name('thanks');
});

Route::post('change-status', 'CartController@changeOrderStatus')->name('change_status');

