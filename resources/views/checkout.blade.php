@extends('layouts.app2')

@section('title', 'Gondal Rice: Cart')

@section('assets')

@endsection

@section('content')

    <!-- Title page -->
    {{--<section class="how-overlay2 bg-img1" style="background-image: url('{{asset('assets/images/bg-07.jpg')}}');">
        <div class="container">
            <div class="txt-center p-t-160 p-b-165">
                <h2 class="txt-l-101 cl0 txt-center p-b-14 respon1">
                    Checkout
                </h2>

                <span class="txt-m-201 cl0 flex-c-m flex-w">
					<a href="{{url('/')}}" class="txt-m-201 cl0 hov-cl10 trans-04 m-r-6">
						Home
					</a>

					<span>
						/ Checkout
					</span>
				</span>
            </div>
        </div>
    </section>--}}

    <!-- content page -->
    <div class="bg0 p-t-95 p-b-50">

        <div class="container">
            <!-- Login -->
            {{--<div>
                <div class="txt-s-101 txt-center">
					<span class="cl3">
						Returning customer?
					</span>

                    <span class="cl10 hov12 js-toggle-panel1">
						Click here to login
					</span>
                </div>

                <div class="how-bor3 p-rl-15 p-tb-28 m-tb-33 dis-none js-panel1">
                    <form class="size-w-60 m-rl-auto">
                        <p class="txt-s-120 cl9 txt-center p-b-26">
                            If you have shopped with us before, please enter your details in the boxes below. If you are a new customer, please proceed to the Billing & Shipping section.
                        </p>

                        <div class="row">
                            <div class="col-sm-6 p-b-20">
                                <div>
                                    <div class="txt-s-101 cl6 p-b-10">
                                        Username or email <span class="cl12">*</span>
                                    </div>

                                    <input class="txt-s-120 cl3 size-a-21 bo-all-1 bocl15 p-rl-15 focus1" type="text" name="username">
                                </div>
                            </div>

                            <div class="col-sm-6 p-b-20">
                                <div>
                                    <div class="txt-s-101 cl6 p-b-10">
                                        Password <span class="cl12">*</span>
                                    </div>

                                    <input class="txt-s-120 cl3 size-a-21 bo-all-1 bocl15 p-rl-15 focus1" type="password" name="password">
                                </div>
                            </div>

                            <div class="col-12">
                                <button class="flex-c-m txt-s-105 cl0 bg10 size-a-21 hov-btn2 trans-04 p-rl-10">
                                    Login
                                </button>

                                <div class="flex-w flex-m p-t-10 p-b-3">
                                    <input id="check-creatacc" class="size-a-35 m-r-10" type="checkbox" name="creatacc">
                                    <label for="check-creatacc" class="txt-s-101 cl9">
                                        Create an account?
                                    </label>
                                </div>

                                <a href="#" class="txt-s-101 cl9 hov-cl10 trans-04">
                                    Lost your password?
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>--}}

            <!-- enter code -->
            {{--<div class="p-t-17 p-b-70">
                <div class="txt-s-101 txt-center">
					<span class="cl3">
						Have a coupon?
					</span>

                    <span class="cl10 hov12 js-toggle-panel1">
						Click here to enter your code
					</span>
                </div>

                <div class="m-t-35 dis-none js-panel1">
                    <div class="size-w-60 flex-w m-rl-auto">
                        <input class="bo-all-1 bocl15 focus1 size-a-37 txt-s-120 cl3 plh2 p-rl-20 w-full-sm" type="text" name="coupon" placeholder="Coupon code">
                        <button class="bg10 size-a-36 txt-s-105 cl0 p-rl-15 trans-04 hov-btn2 mt-4 mt-sm-0 w-full-sm">
                            Apply coupon
                        </button>
                    </div>
                </div>
            </div>--}}

            @if (Session::has('success'))
                <div class="alert alert-success">
                    {{ Session::get('success') }}
                </div>
            @endif

            @if (Session::has('error'))
                <div class="alert alert-danger">
                    {{ Session::get('error') }}
                </div>
            @endif

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{route('checkout')}}" method="post">
                @csrf
                <input type="hidden" name="user_id" id="user_id" value="{{Auth::user()->id}}">

                <div class="row">
                    <div class="col-md-7 col-lg-8 p-b-50">
                        <div>
                            <h4 class="txt-m-124 cl3 p-b-28">
                                Billing details
                            </h4>

                            <div class="row p-b-50">
                                <div class="col-sm-6 p-b-23">
                                    <div>
                                        <div class="txt-s-101 cl6 p-b-10">
                                            First Name <span class="cl12">*</span>
                                        </div>

                                        <input class="txt-s-120 cl3 size-a-21 bo-all-1 bocl15 p-rl-20 focus1" type="text" name="first_name" value="{{ Auth::user()->first_name }}" readonly />
                                    </div>
                                </div>

                                <div class="col-sm-6 p-b-23">
                                    <div>
                                        <div class="txt-s-101 cl6 p-b-10">
                                            Last Name <span class="cl12"></span>
                                        </div>

                                        <input class="txt-s-120 cl3 size-a-21 bo-all-1 bocl15 p-rl-20 focus1" type="text" name="last_name" value="{{ Auth::user()->last_name }}" readonly />
                                    </div>
                                </div>

                                <div class="col-12 p-b-23">
                                    <div>
                                        <div class="txt-s-101 cl6 p-b-10">
                                            Address <span class="cl12">*</span>
                                        </div>

                                        <input class="plh2 txt-s-120 cl3 size-a-21 bo-all-1 bocl15 p-rl-20 focus1 m-b-20" type="text" name="address1" value="{{Auth::user()->address1}}" placeholder="Street address" required />

                                        <input class="plh2 txt-s-120 cl3 size-a-21 bo-all-1 bocl15 p-rl-20 focus1" type="text" name="address2" value="{{Auth::user()->address2}}" placeholder="Apartment, suite, unit etc. (optional)" required />
                                    </div>
                                </div>

                                <div class="col-12 p-b-23">
                                    <div>
                                        <div class="txt-s-101 cl6 p-b-10">
                                            Town/City <span class="cl12">*</span>
                                        </div>

                                        <input class="txt-s-120 cl3 size-a-21 bo-all-1 bocl15 p-rl-20 focus1" type="text" name="city" value="{{Auth::user()->city}}" required />
                                    </div>
                                </div>

                                {{--<div class="col-12 p-b-23">
                                    <div>
                                        <div class="txt-s-101 cl6 p-b-10">
                                            Country <span class="cl12">*</span>
                                        </div>

                                        <div class="rs1-select2 rs2-select2 bg0 w-full bo-all-1 bocl15 m-tb-7 m-r-15">
                                            <select class="js-select2" name="country" id="country" required>
                                                <option value="" selected>Select Country</option>
                                                @foreach($countries as $country)
                                                    <option value="{{$country->id}}" @if($country->id==Auth::user()->country) selected @endif>{{$country->name}}</option>
                                                @endforeach
                                                <option>UK</option>
                                            </select>
                                            <div class="dropDownSelect2"></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 p-b-23">
                                    <div>
                                        <div class="txt-s-101 cl6 p-b-10">
                                            Postcode / Zip <span class="cl12">*</span>
                                        </div>

                                        <input class="txt-s-120 cl3 size-a-21 bo-all-1 bocl15 p-rl-20 focus1" type="text" name="postcode" value="{{Auth::user()->zipcode}}" required />
                                    </div>
                                </div>--}}

                                <div class="col-sm-6 p-b-23">
                                    <div>
                                        <div class="txt-s-101 cl6 p-b-10">
                                            Phone <span class="cl12">*</span>
                                        </div>

                                        <input class="txt-s-120 cl3 size-a-21 bo-all-1 bocl15 p-rl-20 focus1" type="text" name="phone" value="{{Auth::user()->phone}}" required />
                                    </div>
                                </div>

                                <div class="col-sm-6 p-b-23">
                                    <div>
                                        <div class="txt-s-101 cl6 p-b-10">
                                            Email Address <span class="cl12">*</span>
                                        </div>

                                        <input class="txt-s-120 cl3 size-a-21 bo-all-1 bocl15 p-rl-20 focus1" type="text" name="email" value="{{Auth::user()->email}}" readonly>
                                    </div>
                                </div>

                                {{--<div class="flex-w flex-m p-rl-15 m-t--10">
                                    <input id="check-ca" class="size-a-35 m-r-10" type="checkbox" name="ca">
                                    <label for="check-ca" class="txt-s-101 cl9">
                                        Create an account?
                                    </label>
                                </div>--}}
                            </div>

                            {{--<h4 class="txt-m-124 cl3 p-b-19">
                                Additional information
                            </h4>

                            <div>
                                <div class="txt-s-101 cl6 p-b-10">
                                    Order notes
                                </div>

                                <textarea class="plh2 txt-s-120 cl3 size-a-38 bo-all-1 bocl15 p-rl-20 p-tb-10 focus1" name="note" placeholder="Note about your order, eg. special notes fordelivery."></textarea>
                            </div>--}}
                        </div>
                    </div>

                    <div class="col-md-5 col-lg-4 p-b-50">
                        <div class="how-bor4 p-t-35 p-b-40 p-rl-30 m-t-5">
                            <h4 class="txt-m-124 cl3 p-b-11">
                                Your Order
                            </h4>

                            <div class="flex-w flex-sb-m txt-m-103 cl6 bo-b-1 bocl15 p-b-21 p-t-18">
                                <span>
                                    Product
                                </span>

                                <span>
                                    Total
                                </span>
                            </div>

                            <!--  -->
                            @php
                                $total = 0;
                            @endphp

                            @foreach($carts as $cart)
                                @php
                                    $product = \App\Product::where('id',$cart->product_id)->first();
                                    $total = $total + ($product->price * $cart->quantity);
                                @endphp
                                <div class="flex-w flex-sb-m txt-s-101 cl6 bo-b-1 bocl15 p-b-21 p-t-18">
                                    <span>
                                        {{$product->name}}
                                        <img class="m-rl-3" src="{{asset('assets/images/icons/icon-multiply.png')}}" alt="icon">
                                        {{$cart->quantity}} Kg
                                    </span>

                                    <span>
                                        {{session('currency')}} {{$product->price * $cart->quantity}}
                                    </span>
                                </div>
                            @endforeach

                            @php
                                session(['total_amount' => $total]);
                            @endphp



                            {{--<div class="flex-w flex-sb-m txt-s-101 cl6 bo-b-1 bocl15 p-b-21 p-t-18">
                                <span>
                                    SK Sella Rice
                                    <img class="m-rl-3" src="images/icons/icon-multiply.png" alt="icon">
                                    5Kg
                                </span>

                                <span>
                                    Rs: 850
                                </span>
                            </div>--}}

                            <!--  -->
                            <div class="flex-w flex-m txt-m-103 bo-b-1 bocl15 p-tb-23">
                                <span class="size-w-61 cl6">
                                    Subtotal
                                </span>

                                <span class="size-w-62 cl9">
                                    {{session('currency')}} {{$total}}
                                </span>
                            </div>

                            <div class="flex-w flex-m txt-m-103 p-tb-23">
                                <span class="size-w-61 cl6">
                                    Total
                                </span>

                                <span class="size-w-62 cl10">
                                    {{session('currency')}} {{$total}}
                                </span>
                            </div>

                            <div class="bo-all-1 bocl15 p-b-25 m-b-30">

                                <div class="flex-w flex-m bo-b-1 bocl15 p-rl-20 p-tb-16">
                                    <input class="m-r-15" id="radio1" type="radio" name="payment" value="1" checked="checked">
                                    <label class="txt-m-103 cl6" for="radio1">
                                        Cash on Delivery
                                    </label>
                                </div>

                                <div class="content-cash bo-b-1 bocl15 p-rl-20 p-tb-15">
                                    <p class="txt-s-120 cl9">
                                        Pay cash on delivery and you will have a chance of inspecting your product
                                    </p>
                                </div>

                                <div class="flex-w flex-m p-rl-20 p-t-17 p-b-10">
                                    <input class="m-r-15" id="radio2" type="radio" name="payment" value="2">
                                    <label class="txt-m-103 cl6" for="radio2">
                                        JazzCash Payment
                                    </label>

                                    {{--<div class="w-full p-l-29 p-t-16">
                                        <a href="#"><img src="{{asset('assets/images/icons/paypal.png')}}" alt="IMG"></a>
                                    </div>--}}
                                </div>

                                <div class="content-jazzcash bo-tb-1 bocl15 p-rl-20 p-tb-15 m-tb-10 dis-none">
                                    <p class="txt-s-120 cl9">
                                        You can pay us through jazz account (0300-4488496)
                                    </p>
                                </div>


                                <div class="flex-w flex-m bo-b-1 bocl15 p-rl-20 p-tb-16">
                                    <input class="m-r-15" id="radio3" type="radio" name="payment" value="3">
                                    <label class="txt-m-103 cl6" for="radio3">
                                        Bank Account
                                    </label>
                                </div>

                                <div class="content-bank bo-tb-1 bocl15 p-rl-20 p-tb-15 m-tb-10 dis-none">
                                    <p class="txt-s-120 cl9">
                                        You can pay us through bank deposit. Bank Account (IBAN)
                                    </p>
                                </div>

                                {{--<div class="p-l-49">
                                    <a href="#" class="txt-s-120 cl6 hov-cl10 trans-04 p-t-10">
                                        What is paypal?
                                    </a>
                                </div>--}}
                            </div>

                            <button type="submit" class="flex-c-m txt-s-105 cl0 bg10 size-a-21 hov-btn2 trans-04 p-rl-10">
                                Place order
                            </button>
                        </div>
                    </div>
                </div>
            </form>

        </div>
    </div>

@endsection

@section('scripts')

@endsection
