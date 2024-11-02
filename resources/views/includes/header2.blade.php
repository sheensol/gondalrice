<header>
    @php
        if (Auth::check()) {
                $headerCarts = \App\Cart::where('session_id',session()->getId())->orWhere('user_id',auth()->user()->id)->get();
        } else {
            $headerCarts = \App\Cart::where('session_id',session()->getId())->get();
        }
        $headerCategories = \App\Category::all();
    @endphp

    <!-- Header desktop -->
    <div class="container-menu-desktop">
        <div class="wrap-menu-desktop">
            <nav class="limiter-menu-desktop">
                <div class="left-header">
                    <!-- Logo desktop -->
                    <div class="logo">
                        <a href="{{url('/')}}"><img src="{{ asset('assets/images/icons/logo-01.png') }}" alt="IMG-LOGO"></a>
                    </div>
                </div>

                <div class="center-header">
                    <!-- Menu desktop -->
                    <div class="menu-desktop">
                        <ul class="main-menu">
                            <li class="active-menu"><a href="{{url('/')}}">Home</a></li>

                            <li><a href="{{route('about')}}">About us</a></li>

                            <li>
                                <a href="javascript:;">Products</a>
                                <ul class="sub-menu">
                                    @if($headerCategories->count() > 0)
                                        @foreach($headerCategories as $headerCategory)
                                            <li><a href="{{url('shop/'.$headerCategory->slug)}}">{{$headerCategory->name}}</a></li>
                                        @endforeach
                                    @endif
                                </ul>
                            </li>

                            <li>
                                <a href="{{route('blog')}}">Blogs</a>
                                {{--<ul class="sub-menu">
                                    <li><a href="blog-list.html">Blog List</a></li>
                                    <li><a href="blog-grid-01.html">Blog Grid 1</a></li>
                                    <li><a href="blog-grid-02.html">Blog Grid 2</a></li>
                                    <li><a href="blog-single.html">Blog Single</a></li>
                                </ul>--}}
                            </li>

                            <li><a href="{{route('gallery')}}">Gallery</a></li>

                            <li><a href="{{route('contact')}}">Contact</a></li>
                        </ul>
                    </div>
                </div>

                <div class="right-header">
                    <!-- Icon header -->
                    <div class="wrap-icon-header flex-w flex-r-m h-full wrap-menu-click p-t-8">
                        <div class="h-full flex-m">
                            <div class="icon-header-item flex-c-m trans-04 js-show-modal-search">
                                <img src="{{ asset('assets/images/icons/icon-search.png') }}" alt="SEARCH">
                            </div>
                        </div>

                        <div class="wrap-cart-header h-full flex-m m-l-10 menu-click">
                            <div class="icon-header-item flex-c-m trans-04">
                                <img src="{{ asset('assets/images/icons/user.png') }}" alt="User">
                            </div>

                            @if (Auth::check())
                                <div class="cart-header menu-click-child trans-04">
                                    <div class="bo-b-1 bocl15">
                                        <div class="size-h-2 js-pscroll m-r--15 p-r-15">
                                            <!-- cart header item -->
                                            <div class="flex-w flex-str m-b-25"><strong>{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</strong></div>

                                            <!-- cart header item -->
                                            <div class="flex-w flex-str m-b-25">
                                                <a href="{{route('myaccount')}}" class="cl3 hov-cl10 trans-04">MY Account</a>
                                            </div>
                                        </div>
                                    </div>

                                    <a href="{{route('logout')}}" class="flex-c-m size-a-8 bg10 txt-s-105 cl13 hov-btn2 trans-04">
                                        Sign Out
                                    </a>
                                </div>
                            @else
                                <div class="cart-header menu-click-child trans-04">
                                    <div class="bo-b-1 bocl15">
                                        <div class="size-h-2 js-pscroll m-r--15 p-r-15">
                                            <!-- cart header item -->
                                            <div class="flex-w flex-str m-b-25">
                                                <a href="{{route('register')}}" class="cl3 hov-cl10 trans-04">Register</a>
                                            </div>
                                            <!-- cart header item -->
                                            <div class="flex-w flex-str m-b-25">
                                                <a href="{{route('login')}}" class="cl3 hov-cl10 trans-04">Login</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>

                        <div class="wrap-cart-header h-full flex-m m-l-10 menu-click">

                            <div class="icon-header-item flex-c-m trans-04 icon-header-noti" data-notify="{{$headerCarts->count()}}">
                                <img src="{{ asset('assets/images/icons/icon-cart-2.png') }}" alt="CART">
                            </div>

                            <div class="cart-header menu-click-child trans-04">

                                @if($headerCarts->count() > 0)
                                    @php
                                        $headerTotal = 0;
                                    @endphp
                                    <div class="bo-b-1 bocl15">
                                        <div class="size-h-2 js-pscroll m-r--15 p-r-15">
                                            <!-- cart header item -->
                                            @foreach($headerCarts as $headerCart)
                                                @php
                                                    $headerProduct = \App\Product::where('id',$headerCart->product_id)->first();
                                                    $headerTotal = $headerTotal + ($headerProduct->price * $headerCart->quantity);
                                                @endphp

                                                <div class="flex-w flex-str m-b-25">
                                                    <div class="size-w-15 flex-w flex-t">
                                                        <div class="wrap-pic-w bo-all-1 bocl12 size-w-16 hov3 trans-04 m-r-14">
                                                            <img src="{{ asset('assets/images/products/'.$headerProduct->image) }}" alt="PRODUCT">
                                                        </div>

                                                        <div class="size-w-17 flex-col-l">
                                                            <span class="txt-s-108 cl3 hov-cl10 trans-04">
                                                                {{$headerProduct->name}}
                                                            </span>

                                                            <span class="txt-s-101 cl9">
                                                                {{session('currency')}} {{$headerProduct->price * $headerCart->quantity}}
                                                            </span>

                                                            <span class="txt-s-109 cl12">
                                                                x{{$headerCart->quantity}}
                                                            </span>
                                                        </div>
                                                    </div>

                                                    <div class="size-w-14 flex-b">
                                                        <a class="lh-10" href="{{ url('delete-cart/'.$headerCart->id) }}" onclick="return confirm('Are you sure, you want to delete record?')">
                                                            <img src="{{ asset('assets/images/icons/icon-close.png') }}" alt="CLOSE">
                                                        </a>
                                                    </div>
                                                </div>
                                            @endforeach
                                        <!-- cart header item -->
                                            {{--<div class="flex-w flex-str m-b-25">
                                                <div class="size-w-15 flex-w flex-t">
                                                    <a href="product-single.html" class="wrap-pic-w bo-all-1 bocl12 size-w-16 hov3 trans-04 m-r-14">
                                                        <img src="{{ asset('assets/images/item-cart-02.jpg') }}" alt="PRODUCT">
                                                    </a>

                                                    <div class="size-w-17 flex-col-l">
                                                        <a href="product-single.html" class="txt-s-108 cl3 hov-cl10 trans-04">
                                                            Asparagus
                                                        </a>

                                                        <span class="txt-s-101 cl9">
                                                                12$
                                                            </span>

                                                        <span class="txt-s-109 cl12">
                                                                x1
                                                            </span>
                                                    </div>
                                                </div>

                                                <div class="size-w-14 flex-b">
                                                    <button class="lh-10">
                                                        <img src="{{ asset('assets/images/icons/icon-close.png') }}" alt="CLOSE">
                                                    </button>
                                                </div>
                                            </div>--}}
                                        </div>
                                    </div>

                                    <div class="flex-w flex-sb-m p-t-22 p-b-12">
                                            <span class="txt-m-103 cl3 p-r-20">
                                                Subtotal
                                            </span>

                                        <span class="txt-m-111 cl6">
                                                {{session('currency')}} {{$headerTotal}}
                                            </span>
                                    </div>

                                    <div class="flex-w flex-sb-m p-b-31">
                                            <span class="txt-m-103 cl3 p-r-20">
                                                Total
                                            </span>

                                        <span class="txt-m-111 cl10">
                                                {{session('currency')}} {{$headerTotal}}
                                            </span>
                                    </div>

                                    <div>
                                        <a href="{{route('cart')}}" class="flex-c-m size-a-8 bg10 txt-s-105 cl13 hov-btn2 trans-04">
                                            View Cart
                                        </a>
                                    </div>

                                    <div class="mt-2">
                                        <a href="{{route('checkout')}}" class="flex-c-m size-a-8 bg10 txt-s-105 cl13 hov-btn2 trans-04">
                                            check out
                                        </a>
                                    </div>
                                @else
                                    <div class="flex-w flex-sb-m p-b-31">
                                        <span class="txt-m-103 cl3 p-r-20">Cart is empty!</span>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>

    <!-- Header Mobile -->
    <div class="wrap-header-mobile">
        <!-- Logo moblie -->
        <div class="logo-mobile">
            <a href="{{url('/')}}"><img src="{{ asset('assets/images/icons/logo-01.png') }}" alt="IMG-LOGO"></a>
        </div>

        <!-- Icon header -->
        <div class="wrap-icon-header flex-w flex-r-m h-full wrap-menu-click m-r-15">
            <div class="h-full flex-m">
                <div class="icon-header-item flex-c-m trans-04 js-show-modal-search">
                    <img src="{{ asset('assets/images/icons/icon-search.png') }}" alt="SEARCH">
                </div>
            </div>

            <div class="wrap-cart-header h-full flex-m m-l-10 menu-click">
                <div class="icon-header-item flex-c-m trans-04">
                    <img src="{{ asset('assets/images/icons/user.png') }}" alt="User">
                </div>

                @if (Auth::check())
                    <div class="cart-header menu-click-child trans-04">
                        <div class="bo-b-1 bocl15">
                            <div class="size-h-2 js-pscroll m-r--15 p-r-15">
                                <!-- cart header item -->
                                <div class="flex-w flex-str m-b-25"><strong>{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</strong></div>

                                <!-- cart header item -->
                                <div class="flex-w flex-str m-b-25">
                                    <a href="{{route('myaccount')}}" class="cl3 hov-cl10 trans-04">MY Account</a>
                                </div>
                            </div>
                        </div>

                        <a href="{{route('logout')}}" class="flex-c-m size-a-8 bg10 txt-s-105 cl13 hov-btn2 trans-04">
                            Sign Out
                        </a>
                    </div>
                @else
                    <div class="cart-header menu-click-child trans-04">
                        <div class="bo-b-1 bocl15">
                            <div class="size-h-2 js-pscroll m-r--15 p-r-15">
                                <!-- cart header item -->
                                <div class="flex-w flex-str m-b-25">
                                    <a href="{{route('register')}}" class="cl3 hov-cl10 trans-04">Register</a>
                                </div>
                                <!-- cart header item -->
                                <div class="flex-w flex-str m-b-25">
                                    <a href="{{route('login')}}" class="cl3 hov-cl10 trans-04">Login</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            </div>

            <div class="wrap-cart-header h-full flex-m m-l-5 menu-click">
                <div class="icon-header-item flex-c-m trans-04 icon-header-noti" data-notify="{{$headerCarts->count()}}">
                    <img src="{{ asset('assets/images/icons/icon-cart-2.png') }}" alt="CART">
                </div>

                <div class="cart-header menu-click-child trans-04">
                    @if($headerCarts->count() > 0)
                        @php
                            $headerTotal = 0;
                        @endphp
                        <div class="bo-b-1 bocl15">
                            <!-- cart header item -->
                            @foreach($headerCarts as $headerCart)
                                @php
                                    $headerProduct = \App\Product::where('id',$headerCart->product_id)->first();
                                    $headerTotal = $headerTotal + ($headerProduct->price * $headerCart->quantity);
                                @endphp
                                <div class="flex-w flex-str m-b-25">
                                    <div class="size-w-15 flex-w flex-t">
                                        <div class="wrap-pic-w bo-all-1 bocl12 size-w-16 hov3 trans-04 m-r-14">
                                            <img src="{{ asset('assets/images/products/'.$headerProduct->image) }}" alt="PRODUCT">
                                        </div>

                                        <div class="size-w-17 flex-col-l">
                                            <span class="txt-s-108 cl3 hov-cl10 trans-04">
                                                {{$headerProduct->name}}
                                            </span>

                                            <span class="txt-s-101 cl9">
                                                {{session('currency')}} {{$headerProduct->price}}
                                            </span>

                                            <span class="txt-s-109 cl12">
                                                    x{{$headerCart->quantity}}
                                            </span>
                                        </div>
                                    </div>

                                    <div class="size-w-14 flex-b">
                                        <a class="lh-10" href="{{ url('delete-cart/'.$headerCart->id) }}" onclick="return confirm('Are you sure, you want to delete record?')">
                                            <img src="{{ asset('assets/images/icons/icon-close.png') }}" alt="CLOSE">
                                        </a>
                                    </div>
                                </div>
                            @endforeach

                        <!-- cart header item -->
                            {{--<div class="flex-w flex-str m-b-25">
                                <div class="size-w-15 flex-w flex-t">
                                    <a href="product-single.html" class="wrap-pic-w bo-all-1 bocl12 size-w-16 hov3 trans-04 m-r-14">
                                        <img src="{{ asset('assets/images/item-cart-02.jpg') }}" alt="PRODUCT">
                                    </a>

                                    <div class="size-w-17 flex-col-l">
                                        <a href="product-single.html" class="txt-s-108 cl3 hov-cl10 trans-04">
                                            Asparagus
                                        </a>

                                        <span class="txt-s-101 cl9">
                                                12$
                                        </span>

                                        <span class="txt-s-109 cl12">
                                                x1
                                        </span>
                                    </div>
                                </div>

                                <div class="size-w-14 flex-b">
                                    <button class="lh-10">
                                        <img src="{{ asset('assets/images/icons/icon-close.png') }}" alt="CLOSE">
                                    </button>
                                </div>
                            </div>--}}
                        </div>

                        <div class="flex-w flex-sb-m p-t-22 p-b-12">
                            <span class="txt-m-103 cl3 p-r-20">
                                Subtotal
                            </span>

                            <span class="txt-m-111 cl6">
                                {{session('currency')}} {{$headerTotal}}
                            </span>
                        </div>

                        <div class="flex-w flex-sb-m p-b-31">
                            <span class="txt-m-103 cl3 p-r-20">
                                Total
                            </span>

                            <span class="txt-m-111 cl10">
                                {{session('currency')}} {{$headerTotal}}
                            </span>
                        </div>

                        <div>
                            <a href="{{route('cart')}}" class="flex-c-m size-a-8 bg10 txt-s-105 cl13 hov-btn2 trans-04">
                                View Cart
                            </a>
                        </div>

                        <div class="mt-2">
                            <a href="{{route('checkout')}}" class="flex-c-m size-a-8 bg10 txt-s-105 cl13 hov-btn2 trans-04">
                                check out
                            </a>
                        </div>
                    @else
                        <div class="flex-w flex-sb-m p-b-31">
                            <span class="txt-m-103 cl3 p-r-20">Cart is empty!</span>
                        </div>
                    @endif
                </div>
            </div>
        </div>

        <!-- Button show menu -->
        <div class="btn-show-menu-mobile hamburger hamburger--squeeze">
				<span class="hamburger-box">
					<span class="hamburger-inner"></span>
				</span>
        </div>
    </div>

    <!-- Menu Mobile -->
    <div class="menu-mobile">
        <ul class="main-menu-m">
            <li class="active-menu"><a href="{{url('/')}}">Home</a></li>

            <li><a href="{{route('about')}}">About us</a></li>

            <li>
                <a href="javascript:;">Products</a>
                <ul class="sub-menu-m">
                    @if($headerCategories->count() > 0)
                        @foreach($headerCategories as $headerCategory)
                            <li><a href="{{url('shop/'.$headerCategory->slug)}}">{{$headerCategory->name}}</a></li>
                        @endforeach
                    @endif
                </ul>

                <span class="arrow-main-menu-m">
                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                </span>
            </li>

            <li><a href="{{route('blog')}}">Blogs</a></li>

            <li><a href="{{route('gallery')}}">Gallery</a></li>

            <li><a href="{{route('contact')}}">Contact</a></li>
        </ul>
    </div>

    <!-- Modal Search -->
    <div class="modal-search-header flex-c-m trans-04 js-hide-modal-search">
        <button class="flex-c-m btn-hide-modal-search trans-04 js-hide-modal-search">
            <span class="lnr lnr-cross"></span>
        </button>

        <div class="container-search-header">
            <form action="{{route('search_product')}}" class="wrap-search-header flex-w" method="get">
                <button class="flex-c-m trans-04">
                    <span class="lnr lnr-magnifier"></span>
                </button>
                <input class="plh1" type="text" name="search_products" value="@if(isset($keyword)){{$keyword}}@endif" placeholder="Search...">
            </form>
        </div>
    </div>
</header>
