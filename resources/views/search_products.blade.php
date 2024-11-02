@extends('layouts.app2')

@section('title', 'Gondal Rice: Products')

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

					<span>
						/ Search Results
					</span>
				</span>
            </div>
        </div>
    </section>

    <!-- Content page -->
    <section class="bg0 p-t-85 p-b-95">
        <div class="container">
            <div class="row">
                <div class="col-sm-10 col-md-4 col-lg-3 m-rl-auto p-b-50">
                    <div class="leftbar p-t-15">
                        <!--  -->
                        <form action="{{route('search_product')}}" method="get">
                            <div class="size-a-21 pos-relative">
                                <input class="s-full bo-all-1 bocl15 p-rl-20" type="text" name="search_products" value="{{$keyword}}" placeholder="Search products...">
                                <button type="submit" class="flex-c-m fs-18 size-a-22 ab-t-r hov11">
                                    <img class="hov11-child trans-04" src="{{asset('assets/images/icons/icon-search.png')}}" alt="ICON">
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-sm-10 col-md-8 col-lg-9 m-rl-auto p-b-50">
                    <div class="flex-w flex-r-m p-b-45 flex-row-rev">
                            <div class="flex-w flex-m p-tb-8">
                                <div class="flex-w flex-m m-tb-7">
                                    <button class="dis-block lh-00 pos-relative how-icon1 m-r-15 js-show-list">
                                        <img class="icon-main trans-04" src="{{asset('assets/images/icons/icon-menu-list.png')}}" alt="ICON">
                                        <img class="ab-t-l icon-hov trans-04" src="{{asset('assets/images/icons/icon-menu-list1.png')}}" alt="ICON">
                                    </button>

                                    <button class="dis-block lh-00 pos-relative how-icon1 menu-active js-show-grid">
                                        <img class="icon-main trans-04" src="{{asset('assets/images/icons/icon-grid.png')}}" alt="ICON">
                                        <img class="ab-t-l icon-hov trans-04" src="{{asset('assets/images/icons/icon-grid1.png')}}" alt="ICON">
                                    </button>
                                </div>
                            </div>

                            <span class="txt-s-101 cl9 m-r-30 size-w-53">
								{{--Showing 1–9 of {{$products->count()}} results--}}
							</span>
                        </div>
                </div>

                <div class="col-sm-12 col-md-12 col-lg-12 m-rl-auto p-b-50">
                    @if($products->count() > 0)
                        <!-- Shop grid -->
                        <div class="shop-grid">
                            <div class="row">
                                <!-- - -->
                                @foreach($products as $product)
                                    <div class="col-sm-6 col-lg-4 p-b-30">
                                        <!-- Block1 -->
                                        <div class="block1">
                                            <div class="block1-bg wrap-pic-w bo-all-1 bocl12 hov3 trans-04">

                                                <img src="{{asset('assets/images/products/'.$product->image)}}" alt="IMG">

                                                <div class="block1-content flex-col-c-m p-b-46">
                                                    <a href="{{url('product/'.$product->slug)}}" class="txt-m-103 cl3 txt-center hov-cl10 trans-04 js-name-b1">
                                                        {{$product->name}}
                                                    </a>

                                                    <span class="block1-content-more txt-m-104 cl9 p-t-21 trans-04">
                                                        {{session('currency')}} {{$product->price}}
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
                                @endforeach
                            </div>
                        </div>

                        <!-- Shop list -->
                        <div class="shop-list dis-none">
                            @foreach($products as $product)
                                <div class="row p-b-30">
                                    <div class="col-sm-5 col-lg-4">
                                        <a href="{{url('product/'.$product->slug)}}" class="wrap-pic-w bo-all-1 bocl12 hov8 trans-04">
                                            <img src="{{asset('assets/images/products/'.$product->image)}}" alt="PRODUCT">
                                        </a>
                                    </div>

                                    <div class="col-sm-7 col-lg-8">
                                        <div class="p-t-5 p-b-20">
                                            <div class="flex-w flex-sb-m">
                                                <a href="{{url('product/'.$product->slug)}}" class="txt-m-120 cl3 hov-cl10 trans-04 m-r-20 js-name1">
                                                    {{$product->name}}
                                                </a>

                                                {{--<a href="wishlist.html" class="lh-00 pos-relative how-icon1 m-tb-15 js-addwish1">
                                                    <img class="icon-main trans-04" src="{{asset('assets/images/icons/icon-heart-color.png')}}" alt="ICON">
                                                    <img class="ab-t-l icon-hov trans-04" src="{{asset('assets/images/icons/icon-heart-color2.png')}}" alt="ICON">
                                                </a>--}}
                                            </div>

                                            <span class="txt-m-117 cl9">
                                                {{session('currency')}} {{$product->price}}
                                            </span>

                                            <p class="txt-s-101 cl6 p-t-18">
                                                {{$product->description}}
                                            </p>

                                            {{--<div class="flex-w p-t-29">
                                                <button type="submit" class="flex-c-m txt-s-103 cl0 bg10 size-a-2 hov-btn2 trans-04 js-addcart1">
                                                    Add to cart
                                                </button>
                                            </div>--}}
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                            {{--<div class="row p-b-30">
                                <div class="col-sm-5 col-md-4 col-lg-3">
                                    <a href="product-single.html" class="wrap-pic-w bo-all-1 bocl12 hov8 trans-04">
                                        <img src="images/product-38.jpg" alt="PRODUCT">
                                    </a>
                                </div>

                                <div class="col-sm-7 col-md-8 col-lg-9">
                                    <div class="p-t-5 p-b-20">
                                        <div class="flex-w flex-sb-m">
                                            <a href="product-single.html" class="txt-m-120 cl3 hov-cl10 trans-04 m-r-20 js-name1">
                                                Red pumpkin
                                            </a>

                                            <a href="wishlist.html" class="lh-00 pos-relative how-icon1 m-tb-15 js-addwish1">
                                                <img class="icon-main trans-04" src="images/icons/icon-heart-color.png" alt="ICON">
                                                <img class="ab-t-l icon-hov trans-04" src="images/icons/icon-heart-color2.png" alt="ICON">
                                            </a>
                                        </div>

                                        <span class="txt-m-117 cl9">
                                            15$
                                        </span>

                                        <p class="txt-s-101 cl6 p-t-18">
                                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                        </p>

                                        <div class="flex-w p-t-29">
                                            <button class="flex-c-m txt-s-103 cl0 bg10 size-a-2 hov-btn2 trans-04 js-addcart1">
                                                Add to cart
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row p-b-30">
                                <div class="col-sm-5 col-md-4 col-lg-3">
                                    <a href="product-single.html" class="wrap-pic-w bo-all-1 bocl12 hov8 trans-04">
                                        <img src="images/product-39.jpg" alt="PRODUCT">
                                    </a>
                                </div>

                                <div class="col-sm-7 col-md-8 col-lg-9">
                                    <div class="p-t-5 p-b-20">
                                        <div class="flex-w flex-sb-m">
                                            <a href="product-single.html" class="txt-m-120 cl3 hov-cl10 trans-04 m-r-20 js-name1">
                                                Cauliflower
                                            </a>

                                            <a href="wishlist.html" class="lh-00 pos-relative how-icon1 m-tb-15 js-addwish1">
                                                <img class="icon-main trans-04" src="images/icons/icon-heart-color.png" alt="ICON">
                                                <img class="ab-t-l icon-hov trans-04" src="images/icons/icon-heart-color2.png" alt="ICON">
                                            </a>
                                        </div>

                                        <span class="txt-m-117 cl9">
                                            19$
                                        </span>

                                        <p class="txt-s-101 cl6 p-t-18">
                                            Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet.
                                        </p>

                                        <div class="flex-w p-t-29">
                                            <button class="flex-c-m txt-s-103 cl0 bg10 size-a-2 hov-btn2 trans-04 js-addcart1">
                                                Add to cart
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row p-b-30">
                                <div class="col-sm-5 col-md-4 col-lg-3">
                                    <a href="product-single.html" class="wrap-pic-w bo-all-1 bocl12 hov8 trans-04">
                                        <img src="images/product-40.jpg" alt="PRODUCT">
                                    </a>
                                </div>

                                <div class="col-sm-7 col-md-8 col-lg-9">
                                    <div class="p-t-5 p-b-20">
                                        <div class="flex-w flex-sb-m">
                                            <a href="product-single.html" class="txt-m-120 cl3 hov-cl10 trans-04 m-r-20 js-name1">
                                                Vegetable
                                            </a>

                                            <a href="wishlist.html" class="lh-00 pos-relative how-icon1 m-tb-15 js-addwish1">
                                                <img class="icon-main trans-04" src="images/icons/icon-heart-color.png" alt="ICON">
                                                <img class="ab-t-l icon-hov trans-04" src="images/icons/icon-heart-color2.png" alt="ICON">
                                            </a>
                                        </div>

                                        <span class="txt-m-117 cl9">
                                            23$
                                        </span>

                                        <p class="txt-s-101 cl6 p-t-18">
                                            Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et.
                                        </p>

                                        <div class="flex-w p-t-29">
                                            <button class="flex-c-m txt-s-103 cl0 bg10 size-a-2 hov-btn2 trans-04 js-addcart1">
                                                Add to cart
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row p-b-30">
                                <div class="col-sm-5 col-md-4 col-lg-3">
                                    <a href="product-single.html" class="wrap-pic-w bo-all-1 bocl12 hov8 trans-04">
                                        <img src="images/product-41.jpg" alt="PRODUCT">
                                    </a>
                                </div>

                                <div class="col-sm-7 col-md-8 col-lg-9">
                                    <div class="p-t-5 p-b-20">
                                        <div class="flex-w flex-sb-m">
                                            <a href="product-single.html" class="txt-m-120 cl3 hov-cl10 trans-04 m-r-20 js-name1">
                                                Bell pepper
                                            </a>

                                            <a href="wishlist.html" class="lh-00 pos-relative how-icon1 m-tb-15 js-addwish1">
                                                <img class="icon-main trans-04" src="images/icons/icon-heart-color.png" alt="ICON">
                                                <img class="ab-t-l icon-hov trans-04" src="images/icons/icon-heart-color2.png" alt="ICON">
                                            </a>
                                        </div>

                                        <span class="txt-m-117 cl9">
                                            12$
                                        </span>

                                        <p class="txt-s-101 cl6 p-t-18">
                                            But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great.
                                        </p>

                                        <div class="flex-w p-t-29">
                                            <button class="flex-c-m txt-s-103 cl0 bg10 size-a-2 hov-btn2 trans-04 js-addcart1">
                                                Add to cart
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row p-b-30">
                                <div class="col-sm-5 col-md-4 col-lg-3">
                                    <a href="product-single.html" class="wrap-pic-w bo-all-1 bocl12 hov8 trans-04">
                                        <img src="images/product-42.jpg" alt="PRODUCT">
                                    </a>
                                </div>

                                <div class="col-sm-7 col-md-8 col-lg-9">
                                    <div class="p-t-5 p-b-20">
                                        <div class="flex-w flex-sb-m">
                                            <a href="product-single.html" class="txt-m-120 cl3 hov-cl10 trans-04 m-r-20 js-name1">
                                                Beetroot
                                            </a>

                                            <a href="wishlist.html" class="lh-00 pos-relative how-icon1 m-tb-15 js-addwish1">
                                                <img class="icon-main trans-04" src="images/icons/icon-heart-color.png" alt="ICON">
                                                <img class="ab-t-l icon-hov trans-04" src="images/icons/icon-heart-color2.png" alt="ICON">
                                            </a>
                                        </div>

                                        <span class="txt-m-117 cl9">
                                            9$
                                        </span>

                                        <p class="txt-s-101 cl6 p-t-18">
                                            No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain.
                                        </p>

                                        <div class="flex-w p-t-29">
                                            <button class="flex-c-m txt-s-103 cl0 bg10 size-a-2 hov-btn2 trans-04 js-addcart1">
                                                Add to cart
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row p-b-30">
                                <div class="col-sm-5 col-md-4 col-lg-3">
                                    <a href="product-single.html" class="wrap-pic-w bo-all-1 bocl12 hov8 trans-04">
                                        <img src="images/product-43.jpg" alt="PRODUCT">
                                    </a>
                                </div>

                                <div class="col-sm-7 col-md-8 col-lg-9">
                                    <div class="p-t-5 p-b-20">
                                        <div class="flex-w flex-sb-m">
                                            <a href="product-single.html" class="txt-m-120 cl3 hov-cl10 trans-04 m-r-20 js-name1">
                                                Cabbage
                                            </a>

                                            <a href="wishlist.html" class="lh-00 pos-relative how-icon1 m-tb-15 js-addwish1">
                                                <img class="icon-main trans-04" src="images/icons/icon-heart-color.png" alt="ICON">
                                                <img class="ab-t-l icon-hov trans-04" src="images/icons/icon-heart-color2.png" alt="ICON">
                                            </a>
                                        </div>

                                        <span class="txt-m-117 cl9">
                                            15$
                                        </span>

                                        <p class="txt-s-101 cl6 p-t-18">
                                            To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences.
                                        </p>

                                        <div class="flex-w p-t-29">
                                            <button class="flex-c-m txt-s-103 cl0 bg10 size-a-2 hov-btn2 trans-04 js-addcart1">
                                                Add to cart
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row p-b-30">
                                <div class="col-sm-5 col-md-4 col-lg-3">
                                    <a href="product-single.html" class="wrap-pic-w bo-all-1 bocl12 hov8 trans-04">
                                        <img src="images/product-44.jpg" alt="PRODUCT">
                                    </a>
                                </div>

                                <div class="col-sm-7 col-md-8 col-lg-9">
                                    <div class="p-t-5 p-b-20">
                                        <div class="flex-w flex-sb-m">
                                            <a href="product-single.html" class="txt-m-120 cl3 hov-cl10 trans-04 m-r-20 js-name1">
                                                Tomato
                                            </a>

                                            <a href="wishlist.html" class="lh-00 pos-relative how-icon1 m-tb-15 js-addwish1">
                                                <img class="icon-main trans-04" src="images/icons/icon-heart-color.png" alt="ICON">
                                                <img class="ab-t-l icon-hov trans-04" src="images/icons/icon-heart-color2.png" alt="ICON">
                                            </a>
                                        </div>

                                        <span class="txt-m-117 cl9">
                                            38$
                                        </span>

                                        <p class="txt-s-101 cl6 p-t-18">
                                            At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi.
                                        </p>

                                        <div class="flex-w p-t-29">
                                            <button class="flex-c-m txt-s-103 cl0 bg10 size-a-2 hov-btn2 trans-04 js-addcart1">
                                                Add to cart
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row p-b-30">
                                <div class="col-sm-5 col-md-4 col-lg-3">
                                    <a href="product-single.html" class="wrap-pic-w bo-all-1 bocl12 hov8 trans-04">
                                        <img src="images/product-45.jpg" alt="PRODUCT">
                                    </a>
                                </div>

                                <div class="col-sm-7 col-md-8 col-lg-9">
                                    <div class="p-t-5 p-b-20">
                                        <div class="flex-w flex-sb-m">
                                            <a href="product-single.html" class="txt-m-120 cl3 hov-cl10 trans-04 m-r-20 js-name1">
                                                Onion
                                            </a>

                                            <a href="wishlist.html" class="lh-00 pos-relative how-icon1 m-tb-15 js-addwish1">
                                                <img class="icon-main trans-04" src="images/icons/icon-heart-color.png" alt="ICON">
                                                <img class="ab-t-l icon-hov trans-04" src="images/icons/icon-heart-color2.png" alt="ICON">
                                            </a>
                                        </div>

                                        <span class="txt-m-117 cl9">
                                            9$
                                        </span>

                                        <p class="txt-s-101 cl6 p-t-18">
                                            Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus.
                                        </p>

                                        <div class="flex-w p-t-29">
                                            <button class="flex-c-m txt-s-103 cl0 bg10 size-a-2 hov-btn2 trans-04 js-addcart1">
                                                Add to cart
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row p-b-30">
                                <div class="col-sm-5 col-md-4 col-lg-3">
                                    <a href="product-single.html" class="wrap-pic-w bo-all-1 bocl12 hov8 trans-04">
                                        <img src="images/product-46.jpg" alt="PRODUCT">
                                    </a>
                                </div>

                                <div class="col-sm-7 col-md-8 col-lg-9">
                                    <div class="p-t-5 p-b-20">
                                        <div class="flex-w flex-sb-m">
                                            <a href="product-single.html" class="txt-m-120 cl3 hov-cl10 trans-04 m-r-20 js-name1">
                                                Eggplant
                                            </a>

                                            <a href="wishlist.html" class="lh-00 pos-relative how-icon1 m-tb-15 js-addwish1">
                                                <img class="icon-main trans-04" src="images/icons/icon-heart-color.png" alt="ICON">
                                                <img class="ab-t-l icon-hov trans-04" src="images/icons/icon-heart-color2.png" alt="ICON">
                                            </a>
                                        </div>

                                        <span class="txt-m-117 cl9">
                                            18$
                                        </span>

                                        <p class="txt-s-101 cl6 p-t-18">
                                            Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus.
                                        </p>

                                        <div class="flex-w p-t-29">
                                            <button class="flex-c-m txt-s-103 cl0 bg10 size-a-2 hov-btn2 trans-04 js-addcart1">
                                                Add to cart
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>--}}
                        </div>

                        <!-- Pagination -->
                        <div class="flex-w flex-c-m p-t-47">
                            {{ $products->links() }}
                        </div>
                    @else
                        <div class="flex-w flex-c-m p-t-5">
                            <h4 class="text-danger">No Result For {{$keyword}}</h4>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </section>

@endsection

@section('scripts')

@endsection
