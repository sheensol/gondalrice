@extends('layouts.app2')

@section('title', 'Gondal Rice: My Account')

@section('assets')
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
    </style>
@endsection

@section('content')

    <!-- Title page -->
    <section class="how-overlay2 bg-img1" style="background-image: url('{{asset('assets/images/bg-07.jpg')}}');">
        <div class="container">
            <div class="txt-center p-t-160 p-b-165">
                <h2 class="txt-l-101 cl0 txt-center p-b-14 respon1">
                    My Account
                </h2>

                <span class="txt-m-201 cl0 flex-c-m flex-w">
					<a href="{{url('/')}}" class="txt-m-201 cl0 hov-cl10 trans-04 m-r-6">
						Home
					</a>

					<span>
						/ My Account
					</span>
				</span>
            </div>
        </div>
    </section>

    <!-- content page -->
    <div class="bg0 p-t-95 p-b-70">
        <div class="container">
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

            <!-- Tab03 -->
            <div class="tab03">
                <div class="row">
                    <div class="col-md-3 col-lg-2 p-b-30">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item p-b-16">
                                <a class="nav-link active" data-toggle="tab" href="#dashboard" role="tab">Dashboard</a>
                            </li>

                            <li class="nav-item p-b-16">
                                <a class="nav-link" data-toggle="tab" href="#orders" role="tab">My Orders</a>
                            </li>

                            {{--<li class="nav-item p-b-16">
                                <a class="nav-link" data-toggle="tab" href="#downloads" role="tab">Downloads</a>
                            </li>

                            <li class="nav-item p-b-16">
                                <a class="nav-link" data-toggle="tab" href="#addresses" role="tab">Addresses</a>
                            </li>--}}

                            <li class="nav-item p-b-16">
                                <a class="nav-link" data-toggle="tab" href="#account-details" role="tab">Account details</a>
                            </li>

                            <li class="nav-item p-b-16">
                                <a class="nav-link" data-toggle="tab" href="#change-password" role="tab">Change Password</a>
                            </li>

                            <li class="nav-item p-b-16">
                                <a class="nav-link" href="{{route('logout')}}">Logout</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-md-9 col-lg-10 p-b-30">
                        <!-- Tab panes -->
                        <div class="tab-content p-l-70 p-l-0-lg">
                            <!-- - -->
                            <div class="tab-pane fade show active" id="dashboard" role="tabpanel">
                                <p class="txt-s-101 cl6 p-b-18">
                                    Hello <span class="txt-s-108">{{Auth::user()->first_name}} {{Auth::user()->last_name}}</span>
                                </p>

                                <p>
                                    From your account dashboard you can view your recent orders, manage your shipping and billing addresses and edit your password and account details.
                                </p>
                            </div>

                            <!-- - -->
                            <div class="tab-pane fade" id="orders" role="tabpanel">
                                @if($orders->count())
                                    <table width="100%">
                                        <tr>
                                            <th>Invoice No</th>
                                            <th>Merchant</th>
                                            <th>Total Amount</th>
                                            <th>Status</th>
                                        </tr>

                                        @foreach($orders as $order)
                                            @php
                                                $status = "";
                                                if($order->status==1) {
                                                    $status = "<span class='text-danger'>Pending</span>";
                                                }
                                                if($order->status==2) {
                                                    $status = "<span class='green'>Paid</span>";
                                                }

                                                $merchant = "";
                                                if($order->merchant_id==1) {
                                                    $merchant = "Cash on delivery";
                                                }
                                                if($order->merchant_id==2) {
                                                    $merchant = "Jazz Cash";
                                                }
                                                if($order->merchant_id==3) {
                                                    $merchant = "Bank Account";
                                                }
                                            @endphp

                                            <tr>
                                                <td><a href="{{route('invoice',$order->id)}}" target="_blank">{{$order->invoice_no}}</a></td>
                                                <td>{{$merchant}}</td>
                                                <td>{{session('currency')}} {{$order->total_amount}}</td>
                                                <td>{!! $status !!}</td>
                                            </tr>
                                        @endforeach
                                    </table>
                                @else
                                    <div class="bo-all-1 bocl15 flex-w flex-sb-m p-rl-30 p-tb-10 p-rl-15-ssm">
                                        <div class="flex-t p-tb-8 m-r-30">
                                            <img class="m-t-6 m-r-10" src="{{asset('assets/images/icons/icon-list.png')}}" alt="IMG">
                                            <span class="size-w-53 txt-s-101 cl6">
                                                No order has been made yet.
                                            </span>
                                        </div>

                                        <a href="{{url('/')}}" class="flex-c-m txt-s-105 cl0 bg10 size-a-42 hov-btn2 trans-04 p-rl-10 m-tb-8">
                                            go shop
                                        </a>
                                    </div>
                                @endif
                            </div>

                            <!-- - -->
                            {{--<div class="tab-pane fade" id="downloads" role="tabpanel">
                                <div class="bo-all-1 bocl15 flex-w flex-sb-m p-rl-30 p-tb-10 p-rl-15-ssm">
                                    <div class="flex-t p-tb-8 m-r-30">
                                        <img class="m-t-6 m-r-10" src="images/icons/icon-list2.png" alt="IMG">
                                        <span class="size-w-53 txt-s-101 cl6">
											No downloads available yet.
										</span>
                                    </div>

                                    <a href="shop-sidebar-grid.html" class="flex-c-m txt-s-105 cl0 bg10 size-a-42 hov-btn2 trans-04 p-rl-10 m-tb-8">
                                        go shop
                                    </a>
                                </div>
                            </div>--}}

                            <!-- - -->
                            {{--<div class="tab-pane fade" id="addresses" role="tabpanel">
                                <p class="txt-s-101 cl6">
                                    The following addresses will be used on the checkout page by default.
                                </p>

                                <div class="flex-w flex-sb p-t-37">
                                    <div class="size-w-63 flex-t w-full-sm p-b-35">
                                        <div class="size-w-53 p-r-30">
                                            <h5 class="txt-m-109 cl3 p-b-7">
                                                Billing address
                                            </h5>

                                            <p class="txt-s-101 cl6">
                                                You have not set up this type of address yet.
                                            </p>
                                        </div>

                                        <a href="#" class="txt-s-115 cl10 hov12 hov-cl10 p-t-6">
                                            Edit
                                        </a>
                                    </div>

                                    <div class="size-w-63 flex-t w-full-sm p-b-35">
                                        <div class="size-w-53 p-r-30">
                                            <h5 class="txt-m-109 cl3 p-b-7">
                                                Shipping address
                                            </h5>

                                            <p class="txt-s-101 cl6">
                                                You have not set up this type of address yet.
                                            </p>
                                        </div>

                                        <a href="#" class="txt-s-115 cl10 hov12 hov-cl10 p-t-6">
                                            Edit
                                        </a>
                                    </div>
                                </div>
                            </div>--}}

                            <!-- - -->
                            <div class="tab-pane fade" id="account-details" role="tabpanel">
                                <form action="{{route('myprofile')}}" method="post">
                                    @csrf
                                    <input type="hidden" name="user_id" id="user_id" value="{{Auth::user()->id}}">
                                    <div class="row">
                                        <div class="col-sm-6 p-b-23">
                                            <div>
                                                <div class="txt-s-101 cl6 p-b-10">
                                                    First Name <span class="cl12">*</span>
                                                </div>

                                                <input class="txt-s-120 cl3 size-a-21 bo-all-1 bocl15 p-rl-20 focus1" type="text" name="first_name" value="{{Auth::user()->first_name}}" readonly />
                                            </div>
                                        </div>

                                        <div class="col-sm-6 p-b-23">
                                            <div>
                                                <div class="txt-s-101 cl6 p-b-10">
                                                    Last Name <span class="cl12">*</span>
                                                </div>

                                                <input class="txt-s-120 cl3 size-a-21 bo-all-1 bocl15 p-rl-20 focus1" type="text" name="last_name" value="{{Auth::user()->last_name}}" readonly />
                                            </div>
                                        </div>

                                        <div class="col-sm-12 p-b-23">
                                            <div>
                                                <div class="txt-s-101 cl6 p-b-10">
                                                    Email address <span class="cl12">*</span>
                                                </div>

                                                <input class="txt-s-120 cl3 size-a-21 bo-all-1 bocl15 p-rl-20 focus1" type="email" name="email" value="{{Auth::user()->email}}" placeholder="example@abc.xyz" readonly />
                                            </div>
                                        </div>

                                        {{--<div class="col-sm-6 p-b-23">
                                            <div>
                                                <div class="txt-s-101 cl6 p-b-10">
                                                    Company Name
                                                </div>

                                                <input class="txt-s-120 cl3 size-a-21 bo-all-1 bocl15 p-rl-20 focus1" type="text" name="company" id="company" value="{{Auth::user()->company}}" required />
                                            </div>
                                        </div>--}}

                                        <div class="col-sm-6 p-b-23">
                                            <div>
                                                <div class="txt-s-101 cl6 p-b-10">
                                                    Address Line 1 <span class="cl12">*</span>
                                                </div>
                                                <input class="plh2 txt-s-120 cl3 size-a-21 bo-all-1 bocl15 p-rl-20 focus1 m-b-20" type="text" name="address1" value="{{Auth::user()->address1}}" placeholder="Street address" required />
                                            </div>
                                        </div>

                                        <div class="col-sm-6 p-b-23">
                                            <div>
                                                <div class="txt-s-101 cl6 p-b-10">
                                                    Address Line 2 <span class="cl12">*</span>
                                                </div>
                                                <input class="plh2 txt-s-120 cl3 size-a-21 bo-all-1 bocl15 p-rl-20 focus1" type="text" name="address2" value="{{Auth::user()->address2}}" placeholder="Apartment, suite, unit etc. (optional)" required />
                                            </div>
                                        </div>

                                        <div class="col-sm-6 p-b-23">
                                            <div>
                                                <div class="txt-s-101 cl6 p-b-10">
                                                    Town/City <span class="cl12">*</span>
                                                </div>

                                                <input class="txt-s-120 cl3 size-a-21 bo-all-1 bocl15 p-rl-20 focus1" type="text" name="city" value="{{Auth::user()->city}}" required />
                                            </div>
                                        </div>

                                        {{--<div class="col-sm-6 p-b-23">
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

                                        <div class="col-sm-6 p-b-23">
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

                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12 p-b-23">
                                            <button type="submit" class="flex-c-m txt-s-105 cl0 bg10 size-a-43 hov-btn2 trans-04 p-rl-10">
                                                Save Pofile
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>

                            <!-- - -->
                            <div class="tab-pane fade" id="change-password" role="tabpanel">
                                <form action="{{route('change_password')}}" method="post">
                                    @csrf
                                    <div class="row">

                                        <div class="col-12 p-b-23">
                                            <div>
                                                <div class="txt-s-101 cl6 p-b-10">
                                                    Current Password
                                                </div>

                                                <input class="txt-s-120 cl3 size-a-21 bo-all-1 bocl15 p-rl-20 focus1" type="password" name="current_password" required />
                                            </div>
                                        </div>

                                        <div class="col-12 p-b-23">
                                            <div>
                                                <div class="txt-s-101 cl6 p-b-10">
                                                    New Password
                                                </div>

                                                <input class="txt-s-120 cl3 size-a-21 bo-all-1 bocl15 p-rl-20 focus1" type="password" name="new_password" required />
                                            </div>
                                        </div>

                                        <div class="col-12 p-b-23">
                                            <div>
                                                <div class="txt-s-101 cl6 p-b-10">
                                                    Confirm New Password
                                                </div>

                                                <input class="txt-s-120 cl3 size-a-21 bo-all-1 bocl15 p-rl-20 focus1" type="password" name="confirm_password" required />
                                            </div>
                                        </div>

                                        <div class="flex-w p-rl-15 p-t-17">
                                            <button type="submit" class="flex-c-m txt-s-105 cl0 bg10 size-a-43 hov-btn2 trans-04 p-rl-10">
                                                Change Password
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('scripts')

@endsection
