@extends('layouts.app2')

@section('title', $product->meta_title)

@section('description')
    <meta name="description" content="{{$product->meta_description}}">
@endsection

@section('assets')

@endsection

@section('content')

    <!-- Title page -->
    <section class="how-overlay2 bg-img1" style="background-image: url('{{asset('assets/images/bg-07.jpg')}}');">
        <div class="container">
            <div class="txt-center p-t-160 p-b-165">
                <h2 class="txt-l-101 cl0 txt-center p-b-14 respon1">
                    shop
                </h2>

                <span class="txt-m-201 cl0 flex-c-m flex-w">
					<a href="{{url('/')}}" class="txt-m-201 cl0 hov-cl10 trans-04 m-r-6">
						Home
					</a>
                    @php
                        $category_slug = \App\Category::where('status', 1)->where('id', $product->category_id)->pluck('slug')->first();
                    @endphp
                    <a href="{{route('product',$category_slug)}}" class="txt-m-201 cl0 hov-cl10 trans-04 m-r-6">
						/ Products
					</a>

					<span>
						/ {{$product->name}}
					</span>
				</span>
            </div>
        </div>
    </section>

    <!-- Product detail -->
    <section class="sec-product-detail bg0 p-t-105 p-b-70">
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-lg-6">
                    <div class="m-r--30 m-r-0-lg">
                        <!-- Slide 100 -->
                        <div id="slide100-01">
                            <div class="wrap-main-pic-100 bo-all-1 bocl12 pos-relative">
                                <div class="main-frame">
                                    <div class="wrap-main-pic">
                                        <div class="main-pic">
                                            <img src="{{asset('assets/images/products/'.$product->image)}}" alt="IMG-SLIDE">
                                        </div>
                                    </div>
                                </div>

                                {{--<div class="wrap-arrow-slide-100 s-full ab-t-l trans-04">
                                    <span class="my-arrow back prev-slide-100"><i class="fa fa-angle-left m-r-1" aria-hidden="true"></i></span>
                                    <span class="my-arrow next next-slide-100"><i class="fa fa-angle-right m-l-1" aria-hidden="true"></i></span>
                                </div>--}}
                            </div>

                            {{--<div class="wrap-thumb-100 flex-w flex-sb p-t-30">
                                <div class="thumb-100">
                                    <div class="sub-frame sub-1">
                                        <div class="wrap-main-pic">
                                            <div class="main-pic">
                                                <img src="{{asset('assets/images/products/pro-detail-thumb-01.jpg')}}" alt="IMG-SLIDE">
                                            </div>
                                        </div>

                                        <div class="btn-sub-frame btn-1 bo-all-1 bocl12 hov8 trans-04"></div>
                                    </div>
                                </div>

                                <div class="thumb-100">
                                    <div class="sub-frame sub-2">
                                        <div class="wrap-main-pic">
                                            <div class="main-pic">
                                                <img src="{{asset('assets/images/products/pro-detail-thumb-02.jpg')}}" alt="IMG-SLIDE">
                                            </div>
                                        </div>

                                        <div class="btn-sub-frame btn-2 bo-all-1 bocl12 hov8 trans-04"></div>
                                    </div>
                                </div>

                                <div class="thumb-100">
                                    <div class="sub-frame sub-3">
                                        <div class="wrap-main-pic">
                                            <div class="main-pic">
                                                <img src="{{asset('assets/images/products/pro-detail-thumb-03.jpg')}}" alt="IMG-SLIDE">
                                            </div>
                                        </div>

                                        <div class="btn-sub-frame btn-3 bo-all-1 bocl12 hov8 trans-04"></div>
                                    </div>
                                </div>
                            </div>--}}
                        </div>
                    </div>
                </div>

                <div class="col-md-5 col-lg-6">
                    <div class="p-l-70 p-t-35 p-l-0-lg">
                        <h4 class="js-name1 txt-l-104 cl3 p-b-16">
                            {{$product->name}}
                        </h4>

                        <span class="txt-m-117 cl9">
							{{session('currency')}} {{$product->price}}
						</span>

                        <div class="flex-w flex-m p-t-30 p-b-27">
							<span class="fs-16 cl11 lh-15 txt-center m-r-15">
                                @for($i=0;$i<5; $i++)
                                    @if($i<$product->rating)
								        <i class="fa fa-star m-rl-1"></i>
                                    @else
                                        <i class="fa fa-star-o m-rl-1"></i>
                                    @endif
                                @endfor
							</span>

                            {{--<span class="txt-s-115 cl6 p-b-3">
								(1 customer review)
							</span>--}}
                        </div>

                        <p class="txt-s-101 cl6">
                            {!! \Illuminate\Support\Str::limit($product->description, 400, '...') !!}
                        </p>
                        <form action="{{route('add_cart')}}" method="post">
                            @csrf
                            <input type="hidden" name="product_id" id="product_id" value="{{$product->id}}" />
                            <div class="flex-w flex-m p-t-55 p-b-30">
                                <div class="wrap-num-product flex-w flex-m bg12 p-rl-10 m-r-30 m-b-30">
                                    <div class="btn-num-product-down flex-c-m fs-29"></div>
                                    <input class="txt-m-102 cl6 txt-center num-product" type="number" name="quantity" value="1">
                                    <div class="btn-num-product-up flex-c-m fs-16"></div>
                                </div>
                                <button type="submit" class="flex-c-m txt-s-103 cl0 bg10 size-a-2 hov-btn2 trans-04 m-b-30 js-addcart1_old">
                                    Add to cart
                                </button>
                            </div>
                        </form>

                        <div class="txt-s-107 p-b-6">
                            <span class="cl6">
                                Sku:
                            </span>

                            <span class="cl9">
                                {{$product->product_code}}
                            </span>
                        </div>

                        <div class="txt-s-107 p-b-6">
                            <span class="cl6">
                                Category:
                            </span>

                            <span class="cl9">
                                @php
                                    $category = \App\Category::where('id',$product->category_id)->first();
                                @endphp
                                {{$category->name}}
                            </span>
                        </div>

                        <div class="txt-s-107 p-b-6">
                            <span class="cl6">
                                Weight:
                            </span>

                            <span class="cl9">
                                {{$product->weight}}
                            </span>
                        </div>

                        <div class="txt-s-107 p-b-6">
                            <span class="cl6">
                                Country of Origin:
                            </span>

                            <span class="cl9">
                                {{$product->country_origin}}
                            </span>
                        </div>

                        <div class="txt-s-107 p-b-6">
                            <span class="cl6">
                                Quality:
                            </span>

                            <span class="cl9">
                                {{$product->quality}}
                            </span>
                        </div>

                        {{--<div class="txt-s-107 p-b-6">
                            <span class="cl6">
                                Tags:
                            </span>

                            <a href="#" class="txt-s-107 cl9 hov-cl10 trans-04">
                                Super
                            </a>

                            <a href="#" class="txt-s-107 cl9 hov-cl10 trans-04">
                                Kernel Basmati
                            </a>
                        </div>--}}
                    </div>
                </div>
            </div>

            <!-- Tab01 -->
            <div class="tab02 p-t-80">
                <!-- Nav tabs -->
                {{--<ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#description" role="tab">Description</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#info" role="tab">Additional Information</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#reviews" role="tab">Reviews (01)</a>
                    </li>
                </ul>--}}
                <h3 class="txt-l-112 cl3 m-r-20 respon1 p-tb-15">
                    Description
                </h3>

                <!-- Tab panes -->
                <div class="tab-content">
                    <!-- - -->
                    <div class="tab-pane fade show active" id="description" role="tabpanel">
                        <div class="p-t-30">
                            <p class="txt-s-112 cl9">
                                {!! $product->description !!}
                            </p>
                        </div>
                    </div>

                    <!-- - -->
                    <div class="tab-pane fade" id="info" role="tabpanel">
                        {{--{!! $product->specification !!}--}}
                        {{--<ul class="p-t-21">
                            <li class="txt-s-101 flex-w how-bor2 p-tb-14">
                                <span class="cl6 size-w-54">
                                    Weight
                                </span>

                                <span class="cl9 size-w-55">
                                    10 kg
                                </span>
                            </li>

                            <li class="txt-s-101 flex-w how-bor2 p-tb-14">
                                <span class="cl6 size-w-54">
                                    Counrty of Origin
                                </span>

                                <span class="cl9 size-w-55">
                                    Pujnab Pakistan
                                </span>
                            </li>

                            <li class="txt-s-101 flex-w how-bor2 p-tb-14">
                                <span class="cl6 size-w-54">
                                    Quality
                                </span>

                                <span class="cl9 size-w-55">
                                    Super
                                </span>
                            </li>
                        </ul>--}}
                    </div>

                    <!-- - -->
                    {{--<div class="tab-pane fade" id="reviews" role="tabpanel">
                        <div class="p-t-36">
                            <h5 class="txt-m-102 cl3 p-b-36">
                                1 review for Cauliflower
                            </h5>

                            <div class="flex-w flex-sb-t bo-b-1 bocl15 p-b-37">
                            <div class="wrap-pic-w size-w-56">
                                <img src="{{asset('assets/images/avatar/avatar-03.jpg')}}" alt="AVATAR">
                            </div>

                            <div class="size-w-57 p-t-2">
                                <div class="flex-w flex-sb-m p-b-8">
                                    <div class="flex-w flex-b m-r-20 p-tb-5">
                                        <span class="txt-m-103 cl6 m-r-20">
                                            Crystal Jimenez
                                        </span>

                                        <span class="txt-s-120 cl9">
                                            ( United States – June 21, 2017 )
                                        </span>
                                    </div>

                                    <span class="fs-16 cl11 lh-15 txt-center m-r-15 p-tb-5">
                                        @for($i=0;$i<5; $i++)
                                            @if($i<$product->rating)
                                                <i class="fa fa-star m-rl-1"></i>
                                            @else
                                                <i class="fa fa-star-o m-rl-1"></i>
                                            @endif
                                        @endfor
                                    </span>
                                </div>

                                <p class="txt-s-101 cl6">
                                    Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur.
                                </p>
                            </div>
                        </div>

                            <form class="w-full p-t-42">
                            <h5 class="txt-m-102 cl3 p-b-20">
                                Add a review
                            </h5>

                            <p class="txt-s-101 cl6 p-b-10">
                                Your email address will not be published. Required fields are marked *
                            </p>

                            <div class="flex-w flex-m p-b-3">
                                <span class="txt-s-101 cl6 p-b-5 m-r-10">
                                    Your Rating
                                </span>

                                <span class="wrap-rating fs-16 cl11 pointer">
                                    <i class="item-rating pointer fa fa-star-o m-rl-1"></i>
                                    <i class="item-rating pointer fa fa-star-o m-rl-1"></i>
                                    <i class="item-rating pointer fa fa-star-o m-rl-1"></i>
                                    <i class="item-rating pointer fa fa-star-o m-rl-1"></i>
                                    <i class="item-rating pointer fa fa-star-o m-rl-1"></i>
                                    <input class="dis-none" type="number" name="rating">
                                </span>
                            </div>

                            <span class="txt-s-101 cl6">
                                Your review *
                            </span>

                            <div class="row p-t-12">
                                <div class="col-sm-6 p-b-30">
                                    <input class="txt-s-101 cl3 plh1 size-a-25 bo-all-1 bocl11 focus1 p-rl-20" type="text" name="name" placeholder="Name *">
                                </div>

                                <div class="col-sm-6 p-b-30">
                                    <input class="txt-s-101 cl3 plh1 size-a-25 bo-all-1 bocl11 focus1 p-rl-20" type="text" name="email" placeholder="Email *">
                                </div>

                                <div class="col-12 p-b-30">
                                    <textarea class="txt-s-101 cl3 plh1 size-a-26 bo-all-1 bocl11 focus1 p-rl-20 p-tb-10" name="review" placeholder="Your review *"></textarea>
                                </div>
                            </div>

                            <div class="flex-r">
                                <button class="flex-c-m txt-s-103 cl0 bg10 size-a-27 hov-btn2 trans-04">
                                    Submit
                                </button>
                            </div>
                        </form>

                        </div>
                    </div>--}}
                </div>
            </div>
        </div>
    </section>

    <!-- Related product -->
    @if($relatedProducts->count() > 0)
        <section class="sec-related bg0 p-b-85">
            <div class="container">
            <!-- slide9 -->
                <div class="wrap-slick9">
                    <div class="flex-w flex-sb-m p-b-33 p-rl-15">
                        <h3 class="txt-l-112 cl3 m-r-20 respon1 p-tb-15">
                            RELATED PRODUCTS
                        </h3>

                        <div class="wrap-arrow-slick9 flex-w m-t-6"></div>
                    </div>

                    <div class="slick9">
                        <!-- - -->
                        @foreach($relatedProducts as $relatedProduct)
                            @php
                                $rproduct = \App\Product::where('id',$relatedProduct->related_id)->first();
                            @endphp

                            @if($rproduct)
                                <div class="item-slick9 p-all-15">
                                <!-- Block1 -->
                                    <div class="block1">
                                        <div class="block1-bg wrap-pic-w bo-all-1 bocl12 hov3 trans-04">
                                            <img src="{{asset('assets/images/products/'.$rproduct->image)}}" alt="IMG">

                                            <div class="block1-content flex-col-c-m p-b-46">
                                                <a href="{{url('product/'.$product->slug)}}" class="txt-m-103 cl3 txt-center hov-cl10 trans-04 js-name-b1">
                                                    {{$rproduct->name}}
                                                </a>

                                                <span class="block1-content-more txt-m-104 cl9 p-t-21 trans-04">
                                                    {{session('currency')}} {{$rproduct->price}}
                                                </span>

                                                <div class="block1-wrap-icon flex-c-m flex-w trans-05">
                                                    <a href="{{url('product/'.$product->slug)}}" class="block1-icon flex-c-m wrap-pic-max-w">
                                                        <img src="{{asset('assets/images/icons/icon-view.png')}}" alt="ICON">
                                                    </a>

                                                    {{--<a href="#" class="block1-icon flex-c-m wrap-pic-max-w js-addcart-b1">
                                                        <img src="{{asset('assets/images/icons/icon-cart.png')}}" alt="ICON">
                                                    </a>

                                                    <a href="wishlist.html" class="block1-icon flex-c-m wrap-pic-max-w js-addwish-b1">
                                                        <img class="icon-addwish-b1" src="{{asset('assets/images/icons/icon-heart.png')}}" alt="ICON">
                                                        <img class="icon-addedwish-b1" src="{{asset('assets/images/icons/icon-heart2.png')}}" alt="ICON">
                                                    </a>--}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach

                        {{--<div class="item-slick9 p-all-15">
            <!-- Block1 -->
            <div class="block1">
                <div class="block1-bg wrap-pic-w bo-all-1 bocl12 hov3 trans-04">
                    <img src="images/product-03.jpg" alt="IMG">

                    <div class="block1-content flex-col-c-m p-b-46">
                        <a href="product-single.html" class="txt-m-103 cl3 txt-center hov-cl10 trans-04 js-name-b1">
                            Super Kernel
                        </a>

                        <span class="block1-content-more txt-m-104 cl9 p-t-21 trans-04">
                            1700
                        </span>

                        <div class="block1-wrap-icon flex-c-m flex-w trans-05">
                            <a href="product-single.html" class="block1-icon flex-c-m wrap-pic-max-w">
                                <img src="images/icons/icon-view.png" alt="ICON">
                            </a>

                            <a href="#" class="block1-icon flex-c-m wrap-pic-max-w js-addcart-b1">
                                <img src="images/icons/icon-cart.png" alt="ICON">
                            </a>

                            <a href="wishlist.html" class="block1-icon flex-c-m wrap-pic-max-w js-addwish-b1">
                                <img class="icon-addwish-b1" src="images/icons/icon-heart.png" alt="ICON">
                                <img class="icon-addedwish-b1" src="images/icons/icon-heart2.png" alt="ICON">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            </div>

            <div class="item-slick9 p-all-15">
            <!-- Block1 -->
            <div class="block1">
                <div class="block1-bg wrap-pic-w bo-all-1 bocl12 hov3 trans-04">
                    <img src="images/product-04.jpg" alt="IMG">

                    <div class="block1-content flex-col-c-m p-b-46">
                        <a href="product-single.html" class="txt-m-103 cl3 txt-center hov-cl10 trans-04 js-name-b1">
                            Super Kernel
                        </a>

                        <span class="block1-content-more txt-m-104 cl9 p-t-21 trans-04">
                            1700
                        </span>

                        <div class="block1-wrap-icon flex-c-m flex-w trans-05">
                            <a href="product-single.html" class="block1-icon flex-c-m wrap-pic-max-w">
                                <img src="images/icons/icon-view.png" alt="ICON">
                            </a>

                            <a href="#" class="block1-icon flex-c-m wrap-pic-max-w js-addcart-b1">
                                <img src="images/icons/icon-cart.png" alt="ICON">
                            </a>

                            <a href="wishlist.html" class="block1-icon flex-c-m wrap-pic-max-w js-addwish-b1">
                                <img class="icon-addwish-b1" src="images/icons/icon-heart.png" alt="ICON">
                                <img class="icon-addedwish-b1" src="images/icons/icon-heart2.png" alt="ICON">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            </div>

            <div class="item-slick9 p-all-15">
            <!-- Block1 -->
            <div class="block1">
                <div class="block1-bg wrap-pic-w bo-all-1 bocl12 hov3 trans-04">
                    <img src="images/product-05.jpg" alt="IMG">

                    <div class="block1-content flex-col-c-m p-b-46">
                        <a href="product-single.html" class="txt-m-103 cl3 txt-center hov-cl10 trans-04 js-name-b1">
                            Super Kernel
                        </a>

                        <span class="block1-content-more txt-m-104 cl9 p-t-21 trans-04">
                            12$
                        </span>

                        <div class="block1-wrap-icon flex-c-m flex-w trans-05">
                            <a href="product-single.html" class="block1-icon flex-c-m wrap-pic-max-w">
                                <img src="images/icons/icon-view.png" alt="ICON">
                            </a>

                            <a href="#" class="block1-icon flex-c-m wrap-pic-max-w js-addcart-b1">
                                <img src="images/icons/icon-cart.png" alt="ICON">
                            </a>

                            <a href="wishlist.html" class="block1-icon flex-c-m wrap-pic-max-w js-addwish-b1">
                                <img class="icon-addwish-b1" src="images/icons/icon-heart.png" alt="ICON">
                                <img class="icon-addedwish-b1" src="images/icons/icon-heart2.png" alt="ICON">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            </div>

            <div class="item-slick9 p-all-15">
            <!-- Block1 -->
            <div class="block1">
                <div class="block1-bg wrap-pic-w bo-all-1 bocl12 hov3 trans-04">
                    <img src="images/product-06.jpg" alt="IMG">

                    <div class="block1-content flex-col-c-m p-b-46">
                        <a href="product-single.html" class="txt-m-103 cl3 txt-center hov-cl10 trans-04 js-name-b1">
                            Super Kernel
                        </a>

                        <span class="block1-content-more txt-m-104 cl9 p-t-21 trans-04">
                            1700
                        </span>

                        <div class="block1-wrap-icon flex-c-m flex-w trans-05">
                            <a href="product-single.html" class="block1-icon flex-c-m wrap-pic-max-w">
                                <img src="images/icons/icon-view.png" alt="ICON">
                            </a>

                            <a href="#" class="block1-icon flex-c-m wrap-pic-max-w js-addcart-b1">
                                <img src="images/icons/icon-cart.png" alt="ICON">
                            </a>

                            <a href="wishlist.html" class="block1-icon flex-c-m wrap-pic-max-w js-addwish-b1">
                                <img class="icon-addwish-b1" src="images/icons/icon-heart.png" alt="ICON">
                                <img class="icon-addedwish-b1" src="images/icons/icon-heart2.png" alt="ICON">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            </div>

            <div class="item-slick9 p-all-15">
            <!-- Block1 -->
            <div class="block1">
                <div class="block1-bg wrap-pic-w bo-all-1 bocl12 hov3 trans-04">
                    <img src="images/product-07.jpg" alt="IMG">

                    <div class="block1-content flex-col-c-m p-b-46">
                        <a href="product-single.html" class="txt-m-103 cl3 txt-center hov-cl10 trans-04 js-name-b1">
                            Super Kernel
                        </a>

                        <span class="block1-content-more txt-m-104 cl9 p-t-21 trans-04">
                            1700
                        </span>

                        <div class="block1-wrap-icon flex-c-m flex-w trans-05">
                            <a href="product-single.html" class="block1-icon flex-c-m wrap-pic-max-w">
                                <img src="images/icons/icon-view.png" alt="ICON">
                            </a>

                            <a href="#" class="block1-icon flex-c-m wrap-pic-max-w js-addcart-b1">
                                <img src="images/icons/icon-cart.png" alt="ICON">
                            </a>

                            <a href="wishlist.html" class="block1-icon flex-c-m wrap-pic-max-w js-addwish-b1">
                                <img class="icon-addwish-b1" src="images/icons/icon-heart.png" alt="ICON">
                                <img class="icon-addedwish-b1" src="images/icons/icon-heart2.png" alt="ICON">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            </div>

            <div class="item-slick9 p-all-15">
            <!-- Block1 -->
            <div class="block1">
                <div class="block1-bg wrap-pic-w bo-all-1 bocl12 hov3 trans-04">
                    <img src="images/product-08.jpg" alt="IMG">

                    <div class="block1-content flex-col-c-m p-b-46">
                        <a href="product-single.html" class="txt-m-103 cl3 txt-center hov-cl10 trans-04 js-name-b1">
                            Super Kernel
                        </a>

                        <span class="block1-content-more txt-m-104 cl9 p-t-21 trans-04">
                            1700
                        </span>

                        <div class="block1-wrap-icon flex-c-m flex-w trans-05">
                            <a href="product-single.html" class="block1-icon flex-c-m wrap-pic-max-w">
                                <img src="images/icons/icon-view.png" alt="ICON">
                            </a>

                            <a href="#" class="block1-icon flex-c-m wrap-pic-max-w js-addcart-b1">
                                <img src="images/icons/icon-cart.png" alt="ICON">
                            </a>

                            <a href="wishlist.html" class="block1-icon flex-c-m wrap-pic-max-w js-addwish-b1">
                                <img class="icon-addwish-b1" src="images/icons/icon-heart.png" alt="ICON">
                                <img class="icon-addedwish-b1" src="images/icons/icon-heart2.png" alt="ICON">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            </div>

            <div class="item-slick9 p-all-15">
            <!-- Block1 -->
            <div class="block1">
                <div class="block1-bg wrap-pic-w bo-all-1 bocl12 hov3 trans-04">
                    <img src="images/product-01.jpg" alt="IMG">

                    <div class="block1-content flex-col-c-m p-b-46">
                        <a href="product-single.html" class="txt-m-103 cl3 txt-center hov-cl10 trans-04 js-name-b1">
                            Super Kernel
                        </a>

                        <span class="block1-content-more txt-m-104 cl9 p-t-21 trans-04">
                            1700
                        </span>

                        <div class="block1-wrap-icon flex-c-m flex-w trans-05">
                            <a href="product-single.html" class="block1-icon flex-c-m wrap-pic-max-w">
                                <img src="images/icons/icon-view.png" alt="ICON">
                            </a>

                            <a href="#" class="block1-icon flex-c-m wrap-pic-max-w js-addcart-b1">
                                <img src="images/icons/icon-cart.png" alt="ICON">
                            </a>

                            <a href="wishlist.html" class="block1-icon flex-c-m wrap-pic-max-w js-addwish-b1">
                                <img class="icon-addwish-b1" src="images/icons/icon-heart.png" alt="ICON">
                                <img class="icon-addedwish-b1" src="images/icons/icon-heart2.png" alt="ICON">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            </div>

            <div class="item-slick9 p-all-15">
            <!-- Block1 -->
            <div class="block1">
                <div class="block1-bg wrap-pic-w bo-all-1 bocl12 hov3 trans-04">
                    <img src="images/product-33.jpg" alt="IMG">

                    <div class="block1-content flex-col-c-m p-b-46">
                        <a href="product-single.html" class="txt-m-103 cl3 txt-center hov-cl10 trans-04 js-name-b1">
                            Super Kernel
                        </a>

                        <span class="block1-content-more txt-m-104 cl9 p-t-21 trans-04">
                            1700
                        </span>

                        <div class="block1-wrap-icon flex-c-m flex-w trans-05">
                            <a href="product-single.html" class="block1-icon flex-c-m wrap-pic-max-w">
                                <img src="images/icons/icon-view.png" alt="ICON">
                            </a>

                            <a href="#" class="block1-icon flex-c-m wrap-pic-max-w js-addcart-b1">
                                <img src="images/icons/icon-cart.png" alt="ICON">
                            </a>

                            <a href="wishlist.html" class="block1-icon flex-c-m wrap-pic-max-w js-addwish-b1">
                                <img class="icon-addwish-b1" src="images/icons/icon-heart.png" alt="ICON">
                                <img class="icon-addedwish-b1" src="images/icons/icon-heart2.png" alt="ICON">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            </div>--}}

                    </div>

                </div>
            </div>
        </section>
    @endif

@endsection

@section('scripts')

@endsection
